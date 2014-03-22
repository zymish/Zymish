<?php
flush();
require_once('config.php');
require_once('functions.php');
$site = array('debug' => true);
$projects=array(
	1=>array(
		'name'=>"The Palace (Working Title)",
		'slug'=>'the-palace'
	)
);
$site['css'] = array(
	'bootstrap.min.css',
	'zymish.css'
);
$site['js'] = array(
	'excanvas.min.js',
	'bootstrap.min.js'
);