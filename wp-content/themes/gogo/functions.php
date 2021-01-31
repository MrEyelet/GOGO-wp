<?php
//styles and scripts
function gogo_file() {
	wp_enqueue_script('poly', 'https://polyfill.io/v3/polyfill.min.js?features=default%2CArray.prototype.find%2CIntersectionObserver', NULL, '1.0', true);
	wp_enqueue_script('main', get_theme_file_uri('js/main-scripts.js'), NULL, '1.0', true);
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet');
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css',false,'1.1','all');
	wp_enqueue_style('styles', get_template_directory_uri() . '/css/style.min.css',false,'1.1','all');
	wp_localize_script('main', 'gogoData', array('root_url' => get_site_url()));
}

add_action('wp_enqueue_scripts', 'gogo_file');
//


//Script modifier
function gogo_scripts_modifier( $tag, $handle, $src ) {
	if ( 'poly' === $handle ) {
		return '<script crossorigin="annonymus" src="' . $src . '" type="text/javascript" ></script>' . "\n";
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'gogo_scripts_modifier', 10, 3 );
//

//CPT
function gogo_post_types() {

	register_post_type('example-cpt', array(
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'rewrite' => array('slug' => 'example-cpt'),
		'public' => true,
		'has_archive' => false,
		'labels' => array(
			'name' => 'Example CPT',
			'add_new_item' => 'Add New Example CPT', 
			'edit_item' => 'Edit Example CPT',
			'all_items' => 'All Example CPT',
			'singular_name' => 'Example CPT'
		),
		'menu_icon' => 'dashicons-media-code',
	));
}

add_action('init', 'gogo_post_types');
//

//mime types
function gogo_my_custom_mime_types( $mimes ) {

	// New allowed mime types.
	$mimes['svg'] = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';
	$mimes['doc'] = 'application/msword';
	// Optional. Remove a mime type.
	unset( $mimes['exe'] );
		
	return $mimes;
}
add_filter( 'upload_mimes', 'gogo_my_custom_mime_types' );
//

//enable feture image
add_theme_support( 'post-thumbnails' );
//

//enable header image
add_theme_support( 'custom-header' );
//

//replace featured image label
function gogo_replace_default_featured_image_meta_box() {
	remove_meta_box( 'postimagediv', 'example-cpt', 'side' );
	add_meta_box('postimagediv', __('Icon image'), 'post_thumbnail_meta_box', 'example-cpt', 'side', 'high');
}
add_action( 'admin_head', 'gogo_replace_default_featured_image_meta_box', 100 );

?>
