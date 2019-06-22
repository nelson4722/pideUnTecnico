<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage expert-movers
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'expert-movers' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="container">
		<div class="top-header">
			<div class="row">
				<div class="offset-lg-6 offset-md-6 col-lg-6 col-md-6 contact">
					<span class="call"><?php if( get_theme_mod('expert_movers_call1') != ''){ ?><i class="fas fa-phone"></i>
						<?php echo esc_html( get_theme_mod('expert_movers_call1','') ); ?>
						<?php } ?>
					</span>
					<span class="email"><?php if( get_theme_mod('expert_movers_email1') != ''){ ?><i class="fas fa-envelope"></i>
						<?php echo esc_html( get_theme_mod('expert_movers_email1','') ); ?>
						<?php } ?>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','expert-movers'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo">
				        <?php if( has_custom_logo() ){ expert_movers_the_custom_logo();
				           }else{ ?>
				          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				          <?php $description = get_bloginfo( 'description', 'display' );
				          if ( $description || is_customize_preview() ) : ?> 
				            <p class="site-description"><?php echo esc_html($description); ?></p>
				        <?php endif; }?>
				    </div>
				</div>
				<div class="col-lg-9 col-md-9">
					<div class="nav">
						<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>