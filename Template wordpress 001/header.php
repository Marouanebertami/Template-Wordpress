<!DOCTYPE html>
<html>
<head>
    <title>Template Tutorial</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="body">
    <?php wp_nav_menu(array(
            'theme_location'=>'top',
            'menu_class'=>'top-menu')) ?>
    <!-- code afficher titre de la page -->
        <!--<?php echo get_the_title(get_option('page_for_posts', true)); ?>-->
    <!-- end code -->
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
