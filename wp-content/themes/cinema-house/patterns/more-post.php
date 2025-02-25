<?php
/**
 * Title: More Post
 * Slug: cinema-house/more-post
 * Categories: cinema-house, more-post
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">More Articles &amp; Posts</h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"related-post","fontSize":"small","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"inner-post-box","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"border":{"radius":"10px"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group inner-post-box has-base-background-color has-background" style="border-radius:10px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-featured-image {"style":{"border":{"radius":"10px"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:post-excerpt {"textAlign":"left","moreText":"","excerptLength":10} /-->

<!-- wp:group {"className":"archieve-readmore","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group archieve-readmore"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:read-more {"content":"Read More","style":{"typography":{"textDecoration":"none"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->