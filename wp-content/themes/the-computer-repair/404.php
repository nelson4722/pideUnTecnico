<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package The Computer Repair
 */

get_header(); ?>

<div id="content-vw">
	<div class="container">
    	<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','the-computer-repair' ), esc_html__( 'Not Found', 'the-computer-repair' ) ) ?></h1>
		<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'the-computer-repair' ); ?></p>
		<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'the-computer-repair' ); ?></p>
		<div class="more-btn">
	        <a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'Go Back', 'the-computer-repair' ); ?></a>
	    </div>
		<div class="clearfix"></div>
	</div>
</div>

<?php get_footer(); ?>