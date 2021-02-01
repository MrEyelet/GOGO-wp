<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head> 
<body <?php body_class(); ?> data-barba="wrapper">
  
  <?php $logo = get_field('logo'); ?>
  <header class="header">
    <div class="header__wrapper">
      <a href="<?php echo get_option("siteurl"); ?>">
       <img src="<?php header_image(); ?>" alt="logo" />
      </a>
    </div>
  </header>
    <?php get_template_part('template_parts/preloader'); ?>
    <main data-barba="container">
