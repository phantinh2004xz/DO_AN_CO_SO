<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <?php get_header(); ?>

    <main>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile; endif; ?>
    </main>

    <?php get_footer(); ?>
</body>
</html>
