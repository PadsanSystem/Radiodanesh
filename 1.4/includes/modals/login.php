<?php
/*
|--------------------------------|
|		PadsanSystem CMS		 |
|--------------------------------|
|		 Radio Version			 |
|--------------------------------|
|Web   : www.PadsanCMS.com		 |
|Email : Support@PadsanCMS.com	 |
|Tel   : +98 - 26 325 45 700	 |
|Fax   : +98 - 26 325 45 701	 |
|--------------------------------|
*/
require_once '../../maincore.php';
?>
<!-- Login Modal -->
<form name="login_form" method="post">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">بستن</span></button>
		<h4 class="modal-title text-center text-danger" id="myModalLabel">ورود به سیستم</span></h4>
	</div>
	<div class="modal-body">
		<div class="row" align="right">
			<div class="col-lg-3 pull-right">
				<div class="row">
					<div class="col-lg-12 pull-right">
						<div class="form-group">
							<div class="input-group">
								<img src="<?php echo ttt.TEMPLATES_IMAGES.'login.png'; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 pull-right">
				<div class="row">
					<div class="col-lg-12 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_name" class="form-control text-left" type="text" placeholder="Username" required autofocus>
								<div class="input-group-addon">شناسه کاربری&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 pull-right">
						<div class="form-group">
							<div class="input-group">
								<input name="user_pass" class="form-control text-left" placeholder="Password" type="password">
								<div class="input-group-addon">رمز عبور&nbsp;&nbsp;<span class="glyphicon glyphicon-lock"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 pull-right">
						<div class="form-group">
							<div class="input-group">
								<h4><a href="<?php echo ttt.MODALS.'lost_password.php'; ?>" class="popup" data-toggle="modal" data-target="#lost_password_form">رمز عبور خود را فراموش کرده اید ؟</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button name="login" type="submit" class="btn btn-primary btn-lg btn-block">ورود&nbsp;&nbsp;<span class="glyphicon glyphicon-hand-up"></span></button>
	</div>
</form>
<script>
	$('a.popup').click(function() {
		$('#login_form').modal('hide');
	});
</script>