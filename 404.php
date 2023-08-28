<?php
get_header(); 
?>

<main>
    <h1>404 !</h1>
    <p class="phrase"><?php _e('😕 Hmm... Seems you lost from my journey.','console-wp'); ?></p>
    <a class="solution" href="<?php bloginfo('url'); ?>"><?php _e('back home','console-wp'); ?></a>
</main>

<?php get_footer(); ?>