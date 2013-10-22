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
		<link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap.no-icons.min.css' rel='stylesheet'>
		<link href='//netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css' rel='stylesheet'>
		<link href='//netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome-ie7.css' rel='stylesheet'>
			<?if(is_array($site['css'])) foreach($site['css'] as $file){ ?>
				<link rel='stylesheet' href='css/<?=$file;?>'>
			<?}?>
		<script src='js/modernizr-2.6.2-respond-1.1.0.min.js'></script>
		<script src='js/jquery.min.js'></script>
	</head>
   <body>
		<div id='header'>
			<h1><a href='http://zymish.com'>Zymish Dot Com</a></h1>		
		</div>            
		<div id='sidebar'>
			<?require_once('sidebar.php');?>
		</div>
        <div id='content'>
        	<div id='content-header'>
						<h1><?=isset($ch) && !empty($ch)?$ch:'Zymish Dot Com';?></h1>
					</div>
					<?if(isset($errors)&&is_array($errors)) foreach($errors as $error){?>
						<div class="alert alert-<?= $error['type'] ?>" style="width:400px; margin:12px auto;">
							<?=isset($error['icon'])?"<i class='".$error['icon']."'></i>&nbsp;":''?>
							<?=isset($error['msg'])?$error['msg']:''?>
						</div>
					<?}?>
					<div class="container-fluid">