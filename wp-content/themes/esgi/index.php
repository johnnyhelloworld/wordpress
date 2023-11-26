<?php get_header() ?>

<main id="site-content">
    <div class="intro">
        <h1>A really professional structure for all your events!</h1>
        <?php
            $attachment_id = 18;
            echo '<div class="image1">';
            echo wp_get_attachment_image($attachment_id, 'full');
            echo '</div>';
        ?>
    </div>
    <?php get_template_part('template-parts/template-about-us'); ?>
    <?php get_template_part('template-parts/template-services'); ?>
    <?php get_template_part('template-parts/template-partners'); ?>
</main>

<?php get_footer() ?>