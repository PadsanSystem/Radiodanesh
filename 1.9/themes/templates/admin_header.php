<?php
if (!defined("IN_FUSION")) { die("Access Denied"); }

define("ADMIN_PANEL", true);

require_once INCLUDES."output_handling_include.php";
require_once INCLUDES."header_includes.php";
require_once THEME."theme.php";

if ($settings['maintenance'] == "1" && !iADMIN) { redirect(BASEDIR."maintenance.php"); }
if (iMEMBER) { $result = dbquery("UPDATE ".DB_USERS." SET user_lastvisit='".time()."', user_ip='".USER_IP."', user_ip_type='".USER_IP_TYPE."' WHERE user_id='".$userdata['user_id']."'"); }

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head><title>".$settings['sitename']."</title>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=".$locale['charset']."' />";
echo "<meta name='description' content='".$settings['description']."' />\n";
echo "<meta name='keywords' content='".$settings['keywords']."' />\n";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>";
echo "<meta name='product' content='PadsanCMS'>";
echo "<meta name='author' content='PadsanSystem Corportaion'>";
echo "<link rel='stylesheet' href='".THEME."metro-bootstrap.css'>";
echo "<link rel='stylesheet' href='".THEME."iconFont.css'>";
echo "<link rel='stylesheet' href='".JSCRIPTS."prettify/prettify.css'>";
echo "<link rel='stylesheet' href='".THEME."styles_admin.css' type='text/css' media='screen'>";
// if (file_exists(IMAGES."favicon.ico")) { echo "<link rel='shortcut icon' href='".IMAGES."favicon.ico' type='image/x-icon' />\n"; }
if (function_exists("get_head_tags")) { echo get_head_tags(); }
echo "<script type='text/javascript' src='".JQUERY."jquery.js'></script>\n";
echo "<script type='text/javascript' src='".INCLUDES."jscript.js'></script>\n";
echo "<script type='text/javascript' src='".JQUERY."jquery.mousewheel.js'></script>\n";
echo "<script type='text/javascript' src='".JQUERY."jquery.easing.1.3.min.js'></script>\n";
echo "<script type='text/javascript' src='".JQUERY."jquery.dataTables.js'></script>\n";
echo "<script type='text/javascript' src='".JSCRIPTS."metro.min.js'></script>\n";
echo "<script type='text/javascript' src='".JSCRIPTS."custom_modals.js'></script>\n";
echo "<script type='text/javascript' src='".JQUERY."admin-msg.js'></script>\n";
echo "</head>\n<body class='metro'>\n";

require_once THEMES."templates/panels.php";

ob_start();
?>
