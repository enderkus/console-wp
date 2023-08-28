<?php
get_header(); 
?>

<main>
    <?php
        the_title( '<h1>', '</h1>', true );
        the_content();
    ?>
</main>

<?php get_footer(); ?>