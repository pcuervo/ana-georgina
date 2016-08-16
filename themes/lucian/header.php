<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ZoTheme
 * @subpackage Zo Theme
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Facebook, Twitter metas -->
	<meta property="og:title" content="Ana Georgina Photography">
	<meta name="og:description" content="" />
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/share.jpg" alt="photography wedding">
	<meta property="og:image:width" content="210" />
	<meta property="og:image:height" content="110" />
	<meta property="fb:app_id" content="1347718481909811" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@anageorgina" />
	<meta name="twitter:title" content="Ana Georgina Photography" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/share.jpg" alt="photography wedding" />

	<!-- Sitemap Google Verify -->
	<meta name="google-site-verification" content="4Bt7KHVG0kzwetxi_LnrYR8QUCkKFdSNGA4PU2hpaDs" />

<!-- TYPEKIT -->
<script src="https://use.typekit.net/rfc6sqm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php zo_get_page_loading(); ?>
<?php zo_presets_selector(); ?>
<div id="page">
	<header id="masthead" class="site-header [ js-header ]">
		<?php zo_header(); ?>
	</header>
	<div class="[ main-body ]">
	    <?php zo_page_title(); ?>
		<div id="main">