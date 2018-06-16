<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ridia Clothes Shop</title>

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

	<!-- css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/master.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/font-awesome/css/fontawesome-all.css'); ?>">

</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-12 d-md-flex justify-content-between">
					<div class="logo-area text-center">
						<a href="index.html">
							<h3>Ridia</h3><span>Clothes Shop</span></a>
					</div>
					<div class="main-menu">
						<nav class="navbar navbar-expand-md align-items-start">

							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
						</button>

							<div class="navbar-collapse align-items-start collapse" id="karl-navbar" style="">
								<ul class="navbar-nav animated" id="nav">
									<li class="nav-item active">
										<a class="nav-link" href="index.html">
											<span class="trn">home</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="shop.html">
											<span class="trn">shop</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link relative" href="cart.html">
											<i class='fa fa-shopping-cart'></i>
											<span class="badge-cart" style="">1</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="input-group">
											<input type="text" class="form-control form-no-border" placeholder="Cari Pakaian..." aria-label="Input group example" aria-describedby="btnGroupAddon">
											<div class="input-group-append">
												<button class="input-group-text btn-primary" id="btnGroupAddon"><i class="fa fa-search"></i></button>
											</div>
										</div>
									</li>
									<!--
									<li class="nav-item">
										<button class="btn-lang">ID</button>|<button class="btn-lang">EN</button>
									</li>
-->
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
