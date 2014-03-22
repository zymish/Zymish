<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Zymish Dot Com<?=isset($page_title)&&!empty($page_title)?' - '.$page_title:''?></title>
		<meta charset='UTF-8'>
      <meta name='description' content='ZyTest'>
		<meta name='author' content='Zymish Dot Com'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='icon' type='image/png' href='<?= SITE_ROOT ?>img/favicon.png'>
		<link rel='stylesheet' type='text/css' media='screen' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css'>
		<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
			<?if(is_array($site['css'])) foreach($site['css'] as $file){ ?>
				<link rel='stylesheet' href='<?php echo SITE_ROOT.'/css/'.$file;?>'>
			<?}?>
		<script src='js/modernizr-2.6.2-respond-1.1.0.min.js'></script>
		<script src='js/jquery.min.js'></script>
	</head>
   <body>
		<div id='wrapper'>
			<div id='top'>
				<div class='navbar navbar-default'>
					<a class='navbar-brand' href='<?=SITE_ROOT?>'><i class='icon-home'></i><span class='hidden-phone'> Zymish Dot Com</span></a>
					<?if(isset($projects)&&is_array($projects)&&count($projects)>0){?>
						<ul class='nav navbar-nav'>
							<li class='dropdown<?=$site['page'][1]=='projects'?' active':''?>'>
								<a class='dropdown-toggle' data-toggle='dropdown'>Projects <i class='icon-caret-down'></i></a>
								<ul class='dropdown-menu' role='menu'>
									<?foreach($projects as $project){?>
										<li>
											<a href='<?=SITE_ROOT.'projects/'.$project['slug']?>'><?=$project['name']?></a>
										</li>
									<?}?>
								</ul>
							</li>
						</ul>
						<script type='text/javascript'>
							$(document).ready(function(){
								$('.dropdown-toggle').dropdown();
							});
						</script>
					<?}?>
				</div>
			</div>
			<div id='content' class='col-xs-10'>
				<div id='content-header'>
					<h3><?=isset($ch) && !empty($ch)?$ch:'Zymish Dot Com';?></h3>
				</div>
				<?if(isset($errors)&&is_array($errors)) foreach($errors as $error){?>
					<div class="alert alert-<?= $error['type'] ?>" style="width:400px; margin:12px auto;">
						<?=isset($error['icon'])?"<i class='".$error['icon']."'></i>&nbsp;":''?>
						<?=isset($error['msg'])?$error['msg']:''?>
					</div>
				<?}?>
				<div class="container-fluid">