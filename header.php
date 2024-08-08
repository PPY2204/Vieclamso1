<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/ll">
    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
    <div class="container-fluid">
        <header class="header ">
            <?php get_template_part('template-parts/header/header', 'main'); ?>
        </header>