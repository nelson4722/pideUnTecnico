<?php
/**
 * The template for displaying search results pages
 * @package WordPress
 * @subpackage One Login Business
 * @since 1.0
 */

get_header(); ?>

<div class="container">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="entry-title"><span><?php /* translators: %s: search term */
            	printf( esc_html__( 'Results For: %s','one-login-business'), esc_html( get_search_query() ) ); ?>  </span>
            </h1>
		<?php else : ?>
			<h1 class="page-title"><span><?php esc_html_e( 'Nothing Found', 'one-login-business' ); ?></span></h1>
		<?php endif; ?>
	</header>

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
								if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/content' );

								endwhile; // End of the loop.

								else : ?>

								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'one-login-business' ); ?></p>
								<?php
									get_search_form();

								endif;
							?>
						</div>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
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
								if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/content' );

								endwhile; // End of the loop.

								else : ?>

								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'one-login-business' ); ?></p>
								<?php
									get_search_form();

								endif;
							?>
						</div>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
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
								if ( have_posts() ) :
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/content' );

								endwhile; // End of the loop.

								else : ?>

								<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'one-login-business' ); ?></p>
								<?php
									get_search_form();

								endif;
							?>
						</div>
						<div class="navigation">
			                <?php
			                    // Previous/next page navigation.
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
			<div class="clearfix"></div>		
		</div>
	</div>
</div>

<?php get_footer();