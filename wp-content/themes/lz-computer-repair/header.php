<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'lz-computer-repair' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="container">
		<div class="top-header">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="logo">
				        <?php if( has_custom_logo() ){ lz_computer_repair_the_custom_logo();
				           }else{ ?>
				          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				          <?php $description = get_bloginfo( 'description', 'display' );
				          if ( $description || is_customize_preview() ) : ?> 
				            <p class="site-description"><?php echo esc_html($description); ?></p>
				        <?php endif; }?>
				    </div>
				</div>
				<div class="col-lg-8 col-md-12 p-0">
					<div class="row m-0">
						<div class="col-lg-4 col-md-3 contact">
							<?php if( get_theme_mod('lz_computer_repair_call1') != '' || get_theme_mod( 'lz_computer_repair_call' )!= ''){ ?>
								<div class="row">
									<div class="col-lg-2 col-md-2">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-lg-10 col-md-10 contact">
										<p class="para-call"><?php if( get_theme_mod('lz_computer_repair_call') != ''){ ?>
											<?php echo esc_html( get_theme_mod('lz_computer_repair_call','') ); ?>
											<?php } ?>
										</p>
										<p><?php if( get_theme_mod('lz_computer_repair_call1') != ''){ ?>
											<?php echo esc_html( get_theme_mod('lz_computer_repair_call1','') ); ?>
											<?php } ?>
										</p>
									</div>
								</div>		
							<?php } ?>
						</div>
						<div class="col-lg-4 col-md-5 contact">
							<?php if( get_theme_mod('lz_computer_repair_time') != '' || get_theme_mod( 'lz_computer_repair_time1' )!= ''){ ?>
								<div class="row">
									<div class="col-lg-2 col-md-2">
										<i class="far fa-clock"></i>
									</div>
									<div class="col-lg-10 col-md-10 contact">
										<p class="para-call"><?php if( get_theme_mod('lz_computer_repair_time') != ''){ ?>
											<?php echo esc_html( get_theme_mod('lz_computer_repair_time','') ); ?>
											<?php } ?>
										</p>
										<p><?php if( get_theme_mod('lz_computer_repair_time1') != ''){ ?>
											<?php echo esc_html( get_theme_mod('lz_computer_repair_time1','') ); ?>
										<?php } ?>
										</p>		
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="col-lg-4 col-md-4">
							<?php if ( get_theme_mod('lz_computer_repair_btn_text','') != "" ) {?>
								   	<div class="quote-btn">            
								     <a href="<?php echo esc_html( get_theme_mod('lz_computer_repair_btn_link','') ); ?>"><?php echo esc_html( get_theme_mod('lz_computer_repair_btn_text','') ); ?></a>
								    </div>      
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','lz-computer-repair'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 col-md-11">
					<div class="nav">
						<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
					</div>
				</div>
				<div class="col-lg-1 col-md-1">
					<div class="search-box ">
      					<i class="fas fa-search"></i>
      				</div>
				</div>
			</div>
			<div class="serach_outer">
		        <div class="closepop"><i class="far fa-window-close"></i></div>
		        <div class="serach_inner">
		          <?php get_search_form(); ?>
		        </div>
	      	</div> 
		</div>
	</div>
</div>