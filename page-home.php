<?php
/* Template Name: Console Home Page */ 
get_header(); 
?>

<main>
    <?php
        the_title( '<h1>', '</h1>', true );
        the_content();
    ?>
    
    <br>
    <?php console_all_posts(); ?>
</main>

<?php get_footer(); ?>