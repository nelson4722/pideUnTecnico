<?php
/**
 * The template part for displaying image post
 *
 * @package The Computer Repair
 * @subpackage the-computer-repair
 * @since the-computer-repair 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="entry-content">
        <h1><?php the_title();?></h1>    
        <div class="entry-attachment">
            <div class="attachment">
                <?php the_computer_repair_the_attached_image(); ?>
            </div>

            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <?php the_excerpt(); ?>
                </div>
            <?php endif; ?>
        </div>    
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'the-computer-repair' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>    
    <?php edit_post_link( __( 'Edit', 'the-computer-repair' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    <div class="clearfix"></div>
</div>