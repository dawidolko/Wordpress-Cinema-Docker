<?php
/**
 * Title: Header
 * Slug: cinema-house/header
 * Categories: cinema-house, header
 */
?>

<!-- wp:group {"className":"top-bar","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group top-bar" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:columns {"className":"top-bar-inner"} -->
<div class="wp-block-columns top-bar-inner"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-bottom:0"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"400"}},"textColor":"heading"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"search-block"} -->
<div class="wp-block-column is-vertically-aligned-center search-block" style="flex-basis:30%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search here anything","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"backgroundColor":"base","textColor":"heading"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"social-block"} -->
<div class="wp-block-column is-vertically-aligned-center social-block" style="flex-basis:30%"><!-- wp:social-links {"iconColor":"heading","iconColorValue":"#ffffff","iconBackgroundColor":"base","iconBackgroundColorValue":"#212121"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","className":"dummy-block"} -->
<div class="wp-block-column is-vertically-aligned-center dummy-block" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"icons-block"} -->
<div class="wp-block-column is-vertically-aligned-center icons-block" style="flex-basis:30%"><!-- wp:group {"className":"icons-inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group icons-inner"><!-- wp:image {"lightbox":{"enabled":false},"id":56,"scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/bell.png'); ?>" alt="" class="wp-image-56" style="object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":false},"id":51,"sizeSlug":"full","linkDestination":"custom","className":"account","style":{"border":{"radius":"50%","width":"1px"}},"borderColor":"heading"} -->
<figure class="wp-block-image size-full has-custom-border account"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/account.png'); ?>" alt="" class="has-border-color has-heading-border-color wp-image-51" style="border-width:1px;border-radius:50%"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"textColor":"heading","overlayMenu":"always","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"heading","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"16px","letterSpacing":"1px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontFamily":"poppins","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Latest Movies","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Bookings","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Trailers","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->