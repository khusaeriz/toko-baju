

	<div class="content-container">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<div class="title-content">
						<h2>Daftar Baju</h2>
					</div>
				</div>
				<?php
					for($i = 0; $i<4; $i++){
				?>

				<div class="col-md-3 product">
					<div class="badge badge-warning badge-custom">Diskon</div>
					<div class="product-image">
						<a href="?page=detail">
                <img src="assets/images/waw.jpg"/>
            </a>
					</div>
					<div class="product-desc">
						<div class="product-title ">
							<a href="?page=detail">Baju bagus</a>
						</div>
						<div class="product-price">
							<span>Rp. 1.000.000.000</span>
							<div class="discount">Rp. 20.000</div>
						</div>
					</div>
					<div class="add-cart text-center">
						<a href="?page=keranjang" class="btn btn-block btn-custom">
							Tambah ke keranjang
						</a>
					</div>
				</div>

				<?php
					}
				?>
			</div>
		</div>
	</div>
