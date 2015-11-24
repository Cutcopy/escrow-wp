<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(is_front_page() ) { ?> Site Title<?php } ?> <?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

	<?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
      <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?></a></h1>
        <h5><?php bloginfo('description'); ?></h5>
        <?php
          $args = array('theme_location' => 'primary' );
        ?>
        <nav>
          <?php wp_nav_menu( $args ); ?>
        </nav>
      </header>
