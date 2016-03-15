<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">

    <header id="masthead" class="site-header" role="banner">
        <div class="container">

            <div class="header-top clearfix">
                <a class="logo" href="<?php echo home_url(); ?>"> <img
                        src="<?php bloginfo('template_directory') ?>/img/logo.png"/> </a>
                <!-- search -->
                <div class="search">
                    <?php get_search_form(); ?>
                </div>

            </div>
            <div class="header-bottom clearfix">

                <!-- navigation -->
                <nav class="site-nav menu clearfix">
                    <?php
                    $args = array(
                        'theme_location' => 'primary',
                        'menu_class' => 'active clearfix',
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>

                    <a class="toggle-nav" href="#">&#9776;</a>
                </nav>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
