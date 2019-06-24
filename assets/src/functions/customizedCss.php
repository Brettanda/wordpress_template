<!-- Custom Theme Colors-->
<?php function mytheme_customize_css() { ?>
<style type="text/css">
	p{
		<?php print "color: " . get_theme_mod('text_color','#000'); ?>
	}
</style>
<?php } add_action( 'wp_head', 'mytheme_customize_css');