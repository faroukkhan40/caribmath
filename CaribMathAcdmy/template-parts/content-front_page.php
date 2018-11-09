<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CaribbeanMathAcademy
 */
?>


		
       <!--------------------------------------------Page-header------------------------------ -->
			<header class="page-header" style='border:2px solid red'>
				this is entry header
				
				  <h2>increase tthat grade  get the 1 your deserves</h2>
				  
				  <?php ?>
			</header><!-- .page-header -->


       <!----------------------------------- Page-content------------------------------------- -->
       <!-------------------------------------contains 3 custom widgetize areas------------------------------------------------ -->
            <div class="entry-content" style='border:2px solid blue'>
			    
				        <div class= "widget-area">

									<?php if ( is_active_sidebar( 'self-test' ) ) : ?>
									<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
										<?php dynamic_sidebar( 'self-test' ); ?>
									</div><!-- #primary-sidebar -->
									<?php endif; ?>

							</div><!-- .widget-area -->	
				 	


				   		
							<div class= "widget-area">

									<?php if ( is_active_sidebar( 'past-papers' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'past-papers' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

							</div><!-- .widget-area -->
				 	
							
				  		
							<div class= "widget-area">

									
									
									
									<?php if ( is_active_sidebar( 'video-lessons' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'video-lessons' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

							</div><!-- .widget-area -->
				 	

							

           
    	   </div><!-- .End entry-content -->


		<!----------------------------------- Page-footer------------------------------------- -->
        <!----------------------------------- ------------------------------------------------ -->
           <footer class="entry-footer"style='border:2px solid green' >
			      this is entry footer
			
				 <h2 style="color:;font-size:20px;"> 150,000+ students watch 1,000,000+ video lessons every year
               Making LearnCoach the most trusted & popular tutorial provider in New Zealand</h2>
			
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'math-cseccxc' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
		


