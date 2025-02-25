<?php
/**
 * Title: Latest Movies
 * Slug: cinema-house/latest-movies
 * Categories: cinema-house, latest-movies
 */
?>

<!-- wp:heading {"className":"main-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"20px"}},"textColor":"heading"} -->
<h2 class="wp-block-heading main-heading has-heading-color has-text-color has-link-color" style="font-size:20px"><?php esc_html_e('Latest Movies','cinema-house'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"latest-wrap","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns latest-wrap"><!-- wp:column {"className":"latest-box"} -->
<div class="wp-block-column latest-box"><!-- wp:group {"className":"latest-inner","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-inner" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"video-popup","layout":{"type":"default"}} -->
<div class="wp-block-group video-popup"><!-- wp:getwid/video-popup {"titleColor":"white","id":106,"link":"","overlayOpacity":0,"className":"has-heading-0"} -->
<div class="wp-block-getwid-video-popup has-heading-0 has-image has-foreground-0"><a class="wp-block-getwid-video-popup__link" href="" aria-label="Watch Trailer"><div class="wp-block-getwid-video-popup__wrapper"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image1.png'); ?>" alt="Watch Trailer" class="wp-block-getwid-video-popup__image wp-block-getwid-video-popup__source wp-image-106"/><div class="wp-block-getwid-video-popup__button is-style-default"><div class="wp-block-getwid-video-popup__icon"><i class="fas fa-play" aria-hidden="true"></i></div></div></div></a><div class="wp-block-getwid-video-popup__caption"><p class="wp-block-getwid-video-popup__title has-text-color has-white-color"><?php esc_html_e('Watch Trailer','cinema-house'); ?></p></div></div>
<!-- /wp:getwid/video-popup --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"top","className":"sec-text-wrap","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"10px","bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top sec-text-wrap" style="margin-top:10px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"70%","className":"rating-left"} -->
<div class="wp-block-column is-vertically-aligned-top rating-left" style="flex-basis:70%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"}}} -->
<h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Spider Man','cinema-house'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"16px"}}} -->
<p style="margin-top:0;margin-bottom:0;font-size:16px"><?php esc_html_e('Action','cinema-house'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%","className":"rating-box"} -->
<div class="wp-block-column is-vertically-aligned-top rating-box" style="flex-basis:30%"><!-- wp:paragraph {"align":"center","className":"rating-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"30px"},"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"5px","bottom":"5px"}}},"backgroundColor":"primary","textColor":"white"} -->
<p class="has-text-align-center rating-text has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:5px;padding-right:var(--wp--preset--spacing--50);padding-bottom:5px;padding-left:var(--wp--preset--spacing--50);font-size:14px"><?php esc_html_e('8.0','cinema-house'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":144,"sizeSlug":"full","linkDestination":"none","className":"admin-img","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border admin-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/admin1.png'); ?>" alt="" class="wp-image-144" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Sam Raimi','cinema-house'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"box-meta","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<p class="box-meta" style="margin-top:var(--wp--preset--spacing--20);font-size:14px"><?php esc_html_e('Release date : ','cinema-house'); ?><span><?php esc_html_e('17-02-2025','cinema-house'); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"box-meta","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0"}}}} -->
<p class="box-meta" style="margin-top:0;font-size:14px"><?php esc_html_e('Genre : ','cinema-house'); ?><span><?php esc_html_e('Action, Superhero','cinema-house'); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"latest-box"} -->
<div class="wp-block-column latest-box"><!-- wp:group {"className":"latest-inner","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-inner" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"video-popup","layout":{"type":"default"}} -->
<div class="wp-block-group video-popup"><!-- wp:getwid/video-popup {"titleColor":"white","id":106,"link":"","overlayOpacity":0,"className":"has-heading-0"} -->
<div class="wp-block-getwid-video-popup has-heading-0 has-image has-foreground-0"><a class="wp-block-getwid-video-popup__link" href="" aria-label="Watch Trailer"><div class="wp-block-getwid-video-popup__wrapper"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image2.png'); ?>" alt="Watch Trailer" class="wp-block-getwid-video-popup__image wp-block-getwid-video-popup__source wp-image-106"/><div class="wp-block-getwid-video-popup__button is-style-default"><div class="wp-block-getwid-video-popup__icon"><i class="fas fa-play" aria-hidden="true"></i></div></div></div></a><div class="wp-block-getwid-video-popup__caption"><p class="wp-block-getwid-video-popup__title has-text-color has-white-color"><?php esc_html_e('Watch Trailer','cinema-house'); ?></p></div></div>
<!-- /wp:getwid/video-popup --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"top","className":"sec-text-wrap","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"10px","bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top sec-text-wrap" style="margin-top:10px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"70%","className":"rating-left"} -->
<div class="wp-block-column is-vertically-aligned-top rating-left" style="flex-basis:70%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"}}} -->
<h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Batman','cinema-house'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"16px"}}} -->
<p style="margin-top:0;margin-bottom:0;font-size:16px"><?php esc_html_e('Animated','cinema-house'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%","className":"rating-box"} -->
<div class="wp-block-column is-vertically-aligned-top rating-box" style="flex-basis:30%"><!-- wp:paragraph {"align":"center","className":"rating-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"30px"},"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"5px","bottom":"5px"}}},"backgroundColor":"primary","textColor":"white"} -->
<p class="has-text-align-center rating-text has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:5px;padding-right:var(--wp--preset--spacing--50);padding-bottom:5px;padding-left:var(--wp--preset--spacing--50);font-size:14px"><?php esc_html_e('8.0','cinema-house'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":144,"sizeSlug":"full","linkDestination":"none","className":"admin-img","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border admin-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/admin2.png'); ?>" alt="" class="wp-image-144" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('John Lasseter','cinema-house'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"box-meta","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<p class="box-meta" style="margin-top:var(--wp--preset--spacing--20);font-size:14px"><?php esc_html_e('Release date : ','cinema-house'); ?><span><?php esc_html_e('17-02-2025','cinema-house'); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"box-meta","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0"}}}} -->
<p class="box-meta" style="margin-top:0;font-size:14px"><?php esc_html_e('Genre : ','cinema-house'); ?><span><?php esc_html_e('Action, Superhero','cinema-house'); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"latest-box"} -->
<div class="wp-block-column latest-box"><!-- wp:group {"className":"latest-inner","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-inner" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"video-popup","layout":{"type":"default"}} -->
<div class="wp-block-group video-popup"><!-- wp:getwid/video-popup {"titleColor":"white","id":106,"link":"","overlayOpacity":0,"className":"has-heading-0"} -->
<div class="wp-block-getwid-video-popup has-heading-0 has-image has-foreground-0"><a class="wp-block-getwid-video-popup__link" href="" aria-label="Watch Trailer"><div class="wp-block-getwid-video-popup__wrapper"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/image3.png'); ?>" alt="Watch Trailer" class="wp-block-getwid-video-popup__image wp-block-getwid-video-popup__source wp-image-106"/><div class="wp-block-getwid-video-popup__button is-style-default"><div class="wp-block-getwid-video-popup__icon"><i class="fas fa-play" aria-hidden="true"></i></div></div></div></a><div class="wp-block-getwid-video-popup__caption"><p class="wp-block-getwid-video-popup__title has-text-color has-white-color"><?php esc_html_e('Watch Trailer','cinema-house'); ?></p></div></div>
<!-- /wp:getwid/video-popup --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"top","className":"sec-text-wrap","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"10px","bottom":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top sec-text-wrap" style="margin-top:10px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"top","width":"70%","className":"rating-left"} -->
<div class="wp-block-column is-vertically-aligned-top rating-left" style="flex-basis:70%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"}}} -->
<h3 class="wp-block-heading" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e('Avengers','cinema-house'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"16px"}}} -->
<p style="margin-top:0;margin-bottom:0;font-size:16px"><?php esc_html_e('Action','cinema-house'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%","className":"rating-box"} -->
<div class="wp-block-column is-vertically-aligned-top rating-box" style="flex-basis:30%"><!-- wp:paragraph {"align":"center","className":"rating-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"30px"},"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"5px","bottom":"5px"}}},"backgroundColor":"primary","textColor":"white"} -->
<p class="has-text-align-center rating-text has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:5px;padding-right:var(--wp--preset--spacing--50);padding-bottom:5px;padding-left:var(--wp--preset--spacing--50);font-size:14px"><?php esc_html_e('8.0','cinema-house'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:image {"id":144,"sizeSlug":"full","linkDestination":"none","className":"admin-img","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border admin-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/admin3.png'); ?>" alt="" class="wp-image-144" style="border-radius:8px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"poppins"} -->
<h2 class="wp-block-heading has-poppins-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Anthony Russo','cinema-house'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"box-meta","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<p class="box-meta" style="margin-top:var(--wp--preset--spacing--20);font-size:14px"><?php esc_html_e('Release date : ','cinema-house'); ?><span><?php esc_html_e('17-02-2025','cinema-house'); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"box-meta","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0"}}}} -->
<p class="box-meta" style="margin-top:0;font-size:14px"><?php esc_html_e('Genre : ','cinema-house'); ?><span><?php esc_html_e('Action, Superhero','cinema-house'); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->