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

            
            $args = array( 'post_type' => 'self_test', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    the_title();
                    echo '<div class="entry-content">';
                    the_content();
                    echo '</div>';
                endwhile;
                wp_reset_postdata();
			    the_post_navigation();

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
