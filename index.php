<?php
require_once("includes/startup.php");
/* CSS Scripts */
$site['css'] = array();
$site['css'][] = 'bootstrap.min.css';
$site['css'][] = 'bootstrap-responsive.min.css';
/* JS Scripts */
$site['js'] = array();
$site['js'][] = 'excanvas.min.js';
$site['js'][] = 'bootstrap.min.js';
/* Content Display */
$site['page'] = explode('/',substr($_SERVER['REQUEST_URI'],1));
if($site['page'][1]==''){
	$site['page'][1]='index';
}
require_once('header.php');
flush();
include('content/'.$site['page'][1].'.php');
flush();
require_once('footer.php');