
	<div class="container padd-80 full-height">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Toko Baju</a></li>
				<?php

					switch ($page) {
						case 'keranjang':
							echo '<li class="breadcrumb-item active" aria-current="page">Keranjang</li>';
							break;
						case 'detail':
							echo '<li class="breadcrumb-item"><a href="#">Produk</a></li>';
							echo '<li class="breadcrumb-item active" aria-current="page">Baju Bagus</li>';
					}

				?>
			</ol>
		</nav>
