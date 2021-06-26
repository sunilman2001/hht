<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Our Teams
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package highhimalayantreks
 */

get_header(); ?>


			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'teams' );

			endwhile; // End of the loop.
			?>


<?php
get_footer();
