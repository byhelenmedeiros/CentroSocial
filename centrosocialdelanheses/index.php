<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <!-- title -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">

    </head>
<body>

    <?php get_template_part('components/navbar'); ?>
    <?php get_template_part('components/header'); ?>
    <?php get_template_part('components/respostassociais'); ?>
    <?php get_template_part('components/testemunhos'); ?>
    <?php get_template_part('components/logotipos'); ?>
    <?php get_template_part('components/footer'); ?>
