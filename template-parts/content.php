<?php
/**
 * Template part for displaying posts in the blog grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nolimitbuzz-wp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php 
			if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php else : ?>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-image.png' ); ?>" 
					alt="<?php echo esc_attr( get_the_title() ); ?>" 
					class="default-featured-image" />
			<?php endif; ?>
		</a>
	</div>

    <div class="post-content">
        <div class="entry-header">
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
		</div>
        <div class="entry-meta">
			<?php
			printf(
				'<div class="author-avatar">%s</div>',
				get_avatar( get_the_author_meta( 'ID' ), 40 )
			);
			?>
			<span class="author-name">
				<?php the_author(); ?>
			</span>
		</div>

        <div class="entry-excerpt">
            <?php the_excerpt(); ?>
        </div>

    </div>
</article>

