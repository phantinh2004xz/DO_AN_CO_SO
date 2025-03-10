<?php get_header(); ?>
<main class="container mt-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
        <p><?php the_content(); ?></p>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
