<!DOCTYPE html>
<html lang='en'>
	<head>
		<title><?='Zymish Dot Com - '.((isset($site['page-title'])&&!empty($site['page-title']))?$site['page-title']:'404')?></title>
		<meta charset='UTF-8'>
      <meta name='description' content='ZyTest'>
		<meta name='author' content='Zymish Dot Com'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='icon' type='image/png' href='<?= SITE_ROOT ?>img/favicon.png'>
		<link rel='stylesheet' type='text/css' media='screen' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css'>
		<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.no-icons.min.css' rel='stylesheet'>
		<link href='//netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css' rel='stylesheet'>
		<link href='//netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome-ie7.css' rel='stylesheet'>
			<? if(is_array($site['css'])) foreach($site['css'] as $file){ ?>
				<link rel='stylesheet' href='css/<?= $file; ?>'>
			<? } ?>
		<script src='js/modernizr-2.6.2-respond-1.1.0.min.js'></script>
		<script src='js/jquery.min.js'></script>
	</head>
   <body>
		<div id='header'>
			<h1><a href='http://zymish.com'>Zymish Dot Com</a></h1>		
		</div>            
		<div id='sidebar'>
        <a href='<?= SITE_ROOT ?>' class='visible-phone'><i class='icon icon-home'></i>Dashboard</a>
			<ul>
				<li class='submenu<?=$site['page'][1]=='overview'?' active':''?>'>
					<a href='<?= SITE_ROOT ?>overview'><i class='icon icon-th-large'></i><span>Overview</span></a>
				</li>
				<li class='submenu<?=$site['page'][1]=='projects'?' active':''?>'>
					<a href='#collapseOne' data-toggle='collapse'>
						<i class='icon-hand-right'></i><span>Projects</span>
					</a>
					<div class='collapse' id='collapseOne'>
						<div class='widget-content'>
							<a class='white' href='<?= SITE_ROOT ?>projects.palace.overview'><i class='icon icon-folder-open'></i> The Palace (working title)</a><br />
							<a class='white' href='<?= SITE_ROOT ?>projects.mind-games.overview'><i class='icon icon-tasks'></i> Mind Games (working title)</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
        <div id='content'>
        	<div id='content-header'>
				<h1><?= (isset($site['pageTitle']) && !empty($site['pageTitle']))?$site['pageTitle']:'Error 404'; ?></h1>
			</div>
<?php if(isset($_SESSION['user'])): ?>            
            <div id='breadcrumb'>
				<?= (isset($_SESSION['agency'],$_SESSION['agency']['name']))?'<a href="#">'.$_SESSION['agency']['name'].'</a>':''; ?>
                <?= (isset($_SESSION['client'],$_SESSION['client']['name']))?'<a href="#">'.$_SESSION['client']['name'].'</a>':''; ?>
                <?= (isset($_SESSION['campaign'],$_SESSION['campaign']['name']))?'<a href="#">'.$_SESSION['campaign']['name'].'</a>':''; ?>
                <?= (isset($_SESSION['event'],$_SESSION['event']['name']))?'<a href="#">'.$_SESSION['event']['name'].'</a>':''; ?>
			</div>
<?php endif; ?>
<?php if(is_array($errors)) foreach($errors as $error): ?>
    <div class="alert alert-<?= $error['type'] ?>" style="width:400px; margin:12px auto;">
<?php if(isset($error['icon'])):?><i class="<?= $error['icon'] ?>"></i>&nbsp;<?php endif; ?>
<?= $error['msg'] ?></div>
<?php endforeach; ?> 
			<div class="container-fluid">