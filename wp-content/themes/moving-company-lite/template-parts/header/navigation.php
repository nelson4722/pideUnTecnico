<?php
/**
 * The template part for header
 *
 * @package Moving Company Lite 
 * @subpackage moving-company-lite
 * @since moving-company-lite 1.0
 */
?>

<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','moving-company-lite'); ?></a></div>
<div id="header" class="menubar">
	<div class="container">
		<div class="nav">
			<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
		</div>	
	</div>
</div>