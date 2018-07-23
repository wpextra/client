<?php

namespace Bridge\Client;

if ( !defined( 'ABSPATH' ) ) exit;

final class Loader {

	protected $includes = [
		'Client'
	];
	protected function constants() {
		define( 'BRIDGE_CLIENT_VERSION', '1.0.0.0' );
	}

	public function init() {
		$this->constants();
		foreach ( $this->includes as $include ) {
			$this->require_file( dirname( __FILE__ ) . "/$include.php" );
		}
	} 

	protected function filename($path) {
		return basename($path);  
	}
	protected function require_file( $file ) {
		if ( file_exists( $file ) ) {
			require_once $file;
			return true;
		}
		return false;
	}
}


