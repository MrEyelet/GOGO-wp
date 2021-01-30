<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
	<?php wp_head(); ?>
</head> 
<body <?php body_class(); ?>>
  <?php $logo = get_field('logo'); ?>
  <header class="header">
    <a href="<?php echo get_option("siteurl"); ?>"><img src="<?php header_image(); ?>" alt="logo" /></a>
  </header>
    <main>
