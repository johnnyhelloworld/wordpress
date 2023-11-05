<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<header id="site-header">
            <div class="container">
                <div class="logo-container">
                    <a href="#"><?= getLogo('logo') ?></a>
                </div>
                <div class="menu-container">
                    <div class="menu-button">
                        <span><?= getMenu('menu') ?></span>
                    </div>
                    <?php if (has_nav_menu('primary_menu')) { 
                        echo '<nav class="main-menu">';
                        echo '<ul>';
                        echo '<div class="logo-container">' . getLogoInWhite('logInWhite') . '</div>';
                        echo '<span class="close-element">' . getClose('close') . '</span>';
                        echo '<p>Or try Search</p>';
                        wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'depth' => 2,
                            'container_class' => 'custom-menu',
                            'menu_class' => 'custom-menu-list'
                        ]);
                        echo '</ul>';
                        echo '</nav>';
                    }
                    ?>
                </div>
            </div>
		</header>