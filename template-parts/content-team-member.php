<?php
/**
 * Template part for displaying team members
 *
 * @package nolimitbuzz-wp
 */

$id = get_the_ID();
$name = get_the_title();
$profile_picture = get_field('profile_picture', $id);
$position = get_field('position', $id);
$linkedin_profile = get_field('linkedin_profile', $id);
?>

<article class="team-member">
    <?php
    ?>
    
    <div class="team-member-inner">
        <?php if ($profile_picture) : ?>
            <div class="team-member-image">
                <img src="<?php echo esc_url($profile_picture); ?>"
                    alt="<?php echo esc_attr($name); ?>"
                    class="profile-picture">
            </div>
        <?php endif; ?>

        <div class="team-member-content">
            <h2 class="team-member-name"><?php echo $name; ?></h2>
            
            <?php if ($position) : ?>
                <div class="team-member-position"><?php echo esc_html($position); ?></div>
            <?php endif; ?>

            <?php if ($linkedin_profile) : ?>
                <a href="<?php echo esc_url($linkedin_profile); ?>" 
                   class="linkedin-link" 
                   target="_blank" 
                   rel="noopener noreferrer">
                    <?php echo esc_html('View LinkedIn Profile', 'nolimitbuzz-wp')?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</article>