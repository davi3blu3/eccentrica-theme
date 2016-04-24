<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Eccentrica Theme</title>

    <?php wp_head(); ?>
</head>

<?php
	
	if ( is_front_page() ):
		$eccentrica_body_classes = array('eccentrica-home-pg');
	elseif ( is_home() ): 
		$eccentrica_body_classes = array('eccentrica-blog-pg');
	else:
		$eccentrica_body_classes = array('eccentrica-secondary-pg');
	endif;
?>

<body <?php body_class( $eccentrica_body_classes ); ?>>

	<?php wp_nav_menu(array('theme_location'=>'primary')); ?>