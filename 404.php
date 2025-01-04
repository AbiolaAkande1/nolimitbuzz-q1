<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nolimitbuzz-wp
 */

get_header();
?>
<div class="container">
    <main class="site-main">
        <section class="error-404">
            <header>
                <h1><?php esc_html_e( '404 - Page Not Found', 'nolimibuzz' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'nolimibuzz' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button">
                    <?php esc_html_e( 'Return to Homepage', 'nolimibuzz' ); ?>
                </a>
            </div>
        </section>
    </main>
</div>

<?php
get_footer();
