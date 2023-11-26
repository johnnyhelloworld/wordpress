<?php
// Template Name: Services Page
get_header();

echo '<div class="page-services">';
get_template_part('template-parts/template-services');
echo '</div>';
?>
<div class="private_parties">
    <h2>Corp. Parties</h2>
    <p>Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.</p>
    <?php
        $attachment_id = 26;
        echo '<div class="image9">';
        echo wp_get_attachment_image($attachment_id, 'full');
        echo '</div>';
    ?>
</div>

<?php

get_footer();

?>