<?php get_header(); ?>

<main>
    <h1><?php _e('Welcome to','console-wp'); ?> <?= bloginfo( 'title' ); ?></h1>
    <br>
    <?php console_all_posts(); ?>
</main>

<?php get_footer(); ?>