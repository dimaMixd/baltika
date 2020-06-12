<nav>
    <div class="logo">
        <a href="<?php home_url() ?>">
            <img src="<?php echo get_template_directory_uri().'/assets/images/baltika.svg' ?>" width="200" alt="">
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