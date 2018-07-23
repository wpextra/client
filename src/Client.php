<?php
namespace Brigde\Client;

if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
use GuzzleHttp\Client as GuzzleClient;

class Client {

	protected $client;
	public function __construct() {
		$this->client = new GuzzleClient(); 
	}

	public function response($e)
	{
		if ($e->getStatusCode() == '400')
		{

		}
		elseif ($e->getStatusCode() == '422')
		{
			$response = json_decode($e->getBody(true)->getContents(), TRUE);
			return $response;
		}
		elseif ($e->getStatusCode() == '500')
		{
			$response = json_decode($e->getBody(true)->getContents(), TRUE);
			return $response;
		}
		elseif ($e->getStatusCode() == '401')
		{
			$response = json_decode($e->getBody(true)->getContents(), TRUE);
			return $response;
		}
		elseif ($e->getStatusCode() == '403')
		{
			$response = json_decode($e->getBody(true)->getContents(), TRUE);
			return $response;
		}
		else
		{
			$response = json_decode($e->getBody(true)->getContents(), TRUE);
			return $response;
		}
	}

	public static function buildQuery($endpoint, $args = []) {
		$query = wpe_build_querystring($args);
		return $endpoint.'?'.$query;
	}

	public function get($url, $args = []) {
		$res = $this->client->request('GET', $url, $args);
		return $this->response($res);
	}


	public function platforms($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/platforms', $args));
		return $this->response($res);
	}
	public function themes($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/themes', $args));
		return $this->response($res);
	}
	public function theme_dashboards($args = []) {

	}
	public function theme_admins($args = []) {

	}
	public function theme_logins($args = []) {

	}
	public function blocks($args = []) {

	}
	public function plugins($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/plugins', $args));
		return $this->response($res);
	}
	public function partners($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/partners', $args));
		return $this->response($res);
	}
	public function integrations($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/integrations', $args));
		return $this->response($res);
	}
	public function news($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/news', $args));
		return $this->response($res);
	}
	public function resources($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/resources', $args));
		return $this->response($res);
	}
	public function showcases($args = []) {
		$res = $this->client->request('GET', self::buildQuery(WPE_API_URL.'/showcases', $args));
		return $this->response($res);
	}
}
