<?php
// Add custom Theme Functions here
remove_action('welcome_panel', 'wp_welcome_panel');


// TẮT UNCATEGORY CỦA SẢN PHẨM

	//* Used when the widget is displayed as a dropdown
add_filter( 'woocommerce_product_categories_widget_dropdown_args', 'rv_exclude_wc_widget_categories' );

	//* Used when the widget is displayed as a list
add_filter( 'woocommerce_product_categories_widget_args', 'rv_exclude_wc_widget_categories' );
function rv_exclude_wc_widget_categories( $cat_args ) {
	$cat_args['exclude'] = array('16'); // Insert the product category IDs you wish to exclude
	return $cat_args;
}
function login_css() {
wp_enqueue_style( 'login_css', get_template_directory_uri() . '/login.css' ); // duong dan den file css moi
}
add_action('login_head', 'login_css');