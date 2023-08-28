<!DOCTYPE html>
<html <?= language_attributes( ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/css/<?= console_wp_set_color_scheme(); ?>">
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">

        <header>
            <div class="menu">
                <ul>
                    <li><a href="<?= bloginfo( 'url' ); ?>">/</a></li>
                    <?php get_template_part('template-parts/menu', 'main'); ?>
                </ul>
            </div>
        </header>