<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class WC_Gateway_PPEC_With_PayPal extends WC_Gateway_PPEC {
	public function __construct() {
		$this->id = 'ppec_paypal';
		parent::__construct();
	}
}