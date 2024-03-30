<?php

/**
 * Theme header template.
 * 
 * @package root
 * @author David Guerreiro
 */

 ?>

<!DOCTYPE html>
<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
       <title><?php echo esc_html(get_bloginfo('name')); ?></title>
       <?php wp_head(); ?>
   </head>
   <body>
       <main class="main">
        <header class="main-header">

            <?php 
                // display header top bar module.
                get_template_part('template-parts/header/header-top', 'bar'); 
            ?>
        </header>
