<?php
/*
|--------------------------------|
|		Padsan System CMS		 |
|--------------------------------|
|	  	  Radio Version			 |
|--------------------------------|
|Web   : www.PadsanCMS.com		 |
|Email : Support@PadsanCMS.com	 |
|Tel   : +98 - 26 325 45 700	 |
|Fax   : +98 - 26 325 45 701	 |
|--------------------------------|
*/
if (!defined('IN_FUSION')) { die('Access Denied'); }

require_once INCLUDES.'output_handling_include.php';
require_once INCLUDES.'header_includes.php';
require_once THEME.'theme.php';
require_once THEMES.'templates/render_functions.php';

if ($settings['maintenance'] == "1" && ((iMEMBER && $settings['maintenance_level'] == "1" 
	&& $userdata['user_id'] != "1") || ($settings['maintenance_level'] > $userdata['user_level'])
)) { 
	redirect(BASEDIR.'maintenance.php');
 }
if (iMEMBER) { 
	$result = dbquery(
		"UPDATE ".DB_USERS." SET user_lastvisit='".time()."', user_ip='".USER_IP."', user_ip_type='".USER_IP_TYPE."'
		WHERE user_id='".$userdata['user_id']."'"
	); 
}

?>
<!DOCTYPE html>
	<html>
		<head>
			<title><?php echo $settings['sitename']; ?></title>
			<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $locale['charset']; ?>">
			<meta name="description" content="<?php echo $settings['description']; ?>">
			<meta name="keywords" content="<?php echo $settings['keywords']; ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
			<meta name="product" content="PadsanCMS">
			<meta name="author" content="PadsanSystem Corportaion">
			<link rel="stylesheet" href="<?php echo THEME.'metro-bootstrap.css'; ?>">
			<link rel="stylesheet" href="<?php echo THEME.'styles.css'; ?>">
			<link rel="stylesheet" href="<?php echo THEME.'iconFont.css'; ?>">
			<link rel="stylesheet" href="<?php echo JSCRIPTS.'prettify/prettify.css'; ?>">
			<?php
			// if (file_exists(IMAGES."favicon.ico")) { echo "<link rel='shortcut icon' href='".IMAGES."favicon.ico' type='image/x-icon' />\n"; }
			if (function_exists('get_head_tags')) { echo get_head_tags(); }
			?>
			<script type="text/javascript" src="<?php echo INCLUDES.'jscript.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo JQUERY.'jquery.min.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo JQUERY.'jquery.widget.min.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo JQUERY.'jquery.mousewheel.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo JQUERY.'jquery.easing.1.3.min.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo JQUERY.'jquery.dataTables.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo JSCRIPTS.'metro.min.js'; ?>"></script>
			<script type="text/javascript" src="<?php echo JSCRIPTS.'custom_modals.js'; ?>"></script>
			</head>
		<body class="metro">

<?php
require_once THEMES.'templates/panels.php';
ob_start();
?>