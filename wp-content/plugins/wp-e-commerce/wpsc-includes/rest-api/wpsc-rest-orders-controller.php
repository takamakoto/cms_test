<?php
class WPSC_REST_Orders_Controller extends WP_REST_Controller {

	public function __construct() {
		$this->namespace = 'wpsc/v1';
		$this->rest_base = 'orders';
	}

	public function register_routes() {
		
	}
}
