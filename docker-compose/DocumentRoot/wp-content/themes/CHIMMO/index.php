<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
</head>
<body>
    <?php get_header(); ?>
    <main>
    <?php while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    </main>
    <?php get_footer(); ?>
</body>
</html>