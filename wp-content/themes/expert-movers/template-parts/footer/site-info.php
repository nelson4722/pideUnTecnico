<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage expert-movers
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<p><?php echo esc_html(get_theme_mod('expert_movers_footer_copy',__('Expert Movers WordPress Theme By','expert-movers'))); ?> <?php expert_movers_credit(); ?></p>
</div>