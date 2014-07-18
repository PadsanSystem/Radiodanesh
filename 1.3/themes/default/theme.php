<?php
/*
|--------------------------------|
|		Padsan System CMS		 |
|--------------------------------|
|		Advertising Version		 |
|--------------------------------|
|Web   : www.padsansystem.com	 |
|Email : cms@padsansystem.com	 |
|Tel   : +98 - 261 2533135		 |
|Fax   : +98 - 261 2533136		 |
|--------------------------------|
*/
if (!defined("IN_FUSION")) { header("Location: ../../index.php"); exit; }
require_once INCLUDES."theme_functions_include.php";
if (file_exists(BASEDIR."favicon.png")){
	echo "<link rel='icon' href='".BASEDIR."favicon.png' type='image/x-icon'>\n";
}
// theme settings
$body_text = "#555555";
$body_bg = "#FEFEFE";
$theme_width = "900px";
$theme_width_l = "200px";
$theme_width_r = "175px";

function render_news($subject, $news, $info) {
$subject = strip_tags($subject);
global $theme_width;
	echo "<table cellSpacing='0' cellPadding='2' width='100%' border='0'><tr>
<td class='tableHeadingBG'><div class='tableHeading'>$subject</div>
</td></tr>
<tr><td class='td-cell1' style='WIDTH: 100%' vAlign='top'>$news</td></tr>
<tr><td class='td-cell2' align='center' style='WIDTH: 100%'>
<table cellSpacing='0' cellPadding='0' border='0'><tr>
<td align='center'>";
	echo openform("N",$info['news_id']).newsposter($info," &middot;").newsopts($info," &middot;").closeform("N",$info['news_id']);
	echo "</td>
</tr>
</table>
</td></tr>
</table>\n";
}

function render_article($subject, $article, $info) {
	
	echo "<table style='WIDTH: 100%;' cellSpacing='0' cellPadding='2' border='0'><tr>
<td class='tableHeadingBG'><div class='tableHeading'>$subject</div></td></tr>
<tr><td class='td-cell1' style='WIDTH: 100%' vAlign='top'>".$article."</td>
</tr>
<tr><td class='td-cell2' align='center' style='WIDTH: 100%'>
<table cellSpacing='0' cellPadding='0' border='0'><tr><td align='center'>";
	echo openform("A",$info['article_id']).articleposter($info," &middot;").articleopts($info," &middot;").closeform("A",$info['article_id']);
	if (iGuest){
		tablebreak();
	}
	if ($info['article_files'] != NULL){
		echo "<br><a href=".$info['article_files']." class='submit'>دریافت فایل مرتبط</a>";
		tablebreak();
	}
	echo "</td>
</tr>
</table>
</td></tr>
</table>\n";
}

function opentable($title){
	echo"<div class='panel panel-default'>
			<div class='panel-heading'>$title</div>
			<div class='panel-body'>";
}

function closetable() {
	echo "</div></div>";
}

function openside($title){
	echo"<div class='panel panel-default'>
			<div class='panel-heading'>$title</div>
			<div class='panel-body'>";
}

function closeside() {
	echo "</div></div>";
}


function opensidex($title){
	echo"<div class='panel panel-default'>
			<div class='panel-heading'>$title</div>
			<div class='panel-body'>";
}

function closesidex() {
	echo "</div></div>";
}

function tablebreak() {

	echo "<table cellpadding='0' cellspacing='0' width='100%'>\n";
	echo "<tr>\n<td height='5'></td>\n</tr>\n</table>\n";
}
?>