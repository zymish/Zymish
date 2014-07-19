<?php
flush();
require_once('config.php');
require_once('functions.php');
$site = array('debug' => true);
$site['css'] = array(
	'bootstrap.min.css',
	'zymish.css'
);
$site['js'] = array(
	'bootstrap.min.js',
	'jquery.min.js'
);