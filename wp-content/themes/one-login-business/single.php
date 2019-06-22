<?php
/**
 * The template for displaying all single posts
 * @package WordPress
 * @subpackage One Login Business
 * @since 1.0
 */

get_header(); ?>

<div class="container">
	<div class="content-area entry-content">
		<div id="main" class="site-main" role="main">
	    <?php
            $left_right = get_theme_mod( 'one_login_business_layout_options','Right Sidebar');
                if($left_right == 'Left Sidebar'){ ?>	
	    	<div class="row">
				<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
		        </div>	
	    		<div id="" class="content_area col-lg-8 col-md-8">
			    	<section id="post_section" class="">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'one-login-business' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'one-login-business' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'one-login-business' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'one-login-business' ) . '</span> ',
							) );

						endwhile; // End of the loop.
						?>
					</section>
				</div>   
			</div>
		<?php }else if($left_right == 'Right Sidebar'){ ?>	
			<div class="row">
	    		<div id="" class="content_area col-lg-8 col-md-8">
			    	<section id="post_section" class="">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'one-login-business' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'one-login-business' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'one-login-business' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'one-login-business' ) . '</span> ',
							) );

						endwhile; // End of the loop.
						?>
					</section>
				</div>
		        <div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
		        </div>		        
			</div>
		<?php } else { ?>
			<div class="row">
	    		<div id="" class="content_area col-lg-8 col-md-8">
			    	<section id="post_section" class="">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							the_post_navigation( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'one-login-business' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'one-login-business' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'one-login-business' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'one-login-business' ) . '</span> ',
							) );

						endwhile; // End of the loop.
						?>
					</section>
				</div>
		        <div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?>
		        </div>		        
			</div>
		<?php }?>
			<div class="clearfix"></div>		
		</div>
	</div>
</div>

<?php get_footer();
