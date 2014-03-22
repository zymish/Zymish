<?php
if(!isset($page)) return;

function redir($page){
	header('Location:'.SITE_ROOT.$page);
	exit;
};