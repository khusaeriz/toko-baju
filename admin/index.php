<?php
include "../system/bootstrap.php";
?>
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/bootstrap/css/bootstrap.min.css'); ?>">
	<link href="<?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('dist/font-awesome/css/fontawesome-all.css'); ?>" rel="stylesheet" type="text/css">

</head>

<body>
	<div class="login">
		<div class="container">
			<div class="login-box row padd-80">
				<div class="login-text col-lg-7">
					<h2>Selamat Datang di Halaman Admin</h2>
					<br>
					<p>Silahkan login terlebih dahulu untuk mengelola halaman</p>
					<br>
					<a href="index.html" class="color-white"><i class="fa fa-arrow-left"></i> Kembali ke halaman depan</a>
				</div>
				<div class="col-lg-5">
					<?php
						if (has_alert()) {
							display_alert();
						}
					?>
					<form method="post" action="<?php echo base_url('system/action.php?type=login'); ?>">
						<div class="form-group">
							<label class="color-white"><b>Username :</b></label>
							<input type="text" name="username" class="form-control almost-transparent color-white">
						</div>
						<div class="form-group">
							<label class="color-white"><b>Password :</b></label>
							<input type="password" name="password" class="form-control almost-transparent color-white">
						</div>
						<div class="form-group">
							<button id="login-button" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
