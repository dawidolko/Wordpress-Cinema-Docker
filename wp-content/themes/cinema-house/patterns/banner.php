<?php
/**
 * Title: Banner
 * Slug: cinema-house/banner
 * Categories: cinema-house, banner
 */
?>

<!-- wp:group {"className":"bannerimage wow fadeInDown","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"13px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage wow fadeInDown" style="border-radius:13px;margin-top:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"spacing":{"margin":{"bottom":"var:preset|spacing|20","top":"0"}}}} -->
<h6 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Upcoming','cinema-house'); ?></h6>
<!-- /wp:heading -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":69,"dimRatio":0,"isUserOverlayColor":true,"minHeight":250,"minHeightUnit":"px","className":"banner-image-cover","style":{"border":{"radius":"13px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover banner-image-cover" style="border-radius:13px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20);min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-69" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><i class="fas fa-ticket"></i><?php esc_html_e('Book Now','cinema-house'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->