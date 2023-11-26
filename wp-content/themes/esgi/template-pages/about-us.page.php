<?php
// Template Name: About Us Page
get_header();
?>

<div class="intro-page">
    <h1>About us.</h1>
    <?php
        $attachment_id = 21;
        echo '<div class="image4">';
        echo wp_get_attachment_image($attachment_id, 'full');
        echo '</div>';
    ?>
</div>

<?php
echo "<div class='page-about-us'>";
get_template_part('template-parts/template-about-us');
echo '</div>';

// Display team member images
echo '<div class="team-member-images">';
echo '<h2>Our Team</h2>';
echo '<div class="team-member-images-container">';

for ($i = 1; $i <= 4; $i++) {
    $team_member_image_id = attachment_url_to_postid(get_theme_mod('team_member_' . $i));
    $team_member_image_url = get_theme_mod('team_member_' . $i);
    if ($team_member_image_url) {
        $team_member_image = get_post($team_member_image_id);

        $image_caption = $team_member_image->post_excerpt;
        $image_description = $team_member_image->post_content;

        echo '<div class="team-member-item">';
        echo '<img src="' . esc_url($team_member_image_url) . '" alt="Team Member ' . $i . '">';
        echo '<p class="caption">' . esc_html($image_caption) . '</p>';
        echo '<p class="description">' . esc_html($image_description) . '</p>';
        echo '</div>';
    }
}

echo '</div>';
echo '</div>';

get_footer();

?>