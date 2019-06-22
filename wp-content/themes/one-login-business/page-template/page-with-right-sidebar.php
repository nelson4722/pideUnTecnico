<?php
/*
 Template Name: Page right sidebar
*/
get_header(); ?>

<div class="container">
	<div class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="content_area col-lg-8 col-md-8">	
					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/page/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.	?>
				</div>
				<div id="sidebar" class="col-lg-8 col-md-8">
					<?php dynamic_sidebar('sidebar-2'); ?> 
				</div>
			</div>
		</main>
	</div>
</div>

<?php get_footer();