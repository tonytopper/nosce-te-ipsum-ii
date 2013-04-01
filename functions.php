<?

add_action( 'customize_register', 'nti_customize_register' );
function nti_customize_register( $wp_customize ) 
{
	//Change some of the default settings of the parent theme.
	//echo "<pre>"; var_dump(get_class_methods(get_class($wp_customize))); echo "</pre>";
}

function nti_scripts_method()
{
	// Load Webfonts
	wp_deregister_script('webfont');
	wp_register_script('webfont', "https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js", array(), '1');
	wp_enqueue_script('webfont');

	wp_deregister_script('lettering');
	wp_register_script('lettering', get_stylesheet_directory_uri() . "/js/jquery.lettering.js", array('jquery'), '0.6.1');
	wp_enqueue_script('lettering');
	
	wp_deregister_script('masonry');
	wp_register_script('masonry', get_stylesheet_directory_uri() . "/js/jquery.masonry.min.js", array('jquery'), '0.6.1');
	wp_enqueue_script('masonry');
	
	wp_register_script('nti', get_stylesheet_directory_uri() . "/js/nti.js", array('lettering'), '0.0.1');
	wp_enqueue_script('nti');
}
add_action( 'wp_enqueue_scripts', 'nti_scripts_method' );

?>