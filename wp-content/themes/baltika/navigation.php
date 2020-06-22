<nav class="desktop-menu">
    <div class="logo">
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri().'/assets/images/baltika.svg'; ?>" width="200" alt="">
        </a>
    </div>
    <div class="menu-wrap">
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => false
            );
            wp_nav_menu($args);
        ?>
    </div>
</nav>
<nav class="mobile-menu">
    <div class="black-fade"></div>
    <div class="row">
        <div class="col-6">
            <img src="<?php echo get_template_directory_uri().'/assets/images/baltika.svg'; ?>" class="mobile-logo" width="100%" alt="">
        </div>
        <div class="offset-4 col-2">
            <div class="burger-icon" id="burger-icon">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>
    <div class="menu-box">
        <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => false
            );
            wp_nav_menu($args);
        ?>
    </div>
</nav>