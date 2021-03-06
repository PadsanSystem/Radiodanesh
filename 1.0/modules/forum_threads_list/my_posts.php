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
require_once "../../maincore.php";
require_once BASEDIR."subheader.php";
include BASEDIR."side_left.php";
if (!iMEMBER) fallback("../../index.php");

$result = dbquery(
	"SELECT tp.*, tf.* FROM ".$db_prefix."posts tp
	INNER JOIN ".$db_prefix."forums tf USING(forum_id)
	WHERE ".groupaccess('forum_access')." AND post_author='".$userdata['user_id']."' LIMIT 100"
);
$rows = dbrows($result);
if ($rows != 0) {
	if (!isset($rowstart) || !isNum($rowstart)) $rowstart = 0;
	$result = dbquery(
		"SELECT tp.*, tf.* FROM ".$db_prefix."posts tp
		INNER JOIN ".$db_prefix."forums tf USING(forum_id)
		WHERE ".groupaccess('forum_access')." AND post_author='".$userdata['user_id']."'
		ORDER BY post_datestamp DESC LIMIT $rowstart,20"
	);
	$i=0;
	opentable($locale['027']);
	echo "<table cellpadding='0' cellspacing='1' width='100%' class='tbl-border'>\n<tr>\n";
	echo "<td class='tbl2'><span class='small'><b>".$locale['030']."</b></span></td>
<td class='tbl2'><span class='small'><b>".$locale['035']."</b></span></td>
<td align='center' width='1%' class='tbl2' style='white-space:nowrap'><span class='small'><b>".$locale['036']."</b></span></td>
</tr>\n";
	while ($data = dbarray($result)) {
		if ($i % 2 == 0) { $row_color = "tbl1"; } else { $row_color = "tbl2"; }
		echo "<tr>
<td class='$row_color'><span class='small'>".trimlink($data['forum_name'], 80)."</span></td>
<td class='$row_color'><span class='small'><a href='".FORUM."viewthread.php?".$rstart."forum_id=".$data['forum_id']."&thread_id=".$data['thread_id']."&amp;pid=".$data['post_id']."#post_".$data['post_id']."' title='".$data['post_subject']."'>".($data['post_subject'])."</a></span></td>
<td align='center' width='1%' class='$row_color' style='white-space:nowrap'><span class='small'>".showdate("forumdate", $data['post_datestamp'])."</span></td>
</tr>\n";
		$i++;
	}
	echo "</table>\n";
	closetable();
	if ($rows > 20) echo "<div align='center' style='margin-top:5px;'>\n".makePageNav($rowstart,20,$rows,3)."\n</div>\n";
} else {
	opentable($locale['027']);
	echo "<center><br>\n".$locale['038']."<br><br>\n</center>\n";
	closetable();
}
include BASEDIR."side_right.php";
include BASEDIR."footer.php";
?>