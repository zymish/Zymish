<? $proj=$site['page'][2];
if(!empty($proj))
	include('projects/'.$proj.'.php');
else{
	include('overview.php');
}
?>