<?php
/**
 * Theme CSS & JS
 */
function theme_scripts() {
	// Main CSS
	wp_enqueue_style('main-stylesheet', asset_path( 'styles/main.css' ), false, '1.0.0');

	// Deregister the jquery version bundled with WordPress
	wp_deregister_script('jquery');

	// CDN hosted jQuery
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', [], '2.2.4', false);

	wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/8da4a4becf.js', '1.0.0', false );
	// Main JS
	wp_enqueue_script('main-javascript', asset_path('scripts/main.js'), [ 'jquery' ], '1.0.0', true);

	//bootstrap js
	wp_enqueue_script('bootstrap-js', asset_path('scripts/bootstrap.js'), [ 'bootstrap' ], '1.0.0', false);

	wp_enqueue_script('bootstrap-bundle-js', asset_path('scripts/bootstrap.bundle.js'), [ 'bootstrap-bundle' ], '1.0.0', false);

	// Throw variables to front-end
	$theme_vars = array(
		'home'   => get_home_url(),
		'ajaxurl' => admin_url('admin-ajax.php'),
		'is_auth' => is_user_logged_in(),
	);
	wp_localize_script('main-javascript', 'themeVars', $theme_vars);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
