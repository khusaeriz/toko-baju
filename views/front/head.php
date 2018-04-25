<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Toko Baju</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/master.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.css">

	<script src="assets/js/jquery.min.js" charset="utf-8"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
</head>

<body>
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-expand-sm">
				<ul class="navbar-nav mr-auto">
					<li>
						<a href="index.php">Logoo</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<!-- Dropdown -->
					<li class="nav-item w400px">
						<form class="form-inline" action="/action_page.php">
							<div class="input-group col-lg-12">
								<input type="text" class="form-control input-search" placeholder="Cari baju...">
								<div class="input-group-append">
									<button class="btn btn-dark btn-search" type="button"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</form>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">
								Beranda
              </a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Kategori Pakaian
              </a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Baju</a>
							<a class="dropdown-item" href="#">Kemeja</a>
							<a class="dropdown-item" href="#">Kaus</a>
							<a class="dropdown-item" href="#">Celana</a>
							<a class="dropdown-item" href="#">Rok</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?page=keranjang">
                <i class="fas fa-shopping-cart"></i>
              </a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
