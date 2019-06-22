<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package The Computer Repair
 */
?>
        <div  id="footer" class="copyright-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <?php dynamic_sidebar('footer-1');?>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?php dynamic_sidebar('footer-2');?>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?php dynamic_sidebar('footer-3');?>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?php dynamic_sidebar('footer-4');?>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer-2">
          	<div class="copyright container">
                <p><?php echo esc_html(get_theme_mod('the_computer_repair_footer_text',__('&copy; Copyright 2019 -','the-computer-repair'))); ?> <?php the_computer_repair_credit(); ?></p>
                <a href="#" class="scrollup"><i class="fas fa-long-arrow-alt-up"></i></a>
          	</div>
          	<div class="clear"></div>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>