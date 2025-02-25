import React from 'react';
import { __ } from '@wordpress/i18n';
import { useStateValue } from '../utils/StateProvider';
import { useHistory, useLocation } from 'react-router-dom';
import apiFetch from '@wordpress/api-fetch';
import { ArrowRightIcon } from '@heroicons/react/24/outline';

function FooterNavigationBar( props ) {
	const { previousStep, nextStep, currentStep, maxSteps } = props;
	const paginationClass =
		'relative z-10 inline-flex items-center rounded-full p-1 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500';

	const [
		{
			settingsProcess,
			showFooterImportButton,
			action_button,
			isStoreCheckoutImported,
			selected_page_builder,
		},
	] = useStateValue();

	const query = new URLSearchParams( useLocation().search );
	const currentActiveStep = query.get( 'step' );

	const defaultNextButtonString = __( 'Next', 'cartflows' );

	const history = useHistory();

	const handlePreviousStep = function () {
		// if ( 'dashboard' === previousStep ) {
		// 	window.location = cartflows_wizard.admin_base_url;
		// 	return;
		// }
		if ( 'dashboard' !== previousStep ) {
			history.push( {
				pathname: 'index.php',
				search: `?page=cartflow-setup&step=` + previousStep,
			} );
		}

		return '';
	};

	const handleNextStep = function ( e ) {
		e.preventDefault();

		if ( '' !== nextStep && 'processing' !== settingsProcess ) {
			history.push( {
				pathname: 'index.php',
				search: `?page=cartflow-setup&step=` + nextStep,
			} );
		}

		if ( '' === nextStep && 'ready' === currentActiveStep ) {
			e.target.innerText = __( 'Redirecting..', 'cartflows' );

			const ajaxData = new window.FormData();

			ajaxData.append( 'action', 'cartflows_onboarding_exit' );
			ajaxData.append(
				'security',
				cartflows_wizard.onboarding_exit_nonce
			);
			ajaxData.append( 'current_step', currentActiveStep );

			apiFetch( {
				url: ajaxurl,
				method: 'POST',
				body: ajaxData,
			} ).then( ( response ) => {
				if ( response.success ) {
					let redirectUrl = '?page=cartflows';

					if ( isStoreCheckoutImported ) {
						// Redirect to Store Checkout.
						redirectUrl = redirectUrl + '&path=store-checkout';
					} else if ( 'bricks-builder' === selected_page_builder ) {
						// Redirect to Dashboard to create the template from scratch.
						redirectUrl = redirectUrl; // Redirect to the default page i:e dashboard itself.
					} else {
						// Redirec to Import the ready-made templates of start from scratch.
						redirectUrl = redirectUrl + '&path=library';
					}

					// Redirect to the created url.
					window.location.href =
						cartflows_wizard.admin_url + redirectUrl;
				}
			} );
		}
	};

	const getNextButtonString = function () {
		const stepsToSkip = [ 'ready', 'store-checkout', 'optin' ];

		if ( '' !== nextStep && ! stepsToSkip.includes( currentActiveStep ) ) {
			return defaultNextButtonString;
		} else if (
			( '' !== nextStep && 'store-checkout' === currentActiveStep ) ||
			'optin' === currentActiveStep
		) {
			return __( 'Skip', 'cartflows' );
		}
		return __( 'Finish Store Setup', 'cartflows' );
	};

	return (
		<>
			<footer className="wcf-setup-footer bg-white shadow-md-1 fixed inset-x-0 bottom-0 h-[70px] z-10">
				<div className="flex items-center justify-between max-w-md mx-auto px-7 py-4 h-full">
					<div className="wcf-footer-left-section flex">
						<div
							className={ `flex-shrink-0 flex text-sm font-normal hover:text-orange-500 cursor-pointer ${
								'dashboard' === previousStep
									? 'text-slate-300 pointer-events-none'
									: 'text-neutral-500'
							}` }
							onClick={ handlePreviousStep }
						>
							<button type="button">
								{ __( 'Back', 'cartflows' ) }
							</button>
						</div>
					</div>

					<div className="wcf-footer--pagination hidden md:-mt-px md:flex gap-3">
						{ Array( maxSteps )
							.fill()
							.map( ( i, index ) => {
								return (
									<span
										key={ index }
										className={ `wcf-footer-pagination--tab ${ paginationClass } ${
											currentStep === index
												? 'bg-primary-500'
												: 'bg-primary-100'
										}` }
									></span>
								);
							} ) }
					</div>

					<div className="wcf-footer-right-section flex">
						<button
							onClick={ handleNextStep }
							className={ `flex-shrink-0 flex text-sm text-neutral-500 font-normal hover:text-orange-500 cursor-pointer ${
								'processing' === settingsProcess
									? 'disabled pointer-events-none text-neutral-300'
									: ''
							}` }
						>
							{ getNextButtonString() }
						</button>
					</div>
				</div>

				{ 'store-checkout' === currentActiveStep &&
					showFooterImportButton && (
						<div className="wcf-import-instant-checkout absolute top-4 right-7">
							<button
								className={ `wcf-wizard--button wcf-import-global-flow px-5 py-2 text-sm ${ action_button?.button_class }` }
							>
								{ action_button.button_text }
								<ArrowRightIcon
									className="w-5 mt-0.5 ml-1.5 stroke-2"
									aria-hidden="true"
								/>
							</button>
						</div>
					) }
			</footer>
		</>
	);
}
export default FooterNavigationBar;
