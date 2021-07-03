<?php

/**

 * The template for displaying 404 pages (not found)

 *

 * @link https://codex.wordpress.org/Creating_an_Error_404_Page

 *

 * @package highhimalayantreks

 */



get_header(); ?>

<div class="section-content blog-section with-sidebar">
<div class="container content__404">
<div class="content__404--left">
	<h1><?php _e( 'Our Apologies!', 'highhimalayantreks' ); ?></h1>
	<div class="msg-text--not-found">
		<?php _e( 'It looks like nothing was found at this location. Maybe try a search?', '_ilt_themename' ); ?>
	</div>
		<?php get_search_form(); ?>	
</div>
</div>
</div>

	



<?php

get_footer();

