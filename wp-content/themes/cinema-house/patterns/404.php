<?php
/**
 * Title: Page Not Found
 * Slug: cinema-house/not-found
 * Categories: cinema-house, not-found
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"40px","right":"20px","left":"20px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:60px;padding-right:20px;padding-bottom:40px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"160px","letterSpacing":"15px","lineHeight":"1"}},"textColor":"primary","className":"error-heading"} -->
<h2 class="wp-block-heading has-text-align-center error-heading has-primary-color has-text-color" style="font-size:160px;letter-spacing:15px;line-height:1">404</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"letterSpacing":"2px","lineHeight":"1.2"}},"fontSize":"gigantic"} -->
<h4 class="has-text-align-center has-gigantic-font-size" style="letter-spacing:2px;line-height:1.2"><?php esc_html_e('Page not found!','cinema-house'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Sorry, the page you are looking for does not exist or has been moved.','cinema-house'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"60px"}}}} -->
<div class="wp-block-buttons" style="margin-top:60px"><!-- wp:button {"style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/" style="border-radius:0px"><?php esc_html_e('Return Home','cinema-house'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->