<?php get_header(); ?>
<h1>
    <?php
    echo get_bloginfo("name");
    ?>
</h1>
<?php

while (have_posts()) {
    the_post(); ?>

    <h2>
        <?php the_title(); ?>
    </h2>
    <h3>
        <?php the_author(); ?>
    </h3>

    <p>
        <?= the_excerpt(); ?>
    </p>

    <a href="<?= the_permalink(); ?>">ver más</a>
    
<?php
}
?>
<?php get_footer(); ?>
