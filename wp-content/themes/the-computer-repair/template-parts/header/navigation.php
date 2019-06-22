<?php
/**
 * The template part for header
 *
 * @package The Computer Repair 
 * @subpackage the-computer-repair
 * @since the-computer-repair 1.0
 */
?>

<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','the-computer-repair'); ?></a></div>
<div id="header" class="menubar">
	<div class="container">
		<div class="nav">
			<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
		</div>	
	</div>
</div>