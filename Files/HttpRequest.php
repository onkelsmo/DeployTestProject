<?php
/**
 * DeployTestProject
 * 
 * Files\HttpRequest
 */
namespace Files;

class HttpRequest {
	/**
	 * @var array
	 */
	private $server;

	/**
	 * @param array $server
	 */
	public function __construct(array $server) {
		$this->server = $server;
	}
	
	/**
	 * @return array
	 */
	public function getServer() {
		return $this->server;
	}
}
