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

function render_news() {
	?>
	<div class="row-fluid" style="height:950px;background-color:#fff">
		<div class="row-fluid">
			<div class="col-lg-12 col-sm-12 col-xs-12 pull-right">
				<ul class="nav navbar-right nav-tabs nav-justified" role="tablist">
					<?php
					$result=dbquery("SELECT * FROM ".DB_PREFIX."news_cats");
					$j=0;
					
					while($data=dbarray($result)){
						if($j==0)
							$active="active";
						else
							$active="";
						?>
						<li class="<?php echo $active; ?>"><a href="#"><?php echo $data['news_cat_name']; ?></a></li>
						<?php
						$j++;
					}
					?>
				</ul>
			</div>
		</div>
		<br><br><br>
		<div class="row-fluid text-center">
		<?php
		$result=dbquery("SELECT * FROM ".DB_PREFIX."news");
		$i=0;
		while($data=dbarray($result)){
		?>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 pull-right">
			<div>
				<img data-src="holder.js/300x135" alt="...">
				<div class="caption">
				<h4 class="text-danger"><?php echo $data['news_subject']; ?></h4>
				<h5 align="right" style="line-height:1.7"><?php echo $data['news_news']; ?></h5>
				<p><a href="#" class="btn btn-sm btn-info" role="button">ادامه خبر</a></p>
				</div>
			</div>
		</div>
		<?php
		$i++;
		}
		?>
		</div>
	</div>
	<?php
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