<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<?php $meta_desc = "Hey there! I'm a web designer ready to add some pizzazz to your digital world. I specialize in creating user-friendly and visually appealing designs that not only look good, but solve real problems for your users. Whether you need a website, app, or any other digital product, I've got you covered. Let's chat and see how I can bring your ideas to life and give your users the seamless experience they deserve." ?>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Primary Meta Tags -->
    <meta name="title" content="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>">
    <meta name="description" content="<?php echo $meta_desc; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php bloginfo('url') ?>">
    <meta property="og:title" content="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:image" itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/src/img/meta_image.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php bloginfo('url') ?>">
    <meta property="twitter:title" content="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description'); ?>">
    <meta property="twitter:description" content="<?php echo $meta_desc; ?>">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/src/img/meta_image.png">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/src/img/favicon/apple-touch-icon.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- WP Head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>