<!DOCTYPE html>
<html lang="en">

<head>
	<title>DailyGoods</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/asset/css/main.css">
	<link rel="shortcut icon" href="<?= base_url(); ?>/img/fghfgh.ico" type="image/x-icon">
</head>
<style>
	.container-hero img {
		height: 64px;
		padding-left: 15px;
		margin-bottom: 20px;
	}
</style>

<body>
	<?php
	$username = [
		'name' => 'username',
		'id' => 'username',
		'value' => null,
		'class' => 'form-control'
	];

	$password = [
		'name' => 'password',
		'id' => 'password',
		'class' => 'form-control'
	];
	$fullname = [
		'name' => 'fullname',
		'id' => 'fullname',
		'class' => 'form-control'
	];
	$email = [
		'name' => 'email',
		'id' => 'email',
		'class' => 'form-control'
	];

	$repeatPassword = [
		'name' => 'repeatPassword',
		'id' => 'repeatPassword',
		'class' => 'form-control'
	];

	$session = session();
	$errors = $session->getFlashdata('errors');
	?>

	<?php if ($errors != null) : ?>
		<div class="alert alert-danger" role="alert">
			<h4 class="alert-heading">Terjadi Kesalahan</h4>
			<hr>
			<p class="mb-0">
				<?php
				foreach ($errors as $err) {
					echo $err . '<br>';
				}
				?>
			</p>
		</div>
	<?php endif ?>
	<?= form_open('Auth/register') ?>
	<div class="container-login100" style="background-image: url('<?= base_url(); ?>/asset/images/asdasd.jpg');">
		<div class="container-hero mx-auto">
			<img src="<?= base_url(); ?>/asset/images/logo.png" alt="">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-37">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Enter fullname">
						<input class="input100" type="text" name="fullname" id="fullname" placeholder="Full Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
						<input class="input100" type="text" name="username" id="username" placeholder="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
						<input class="input100" type="email" name="email" id="email" placeholder="email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" placeholder="password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
						<input class="input100" type="password" name="repeatPassword" id="repeatPassword" placeholder="Repeat Password">

						<span class="focus-input100"></span>
					</div>

					<br><br><br>
					<div class="container-login100-form-btn">

						<button type="submit" name="submit" value="Submit" class="login100-form-btn">
							Sign Up
						</button>
					</div>
					<?= form_close() ?>
					<br>

					<div class="text-center">
						<a href="<?= site_url('auth/login') ?>" class="txt2 hov1">
							Already have an Account? Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	<script src="<?= base_url(); ?>/asset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url(); ?>/asset/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= base_url(); ?>/asset/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url(); ?>/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>/asset/vendor/select2/select2.min.js"></script>
	<script src="<?= base_url(); ?>/asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url(); ?>/asset/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url(); ?>/asset/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?= base_url(); ?>/asset/js/main.js"></script>

</body>

</html>