<header>
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
</header>
