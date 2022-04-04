<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Clip-One - Responsive Admin Template</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="<?=base_url("assets/admin/plugins/bootstrap/css/bootstrap.min.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/plugins/font-awesome/css/font-awesome.min.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/fonts/style.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/css/main.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/css/main-responsive.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/plugins/iCheck/skins/all.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/plugins/perfect-scrollbar/src/perfect-scrollbar.css")?>">
		<link rel="stylesheet" href="<?=base_url("assets/admin/css/theme_light.css")?>" type="text/css" id="skin_color">
		<link rel="stylesheet" href="<?=base_url("assets/admin/css/print.css")?>" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/admin/plugins/font-awesome/css/font-awesome-ie7.min.css"">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example2">
		<div class="main-login col-sm-4 col-sm-offset-4">
			<div class="logo"><a href="<?=base_url()?>">OlahWeb</a>
			</div>
			<!-- start: LOGIN BOX -->
			<div class="box-login">
				<h3>Sign in to your account</h3>
				<p>
					Please enter your name and password to log in.
				</p>
				<!-- <form class="form-login" action=""> -->
					<div class="errorHandler alert alert-danger no-display">
						<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
					</div>
					<fieldset>
						<div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Username">
								<i class="fa fa-user"></i> </span>
						</div>
						<div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Password">
								<i class="fa fa-lock"></i>
								<a class="forgot" href="#">
									I forgot my password
								</a> </span>
						</div>
						<div class="form-actions">
							<label for="remember" class="checkbox-inline">
								<input type="checkbox" class="grey remember" id="remember" name="remember">
								Keep me signed in
							</label>
							<button type="submit" id="btn_submit" class="btn btn-bricky pull-right">
								Login <i class="fa fa-arrow-circle-right"></i>
							</button>
						</div>
						<div class="new-account">
							Don't have an account yet?
							<a href="#" class="register">
								Create an account
							</a>
						</div>
					</fieldset>
				<!-- </form> -->
			</div>
			<!-- end: LOGIN BOX -->
			<?php $this->load->view('forgot');?>
			<?php $this->load->view('daftar');?>
			<!-- start: COPYRIGHT -->
			<div class="copyright">
				2014 &copy; clip-one by cliptheme.
			</div>
			<!-- end: COPYRIGHT -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/admin/plugins/respond.min.js"></script>
		<script src="assets/admin/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="<?=base_url("assets/admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/bootstrap/js/bootstrap.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/blockUI/jquery.blockUI.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/iCheck/jquery.icheck.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/perfect-scrollbar/src/jquery.mousewheel.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/perfect-scrollbar/src/perfect-scrollbar.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/less/less-1.5.0.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/jquery-cookie/jquery.cookie.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js")?>"></script>
		<script src="<?=base_url("assets/admin/js/main.js")?>"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?=base_url("assets/admin/plugins/jquery-validation/dist/jquery.validate.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/js/login.js")?>"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		<script type="text/javascript">
			$('#btn_submit').on('click', function(){
			user = $('input[name="username"]').val();
			passwd = $('input[name="password"]').val();

			$.ajax({
				type:'POST',
				url:'<?=base_url()?>login/auth',
				dataType:'json',
				data:{
				username: user,
				password: passwd,

				},
				success:function (data){
				if(data.status == 'true'){
					$('#notif').text(data.text);
					$('#notif').css('color', 'green');
					window.location.href = data.url;
				}else{
					$('#notif').text(data.type+': '+data.text);
					$('#notif').css('color', 'red');
					$('input[name="'+data.target+'"]').focus();
				}
					},
						beforeSend:function(){
							$('#notif').html('<i class="fa fa-spinner" id="spinner"></i> &nbsp; Loading..');
							$('#notif').css('color', 'black');
						}
				});
			});
			</script>
	</body>
	<!-- end: BODY -->
</html>