<?php
/**
 * Title: Recent Podcasts (Light).
 * Slug: taxtabletalk/recent-podcasts-light
 * Categories: query, featured
 */
?><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"elements":{"link":{"color":{"text":"var:preset|color|custom-contrast"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","className":"is-style-outline-border"} -->
<h2 class="has-text-align-center is-style-outline-border">Recent Episodes</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"podcast","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none","color":"var:preset|color|custom-primary"},"right":{"width":"2px","color":"var:preset|color|custom-primary"},"bottom":{"width":"4px","color":"var:preset|color|custom-primary"},"left":{"color":"var:preset|color|custom-primary","width":"2px"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="border-top-color:var(--wp--preset--color--custom-primary);border-top-style:none;border-top-width:0px;border-right-color:var(--wp--preset--color--custom-primary);border-right-width:2px;border-bottom-color:var(--wp--preset--color--custom-primary);border-bottom-width:4px;border-left-color:var(--wp--preset--color--custom-primary);border-left-width:2px"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-date {"textAlign":"center"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-primary-background-color has-background wp-element-button" href="/podcast/">Load More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->