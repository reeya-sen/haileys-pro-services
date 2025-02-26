<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets-genesis/css/globals.css?ver=<?php echo filemtime( get_stylesheet_directory() . '/assets/css/globals.css' ); ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets-genesis/css/style.css?ver=<?php echo filemtime( get_stylesheet_directory() . '/assets/css/style.css' ); ?>" />
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    