<?php
require_once("includes/startup.php");
/* Content Display */
$site['page'] = explode('/',substr($_SERVER['REQUEST_URI'],1));
if($site['page'][1]==''){
	$site['page'][1]='index';
}
require_once('header.php');
flush();?>
<div class='container-fluid'>
	<?php include('content/'.$site['page'][1].'.php');?>
</div>
<?php flush();
require_once('footer.php');