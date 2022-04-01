<?php
/*
Plugin Name: ScrollToTop Plugin
Plugin URI: https://scrolltotop.com
Author: Taufik
Author URI: https://taufik.org/
Description: Easy ScrolltoTop Plugin
*/

add_action('wp_footer','redcolor');
function redcolor(){
	?>
		<div class="scroll-to-top">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>
	<?php
}

add_action('wp_enqueue_scripts','theme_styles');
function theme_styles(){
	wp_enqueue_style('font-awesome',PLUGINS_URL('css/font-awesome.min.css',__FILE__));
	wp_enqueue_style('custom-css',PLUGINS_URL('css/custom.css',__FILE__));
	wp_enqueue_script('custom-js',PLUGINS_URL('js/custom.js',__FILE__),array('jquery'),'',false);
}