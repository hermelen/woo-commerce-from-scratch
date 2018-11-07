<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
	<body class="index">
    <header class='main-header'>
        <?php get_template_part('template-parts/navbar') ?>
        <?php get_template_part('template-parts/slider') ?>
    </header>
    <main class='site-content'>
      <div class="container">
        <div class="row" id="catalog">
