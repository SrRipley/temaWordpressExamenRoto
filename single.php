


<?php get_header(); ?>

Mi lobby
<?php
while (have_posts()) {
    the_post(); ?>

    <h2> <?php the_title(); ?> </h2>
    <h3> <?php the_author(); ?> </h3>

    <p> <?= the_content(); ?> </p>


<?php
}
?>
<?php get_footer(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class("blog-post"); ?>>
    <h2 class="blog-post-title"> <?php the_title(); ?> </h2>
    <p class="blog-post-meta">
        <?php the_date(); ?> por <?php the_author(); ?>
    </p>
    <div class="entry-content">
        <?php the_content();        ?>

        <?php if (previous_post_link()) { ?>

            <?php previous_post_link(); ?>

        <?php }; ?>

        <?php if (next_post_link()) { ?>

            <?php next_post_link(); ?>

        <?php }; ?>

    </div>


</article>