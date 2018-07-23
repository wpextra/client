<?php

if ( defined( 'ABSPATH' ) && ! defined( 'BRIDGE_CLIENT_VERSION' ) ) {
	require_once dirname( __FILE__ ) . '/Loader.php';
	$loader = new \Bridge\Client\Loader();
	$loader->init();
}
