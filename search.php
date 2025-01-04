<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nolimitbuzz-wp
 */

get_header();
?>


<div class="container">
    <main class="site-main">
        <header class="search-header">
            <h1 class="search-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'nolimibuzz' ), get_search_query() ); ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'No results found.', 'nolimibuzz' ); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php
get_footer();
