<?php
/**
 * The template part for displaying single post content
 *
 * @package The Computer Repair
 * @subpackage the-computer-repair
 * @since the-computer-repair 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="post-info">
        <span class="entry-date"><?php the_date(); ?></span><span>|</span>
        <span class="entry-author"> <?php the_author(); ?></span><span>|</span>
        <span class="entry-comments"><?php comments_number( __('0 Comment', 'the-computer-repair'), __('0 Comments', 'the-computer-repair'), __('% Comments', 'the-computer-repair') ); ?> </span>
    </div>
    <h2><?php the_title(); ?></h2>
    <?php if(has_post_thumbnail()) { ?>
        <div class="feature-box">
            <img class="page-image" src="<?php the_post_thumbnail_url('full'); ?>" >
            <hr>
        </div>
        <?php } the_content();
        the_tags(); ?>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'the-computer-repair' ),
            ) );
        } elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'the-computer-repair' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'the-computer-repair' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'the-computer-repair' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'the-computer-repair' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
        }
    ?>
</div>