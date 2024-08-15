<?php
/*
Plugin Name: Animate CSS + Wow Libraries
Plugin URI:  https://animate.style
Description: A simple plugin to add the Animate.css and Wow.js libraries for scrolling and transition animations.
Version:     0.1.2
Author:      Ben Vankat, Hanscom Park Studio
Author URI:  https://hanscompark.com
License:     MIT
License URI: https://raw.githubusercontent.com/graingert/WOW/master/LICENSE
*/
 
// Add Animate.css 4.1.1
function add_external_css() {
	wp_enqueue_style( 'animate-css-library', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'add_external_css' );

// Add Wow.js
function add_external_js() {
	wp_enqueue_script( 'wow-js-script', plugin_dir_url( __FILE__ ) . 'js/wow.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'add_external_js' );

// Enable Wow.js by calling it in the page footer
function make_wow() {
	?>
	<script>
	  new WOW().init();
	</script>
	<?php
}
add_action( 'wp_footer', 'make_wow', 100 );


