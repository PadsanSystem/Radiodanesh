<?php
/*
|--------------------------------|
|		Padsan System CMS		 |
|--------------------------------|
|		General Version			 |
|--------------------------------|
|Web   : www.PadsanCMS.com		 |
|Email : Support@PadsanCMS.com	 |
|Tel   : +98 - 261 2533135		 |
|Fax   : +98 - 261 2533136		 |
|--------------------------------|
*/
if (!defined("IN_FUSION")) { header("Location: index.php"); exit; }
if ($settings['maintenance'] == "1" && !iADMIN) fallback(BASEDIR."maintenance.php");
if (iMEMBER) $result = dbquery("UPDATE ".$db_prefix."users SET user_lastvisit='".time()."', user_ip='".USER_IP."' WHERE user_id='".$userdata['user_id']."'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='description' content='<?php echo $settings['description']; ?>'>
	<meta name='keywords' content='<?php echo $settings['keywords']; ?>'>
	<meta name="author" content="شرکت پادسان سیستم">
	<title><?php echo $settings['sitename']; ?></title>
	<meta http-equiv='Content-Type' content='text/html; charset=<?php echo $locale['charset']; ?>'>
	<link rel="shortcut icon" href="<?php echo IMAGES.'favicon.png'; ?>">
	<!-- Bootstrap CSS -->
	<link href="<?php echo TEMPLATES_CSS.'bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'styles.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'sticky-footer-navbar.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'jasny-bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'carousel.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'offcanvas.css'; ?>" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php
	require_once THEME.'theme.php';
	?>
</head>

<!-- NAVBAR -->
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<?php echo showsublinks(); ?>
							<li class="active"><a href="http://seda.ir/Persian/" target="_blank"><img src="<?php echo IMAGES.'irib_text.png'; ?>" border="0">&nbsp;<img src="<?php echo IMAGES.'irib.png'; ?>" width="20px"></a></li>
							<li><a href='<?php echo ADMIN.'index.php'.$aidlink; ?>' class='side'/>کنترل پنل مدیریت</a></li>
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
	</div>
	<?php
	if(strpos($_SERVER['PHP_SELF'], '/index.php') AND !strpos($_SERVER['PHP_SELF'], '/modules')){
	?>
	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img data-src="holder.js/950x800">
			</div>
			<div class="item">
				<img data-src="holder.js/950x800">
			</div>
			<div class="item">
				<img data-src="holder.js/950x800">
			</div>
		</div>
	</div>
	<?php
	}else{
		echo '<br>';
	}
	?>
	<!-- Wrap the rest of the page in another container to center all the content. -->
	<div class="container">