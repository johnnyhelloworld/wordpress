<article id="our-partners">
    <div class="our-services">
        <h2>Our Partners.</h2>
    </div>

    <div class="logos">
        <?php
        function getPartnerLogo($setting_key) {
            $image_url = get_theme_mod($setting_key);
            if ($image_url) {
                return '<img src="' . esc_url($image_url) . '" alt="' . $setting_key . '">';
            } else {
                return 'Logo not found'; // Display an error message if the URL is empty or invalid
            }
        }
        echo '<div class="logo-partner-images">';
        echo '<div class="logoPartner1">' . getPartnerLogo('partner_logo_1') . '</div>';
        echo '<div class="logoPartner2">' . getPartnerLogo('partner_logo_2') . '</div>';
        echo '<div class="logoPartner3">' . getPartnerLogo('partner_logo_3') . '</div>';
        echo '<div class="logoPartner4">' . getPartnerLogo('partner_logo_4') . '</div>';
        echo '<div class="logoPartner5">' . getPartnerLogo('partner_logo_5') . '</div>';
        echo '<div class="logoPartner6">' . getPartnerLogo('partner_logo_6') . '</div>';
        echo '</div>'
        ?>
    </div>


</article>