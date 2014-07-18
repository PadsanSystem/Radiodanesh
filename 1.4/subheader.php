<?php
/*
|--------------------------------|
|		Padsan System CMS		 |
|--------------------------------|
|		  Radio Version			 |
|--------------------------------|
|Web   : www.PadsanCMS.com		 |
|Email : Support@PadsanCMS.com	 |
|Tel   : +98 - 26 325 45 700	 |
|Fax   : +98 - 26 325 45 701	 |
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
	<meta name="description" content="<?php echo $settings['description']; ?>">
	<meta name="keywords" content="<?php echo $settings['keywords']; ?>">
	<meta name="author" content="شرکت پادسان سیستم">
	<title><?php echo $settings['sitename']; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $locale['charset']; ?>">
	<link rel="shortcut icon" href="<?php echo IMAGES.'favicon.png'; ?>">
	
	<!-- Bootstrap CSS -->
	<link href="<?php echo TEMPLATES_CSS.'bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'styles.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'sticky-footer-navbar.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'jasny-bootstrap.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'carousel.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'bootstrap-image-gallery.min.css'; ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo TEMPLATES_CSS.'blueimp-gallery.min.css'; ?>" rel="stylesheet" type="text/css">
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php require_once THEME.'theme.php'; ?>
	
</head>

<!-- NAVBAR -->
<body>
	<div class="navbar-wrapper">
		<div class="container">
			<div class="navbar navbar-inverse navbar-static-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="<?php echo IMAGES.'irib_text.png'; ?>" border="0">&nbsp;<img src="<?php echo IMAGES.'irib.png'; ?>" width="20px"></a>
					</div>
					<div class="navbar-collapse collapse navbar-right">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">حساب کاربری <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<?php
									if(isset($_COOKIE['general_cms_user'])){
										?>
										<li class="text-right"><a href="<?php echo MODALS.'register.php'; ?>" data-toggle="modal" data-target="#register_form">ویرایش حساب کاربری&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></a></li>
										<li class="text-right"><a href="<?php echo MODALS.'login.php'; ?>" data-toggle="modal" data-target="#login_form">پیغام های خصوصی&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></a></li>
										<li class="divider"></li>
										<li class="text-right"><a href="<?php echo ADMIN.'index.php'.$aidlink; ?>" class="side"/>کنترل پنل مدیریت&nbsp;&nbsp;<span class="glyphicon glyphicon-cog"></span> </a></li>
										<li class="text-right"><a href="<?php echo BASEDIR.'index.php?logout=yes'; ?>" class="side"/>خروج از سیستم&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out"></span></a></li>
										<?php
									}else{
										?>
										<li class="text-right"><a href="<?php echo MODALS.'register.php'; ?>" data-toggle="modal" data-target="#register_form">عضویت در سایت&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span></a></li>
										<li class="text-right"><a href="<?php echo MODALS.'login.php'; ?>" data-toggle="modal" data-target="#login_form">ورود به حساب کاربری&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></a></li>
										<?php
									}
									?>
								</ul>
							</li>
							<?php
							// load Menu Links
							echo showsublinks();
							?>
							<li class="active">
								<a href="<?php echo BASEDIR.'index.php'; ?>">صفحه ی اصلی</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo IMAGES_SLIDESHOW.'bg1.jpg'; ?>" class="img-responsive">
			</div>
			<div class="item">
				<img src="<?php echo IMAGES_SLIDESHOW.'bg2.jpg'; ?>" class="img-responsive">
			</div>
			<div class="item">
				<img src="<?php echo IMAGES_SLIDESHOW.'bg3.jpg'; ?>" class="img-responsive">
			</div>
		</div>
	</div>
	
	<!-- Wrap the rest of the page in another container to center all the content. -->
	<div class="container-fluid">
	
	<!-- Register_Form Modal -->
	<div id="register_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content"></div>
		</div>
	</div>
	
	<!-- Login_Form Modal -->
	<div id="login_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"></div>
		</div>
	</div>
	
	<!-- Lost_Password_Form Modal -->
	<div id="lost_password_form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"></div>
		</div>
	</div>