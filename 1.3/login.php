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
require_once 'maincore.php';
require_once BASEDIR.'subheader.php';
if (isset($readmore) && !isNum($readmore)) fallback(FUSION_SELF);
?>
<link href="<?php echo TEMPLATES_CSS.'signin.css'; ?>" rel="stylesheet" type="text/css">

<form class="form-signin" role="form" action="login.php" method="POST">
	<h2 class="form-signin-heading">ورود کاربران</h2>
	<input name="user_name" type="text" class="form-control" placeholder="آدرس پست الکترونیکی" required autofocus>
	<input name="user_pass" type="password" class="form-control" placeholder="رمز عبور" required>
	<div class="checkbox">
		<label>
			<input name="remember_me" type="checkbox" value="y"> مرا به خاطر بسپار
		</label>
	</div>
	<button name="login" class="btn btn-lg btn-primary btn-block" type="submit">ورود به سیستم</button>
</form>
<?php
require_once BASEDIR.'subheader.php';
?>