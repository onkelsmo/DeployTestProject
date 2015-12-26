<?php
/**
 * DeployTestProject
 */
include_once './bootstrap.php';

use Files\HttpRequest;

$request = new HttpRequest($_SERVER);

var_dump($request);

echo "xx";