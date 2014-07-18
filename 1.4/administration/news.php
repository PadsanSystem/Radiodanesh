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
require_once "../maincore.php";
require_once BASEDIR."subheader.php";
require_once ADMIN."navigation.php";
echo "<div style='position:absolute'>";
include LOCALE.LOCALESET."admin/news-articles.php";
echo "</div>";
if (!checkrights("N") || !defined("iAUTH") || $aid != iAUTH) fallback("../index.php");
if (isset($news_id) && !isNum($news_id)) fallback(FUSION_SELF);

if (isset($status)) {
	if ($status == "su") {
		$title = $locale['400'];
		$message = "<b>".$locale['401']."</b>";
	} elseif ($status == "sn") {
		$title = $locale['404'];
		$message = "<b>".$locale['405']."</b>";
	} elseif ($status == "del") {
		$title = $locale['406'];
		$message = "<b>".$locale['407']."</b>";
	}
	opentable($title);
	echo "<div align='center'>".$message."</div>\n";
	closetable();
	tablebreak();
}

if (isset($_POST['save'])) {
	$news_subject = stripinput($_POST['news_subject']);
	$news_cat = isNum($_POST['news_cat']) ? $_POST['news_cat'] : "0";
	$body = addslash($_POST['body']);
	if ($_POST['body2']) $body2 = addslash(preg_replace("(^<p>\s</p>$)", "", $_POST['body2']));
	$news_start_date = 0; $news_end_date = 0;
	if ($_POST['news_start']['mday']!="--" && $_POST['news_start']['mon']!="--" && $_POST['news_start']['year']!="----") {
		$news_start_date = mktime($_POST['news_start']['hours'],$_POST['news_start']['minutes'],0,$_POST['news_start']['mon'],$_POST['news_start']['mday'],$_POST['news_start']['year']);
	}
	if ($_POST['news_end']['mday']!="--" && $_POST['news_end']['mon']!="--" && $_POST['news_end']['year']!="----") {
		$news_end_date = mktime($_POST['news_end']['hours'],$_POST['news_end']['minutes'],0,$_POST['news_end']['mon'],$_POST['news_end']['mday'],$_POST['news_end']['year']);
	}
	$news_visibility = isNum($_POST['news_visibility']) ? $_POST['news_visibility'] : "0";
	$news_sticky = isset($_POST['news_sticky']) ? "1" : "0";
	$news_comments = isset($_POST['news_comments']) ? "1" : "0";
	$news_ratings = isset($_POST['news_ratings']) ? "1" : "0";
	if (isset($news_id)) {
		if ($news_sticky == "1") $result = dbquery("UPDATE ".$db_prefix."news SET news_sticky='0' WHERE news_sticky='1'");
		$result = dbquery("UPDATE ".$db_prefix."news SET news_subject='$news_subject', news_cat='$news_cat', news_news='$body', news_extended='$body2',".($news_start_date != 0 ? " news_datestamp='$news_start_date'," : "")." news_start='$news_start_date', news_end='$news_end_date', news_visibility='$news_visibility', news_sticky='$news_sticky', news_allow_comments='$news_comments', news_allow_ratings='$news_ratings' WHERE news_id='$news_id'");
		redirect(FUSION_SELF.$aidlink."&status=su");
	} else {
		if ($news_sticky == "1") $result = dbquery("UPDATE ".$db_prefix."news SET news_sticky='0' WHERE news_sticky='1'");
		$result = dbquery("INSERT INTO ".$db_prefix."news (news_subject, news_cat, news_news, news_extended, news_name, news_datestamp, news_start, news_end, news_visibility, news_sticky, news_reads, news_allow_comments, news_allow_ratings) VALUES ('$news_subject', '$news_cat', '$body', '$body2', '".$userdata['user_id']."', '".($news_start_date != 0 ? $news_start_date : time())."', '$news_start_date', '$news_end_date', '$news_visibility', '$news_sticky', '0', '$news_comments', '$news_ratings')");
		redirect(FUSION_SELF.$aidlink."&status=sn");
	}
} else if (isset($_POST['delete'])) {
	$result = dbquery("DELETE FROM ".$db_prefix."news WHERE news_id='$news_id'");
	$result = dbquery("DELETE FROM ".$db_prefix."comments WHERE comment_item_id='$news_id' and comment_type='N'");
	$result = dbquery("DELETE FROM ".$db_prefix."ratings WHERE rating_item_id='$news_id' and rating_type='N'");
	redirect(FUSION_SELF.$aidlink."&status=del");
} else {
	if (isset($_POST['preview'])) {
		$news_subject = stripinput($_POST['news_subject']);
		$body = phpentities(stripslash($_POST['body']));
		$bodypreview = str_replace("src='".str_replace("../", "", IMAGES_N), "src='".IMAGES_N, stripslash($_POST['body']));
		if ($_POST['body2']) {
			$body2 = phpentities(stripslash($_POST['body2']));
			$body2preview = str_replace("src='".str_replace("../", "", IMAGES_N), "src='".IMAGES_N, stripslash($_POST['body2']));
		}
		$news_start = array(
			"mday" => isNum($_POST['news_start']['mday']) ? $_POST['news_start']['mday'] : "--",
			"mon" => isNum($_POST['news_start']['mon']) ? $_POST['news_start']['mon'] : "--",
			"year" => isNum($_POST['news_start']['year']) ? $_POST['news_start']['year'] : "----",
			"hours" => isNum($_POST['news_start']['hours']) ? $_POST['news_start']['hours'] : "0",
			"minutes" => isNum($_POST['news_start']['minutes']) ? $_POST['news_start']['minutes'] : "0",
		);
		$news_end = array(
			"mday" => isNum($_POST['news_end']['mday']) ? $_POST['news_end']['mday'] : "--",
			"mon" => isNum($_POST['news_end']['mon']) ? $_POST['news_end']['mon'] : "--",
			"year" => isNum($_POST['news_end']['year']) ? $_POST['news_end']['year'] : "----",
			"hours" => isNum($_POST['news_end']['hours']) ? $_POST['news_end']['hours'] : "0",
			"minutes" => isNum($_POST['news_end']['minutes']) ? $_POST['news_end']['minutes'] : "0",
		);
		$news_sticky = isset($_POST['news_sticky']) ? " checked" : "";
		$news_comments = isset($_POST['news_comments']) ? " checked" : "";
		$news_ratings = isset($_POST['news_ratings']) ? " checked" : "";
		opentable($news_subject);
		echo "$bodypreview\n";
		closetable();
		if (isset($body2preview)) {
			tablebreak();
			opentable($news_subject);
			echo "$body2preview\n";
			closetable();
		}
		tablebreak();
	}
	$editlist = ""; $sel = "";
	$result = dbquery("SELECT * FROM ".$db_prefix."news ORDER BY news_datestamp DESC");
	if (dbrows($result) != 0) {
		while ($data = dbarray($result)) {
			if (isset($news_id)) $sel = ($news_id == $data['news_id'] ? " selected" : "");
			$editlist .= "<option value='".$data['news_id']."'$sel>".$data['news_subject']."</option>\n";
		}
	}
	opentable($locale['408']);
	echo "<form name='selectform' method='post' action='".FUSION_SELF.$aidlink."'>
<center>
<select name='news_id' class='textbox' style='width:250px'>
$editlist</select>
<input type='submit' name='edit' value='".$locale['409']."' class='button'>
<input type='submit' name='delete' value='".$locale['410']."' onclick='return DeleteNews();' class='button'>
</center>
</form>\n";
	closetable();
	tablebreak();
	if (isset($_POST['edit'])) {
		$result = dbquery("SELECT * FROM ".$db_prefix."news WHERE news_id='$news_id'");
		if (dbrows($result) != 0) {
			$data = dbarray($result);
			$news_subject = $data['news_subject'];
			$news_cat = $data['news_cat'];
			$body = phpentities(stripslashes($data['news_news']));
			$body2 = phpentities(stripslashes($data['news_extended']));
			if ($data['news_start'] > 0) $news_start = getdate($data['news_start']);
			if ($data['news_end'] > 0) $news_end = getdate($data['news_end']);
			$news_comments = $data['news_allow_comments'] == "1" ? " checked" : "";
			$news_ratings = $data['news_allow_ratings'] == "1" ? " checked" : "";
			$news_visibility = $data['news_visibility'];
			$news_sticky = $data['news_sticky'] == "1" ? " checked" : "";
		}
	}
	if (isset($news_id)) {
		$action = FUSION_SELF.$aidlink."&amp;news_id=$news_id";
		opentable($locale['400']);
	} else {
		if (!isset($_POST['preview'])) {
			$news_subject = "";
			$body = "";
			$body2 = "";
			$news_comments = " checked";
			$news_ratings = " checked";
			$news_visibility = 0;
			$news_sticky = "";
		}
		$action = FUSION_SELF.$aidlink;
		opentable($locale['404']);
	}
	$image_files = makefilelist(IMAGES_N, ".|..|index.php", true);
	$image_list = makefileopts($image_files);
	$result = dbquery("SELECT * FROM ".$db_prefix."news_cats ORDER BY news_cat_name");
	$news_cat_opts = ""; $sel = "";
	if (dbrows($result)) {
		while ($data = dbarray($result)) {
			if (isset($news_cat)) $sel = ($news_cat == $data['news_cat_id'] ? " selected" : "");
			$news_cat_opts .= "<option value='".$data['news_cat_id']."'$sel>".$data['news_cat_name']."</option>\n";
		}
	}	
	$visibility_opts = ""; $sel = "";
	$user_groups = getusergroups();
	while(list($key, $user_group) = each($user_groups)){
		$sel = ($news_visibility == $user_group['0'] ? " selected" : "");
		$visibility_opts .= "<option value='".$user_group['0']."'$sel>".$user_group['1']."</option>\n";
	}
	echo "<form name='inputform' method='post' action='$action' onSubmit='return ValidateForm(this);'>
<table align='center' cellpadding='0' cellspacing='0'>
<tr>
<td width='100' class='tbl'>".$locale['511']."</td>
<td valign='middle' width='80%' class='tbl'><select name='news_cat' class='textbox'>
<option value='0'>".$locale['425']."</option>
$news_cat_opts</select>
</td>
</tr>
<tr>
<td width='100' class='tbl'>".$locale['411']."</td>
<td width='80%' class='tbl'><input type='text' name='news_subject' value='$news_subject' class='textbox' style='width: 250px'></td>
</tr>
<tr>
<td valign='middle' width='100' class='tbl'>".$locale['412']."</td>
<td width='100%' class='tbl'><textarea id='body' name='body' class='textbox'>$body</textarea></td>
</tr>\n";
	if ($settings['tinymce_enabled'] == 1){
		echo '<script type="text/javascript" src="'.INCLUDES.'/editor/tiny_mce.js"></script>
		<script type="text/javascript">
		tinyMCE.init({
			plugins:"emotions",
			mode : "exact",
			elements : "body",
			theme_advanced_toolbar_align : "center"
		});
		</script>';}
echo "<tr>\n<td valign='middle' width='100%' class='tbl'>".$locale['413']."</td><td class='tbl'><br><textarea id='body2' name='body2' class='textbox'>$body2</textarea></td></tr>\n";
	if ($settings['tinymce_enabled'] == 1){
		echo '<script type="text/javascript">
		tinyMCE.init({
			plugins:"emotions",
			mode : "exact",
			elements : "body2",
			theme_advanced_toolbar_align : "center"
		});
		</script>';}
	echo "<tr>
<td class='tbl'>".$locale['414']."</td>
<td class='tbl'><select name='news_start[mday]' class='textbox'>\n<option>--</option>\n";
	for ($i=1;$i<=31;$i++) echo "<option".(isset($news_start['mday']) && $news_start['mday'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select>
<select name='news_start[mon]' class='textbox'>\n<option>--</option>\n";
	for ($i=1;$i<=12;$i++) echo "<option".(isset($news_start['mon']) && $news_start['mon'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select>
<select name='news_start[year]' class='textbox'>\n<option>----</option>\n";
	for ($i=1386;$i<=1400;$i++) echo "<option".(isset($news_start['year']) && $news_start['year'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select> /
<select name='news_start[hours]' class='textbox'>\n";
	for ($i=0;$i<=24;$i++) echo "<option".(isset($news_start['hours']) && $news_start['hours'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select> :
<select name='news_start[minutes]' class='textbox'>\n";
	for ($i=0;$i<=60;$i++) echo "<option".(isset($news_start['minutes']) && $news_start['minutes'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select> : 00 <span class='alt'>".$locale['416']."</span></td>
</tr>
<tr>
<td class='tbl'>".$locale['415']."</td>
<td class='tbl'><select name='news_end[mday]' class='textbox'>\n<option>--</option>\n";
	for ($i=1;$i<=31;$i++) echo "<option".(isset($news_end['mday']) && $news_end['mday'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select>
<select name='news_end[mon]' class='textbox'>\n<option>--</option>\n";
	for ($i=1;$i<=12;$i++) echo "<option".(isset($news_end['mon']) && $news_end['mon'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select>
<select name='news_end[year]' class='textbox'>\n<option>----</option>\n";
	for ($i=1386;$i<=1400;$i++) echo "<option".(isset($news_end['year']) && $news_end['year'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select> /
<select name='news_end[hours]' class='textbox'>\n";
	for ($i=0;$i<=24;$i++) echo "<option".(isset($news_end['hours']) && $news_end['hours'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select> :
<select name='news_end[minutes]' class='textbox'>\n";
	for ($i=0;$i<=60;$i++) echo "<option".(isset($news_end['minutes']) && $news_end['minutes'] == $i ? " selected" : "").">$i</option>\n";
	echo "</select> : 00 <span class='alt'>".$locale['416']."</span></td>
</tr>
<tr>
<td class='tbl'>".$locale['422']."</td>
<td class='tbl'><select name='news_visibility' class='textbox'>
$visibility_opts</select></td>
</tr>
<tr>
<td class='tbl'></td><td class='tbl'>
<input type='checkbox' name='news_sticky' value='yes'$news_sticky> ".$locale['426']."<br>\n";
echo "<input type='checkbox' name='news_comments' value='yes' onClick='SetRatings();'$news_comments> ".$locale['423']."<br>
<input type='checkbox' name='news_ratings' value='yes'$news_ratings> ".$locale['424']."</td>
</tr>
<tr>
<td align='center' colspan='2' class='tbl'><br>
<input type='submit' name='preview' value='".$locale['418']."' class='button'>
<input type='submit' name='save' value='".$locale['419']."' class='button'></td>
</tr>
</table>
</form>\n";
	closetable();
	echo "<script type='text/javascript'>
function DeleteNews() {
	return confirm('".$locale['551']."');
}
function ValidateForm(frm) {
	if(frm.news_subject.value=='') {
		alert('".$locale['550']."');
		return false;
	}
}
function SetRatings() {
	if (inputform.news_comments.checked == false) {
		inputform.news_ratings.checked = false;
		inputform.news_ratings.disabled = true;
	} else {
		inputform.news_ratings.disabled = false;
	}
}
</script>\n";
}

echo "</td>\n";
require_once BASEDIR."footer.php";
?>