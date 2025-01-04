<?php
/**
 * Template part for displaying single posts
 *
 * @package nolimitbuzz-wp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
    <div class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        
        <div class="post-meta">
            <?php
            printf(
                '<div class="author-avatar">%s</div>',
                get_avatar( get_the_author_meta( 'ID' ), 60 )
            );
            ?>
            <div class="meta-info">
                <span class="author-name">
                    <?php the_author(); ?>
                </span>
                <span class="post-date">
                    <?php echo get_the_date(); ?>
                </span>
                <?php if ( get_the_author_meta( 'description' ) ) : ?>
                    <div class="author-bio">
                        <?php echo wp_kses_post( get_the_author_meta( 'description' ) ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="featured-image">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full' ); ?>
        <?php else : ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-image.png' ); ?>" 
                alt="<?php echo esc_attr( get_the_title() ); ?>" 
                class="default-featured-image" />
        <?php endif; ?>
    </div>  

    <div class="entry-excerpt">
        <?php the_excerpt(); ?>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>