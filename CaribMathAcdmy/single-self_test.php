<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CaribbeanMathAcademy
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
             single-self_test.php
		<?php
		while ( have_posts() ) : the_post();

			
			get_template_part( 'template-parts/content', get_post_type() );

           		

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<?php get_sidebar();?>
	</div><!-- #primary -->
	
<?php

get_footer();?>
