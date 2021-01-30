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
    <div class="header__wrapper">
      <a href="<?php echo get_option("siteurl"); ?>">
      <img src="<?php header_image(); ?>" alt="logo" />
    </a>
    </div>
  </header>
  <div class="preloader">
      <div class="preloader__cover"></div>
      <div class="preloader__outer-circle">
        <div class="preloader__gap"></div>
        <div class="preloader__inner-circle"></div>
      </div>
    </div>
    <main>
