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

?>
</div>
<div id="footer">
	<div class="container">
		<footer>
			<a href="#"><p class="pull-right text-danger">بالای سایت</p></a>
			<p class="text-muted copyright"><small><br>&copy; 2014 PadsanSystem Co.</small></p>
			<p class="text-danger">
				<small>
				<a href="<?php echo BASEDIR.'privacy.php'; ?>" title="جدول پخش">جدول پخش</a>
				&nbsp;&nbsp;&nbsp;
				<a href="<?php echo BASEDIR.'sitemap.php'; ?>" title="وبلاگ های برنامه ها">وبلاگ های برنامه ها</a>
				&nbsp;&nbsp;&nbsp;
				<a href="<?php echo BASEDIR.'jobs.php'; ?>" title="نقشه ی سایت">نقشه ی سایت</a>
				&nbsp;&nbsp;&nbsp;
				<a href="<?php echo BASEDIR.'faq.php'; ?>" title="پرسش و پاسخ">پرسش و پاسخ</a>
				&nbsp;&nbsp;&nbsp;
				<a href="<?php echo BASEDIR.'contactus.php'; ?>" title="تماس با ما">تماس با ما</a>
				</small>
			</p>
		</footer>
	</div>
</div>
<script src="<?php echo INCLUDES.'jquery.min.js'; ?>"></script>
<script src="<?php echo INCLUDES.'bootstrap.min.js'; ?>"></script>
<script src="<?php echo INCLUDES.'offcanvas.min.js'; ?>"></script>
<script src="<?php echo INCLUDES.'jasny-bootstrap.min.js'; ?>"></script>
<script src="<?php echo INCLUDES.'docs.min.js'; ?>"></script>
</body>
</html>
<?php

if (iADMIN) {
	$result = dbquery("DELETE FROM ".$db_prefix."flood_control WHERE flood_timestamp < '".(time()-360)."'");
	$result = dbquery("DELETE FROM ".$db_prefix."thread_notify WHERE notify_datestamp < '".(time()-1209600)."'");
	$result = dbquery("DELETE FROM ".$db_prefix."captcha WHERE captcha_datestamp < '".(time()-360)."'");
	$result = dbquery("DELETE FROM ".$db_prefix."new_users WHERE user_datestamp < '".(time()-86400)."'");
}

mysql_close();

ob_end_flush();
?>