<article id="our-services">
    <div class="our-services">
        <h2>Our Services.</h2>
        <?php
            $attachment_id = 29;
            echo '<div class="image12">';
            echo wp_get_attachment_image($attachment_id, 'full');
            echo '</div>';
        ?>
        <?php
            $attachment_id = 28;
            echo '<div class="image11">';
            echo wp_get_attachment_image($attachment_id, 'full');
            echo '</div>';
        ?>
        <div class="private-parties">
            <p>Private Parties</p>
        </div>
        <?php
            $attachment_id = 20;
            echo '<div class="image3">';
            echo wp_get_attachment_image($attachment_id, 'full');
            echo '</div>';
        ?>
    </div>
</article>