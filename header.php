<!-- https://developer.wordpress.org/reference/functions/bloginfo/ -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="theme-color" content="<?php print get_theme_mod("theme_color");?>">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//instant.page/1.2.2" type="module" integrity="sha384-2xV8M5griQmzyiY3CDqh1dn4z3llDVqZDqzjzcY+jCBCk/a5fXJmuZ/40JJAPeoU"></script>
<!-- Custom Theme Colors-->
<?php function mytheme_customize_css(){?>
<!-- <style type="text/css">
	p{
		<?php //print "color: " . get_theme_mod('text_color','#000');?>
	}
</style> -->
<?php } add_action( 'wp_head', 'mytheme_customize_css');
 wp_head(); ?>
</head>

<body <?php body_class();?>>
	<header class="site-header">
		
	</header>
	<div class="inner">
		<main>
