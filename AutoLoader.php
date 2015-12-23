<?php
class AutoLoader {
	public function __construct($includePath) {
		set_include_path($includePath);
		spl_autoload_register(array($this, 'loadClass'));
	}
	/**
	 * @param string $className
	 *
	 * @SuppressWarnings(PHPMD.UnusedPrivateMethod)
	 */
	private function loadClass($className) {
		@include(str_replace("\\", "/", $className) . '.php');
	}
}