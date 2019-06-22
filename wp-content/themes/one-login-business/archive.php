<?php
/**
 * The template for displaying archive pages
 *
 * @package WordPress
 * @subpackage One Login Business
 * @since 1.0
 */

get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title"><span>', '</span></h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>
	<?php endif; ?>

	<div class="content-area">
		<div id="main" class="site-main" role="main">	
		<?php
            $left_right = get_theme_mod( 'one_login_business_layout_options','Right Sidebar');
                if($left_right == 'Left Sidebar'){ ?>	
	    	<div class="row">
	    		<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
		        <div id="" class="content_area col-lg-8 col-md-8">
			    	<section id="post_section">
			    		<div class="row">
							<?php
								if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/content' );

								endwhile;

								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif; 
							?>
						</div>
						<div class="navigation">
			                <?php
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'one-login-business' ),
			                        'next_text'          => __( 'Next page', 'one-login-business' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'one-login-business' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
			</div>
		<?php }else if($left_right == 'Right Sidebar'){ ?>	
			<div class="row">
		        <div id="" class="content_area col-lg-8 col-md-8">
			    	<section id="post_section">
			    		<div class="row">
							<?php
								if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/content' );

								endwhile;

								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif; 
							?>
						</div>
						<div class="navigation">
			                <?php
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'one-login-business' ),
			                        'next_text'          => __( 'Next page', 'one-login-business' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'one-login-business' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
				<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			</div>	
		<?php } else { ?>
			<div class="row">
		        <div id="" class="content_area col-lg-8 col-md-8">
			    	<section id="post_section">
			    		<div class="row">
							<?php
								if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/content' );

								endwhile;

								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif; 
							?>
						</div>
						<div class="navigation">
			                <?php
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'one-login-business' ),
			                        'next_text'          => __( 'Next page', 'one-login-business' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'one-login-business' ) . ' </span>',
			                    ) );
			                ?>
			                <div class="clearfix"></div>
			            </div>
					</section>
				</div>
				<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
			</div>	
		<?php }?>
		</div>
	</div>
</div>

<?php get_footer();
