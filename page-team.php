<?php
/**
 * Template Name: Team Page
 *
 * @package nolimitbuzz-wp
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>

        <div class="team-members-grid">
            <?php
            $team_query = new \WP_Query(array(
                'post_type' => 'team-member',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));

            if ($team_query->have_posts()) :
                while ($team_query->have_posts()) :
                    $team_query->the_post();
                    get_template_part('template-parts/content', 'team-member');
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="no-team-members">No team members found.</p>';
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer();