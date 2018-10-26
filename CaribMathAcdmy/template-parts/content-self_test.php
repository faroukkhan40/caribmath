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
		while ( have_posts() ) :
			the_post();

            
            
                    the_title();
                    echo '<div class="entry-content">';
                            the_content();
                    echo '</div>';
               
			the_post_navigation();

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidear();
get_footer();
