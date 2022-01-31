<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi gran sitio</title>
</head>
<body>
    <h1>
    Este es mi lobby
    <?php
    wp_title();
    echo get_bloginfo("name");
    ?>
    </h1>
    <?php 
    while(have_posts()){
        the_post();
    }
        ?>
    <h2> 
        <?php  the_title(); ?>
    </h2> 
    
    <h3><?php  the_author(); ?> </h3>
    <p>
        <?=the_content()?>
    </p>
    <a href="<?=the_permalink();?>">Ver más</a>
    <?php

?>
<?php get_footer(); ?>
    
