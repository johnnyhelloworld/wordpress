<article id="about-us">
    <div class="about-us">
        <h2>About Us</h2>
        <p>Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.</p>
    </div>

    <div class="who-we-are">
        <?php
            $attachment_id = 19;
            echo '<div class="image2">';
            echo wp_get_attachment_image($attachment_id, 'full');
            echo '</div>';
        ?>
        <div class="informations">
            <div class="who-are-we">
                <h3>Who are we?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.</p>
            </div>
            <div class="our-vision">
                <h3>Our vision</h3>
                <p> Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.</p>
            </div>
            <div class="our-mission">
                <h3>Our mission</h3>
                <p>Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas. </p>
            </div>
        </div>
    </div>
</article>
