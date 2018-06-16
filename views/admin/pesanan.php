<div class="content-title">
	<h4>Pesanan Produk</h4>
</div>

<!-- Edit Pesanan -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="edit-product" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="width:55%	">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Edit Produk</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="/action_page.php">
					<div class="form-group">
						<label for="nama">Nama Pembeli:</label>
						<input type="email" class="form-control" id="nama" value="Adi Kusuma" readonly>
					</div>
					<div class="form-group">
						<label for="pwd">Nama Produk:</label>
						<input type="text" class="form-control" id="pwd" value="Baju Bagus" readonly>
					</div>
					<div class="form-group">
						<label for="pwd">Jumlah:</label>
						<input type="number" class="form-control" id="pwd" value="1" readonly>
					</div>
					<div class="form-group">
						<label for="pwd">Ukuran:</label>
						<input type="Text" class="form-control" id="pwd" value="L" readonly>
					</div>
					<div class="form-group">
						<label for="pwd">Status:</label>
						<select class="form-control">
							<option value="3">Belum Diproses</option>
							<option value="1">Sedang Diproses</option>
							<option value="2">Pengiriman</option>
							<option value="4">Dibatalkan</option>
						</select>
					</div>
				</form>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<a href="" class="btn btn-primary">Simpan</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
			</div>

		</div>
	</div>
</div>



<div class="table-container">
	<table class="table	table-bordered">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Produk</th>
			<th>Jumlah</th>
			<th>Ukuran</th>
			<th>Status</th>
			<th width="15%">Aksi</th>
		</thead>
		<tbody>
		<?php
			$status = array('', 'Sedang Diproses', 'Pengiriman', 'Belum Diproses', 'Dibatalkan');
			for ($i=1; $i < 5; $i++) { ?>
			<tr>
				<td><?= $i ?></td>
				<td>Adi Kusuma</td>
				<td><a href="#">Baju Bagus</a></td>
				<td>2</td>
				<td>L</td>
				<td><?= $status[$i]; ?></td>
				<th>
<!--
					<a href="#" class="btn btn-danger btn-sm" title="Hapus">
						<i class="fa fa-trash"></i>
					</a>
-->
					<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-product" style="color:#fff">
						<i class="fa fa-edit"></i>
					</button>
<!--
					<a href="#" class="btn btn-primary btn-sm color-white" title="Edit">
						<i class="fa fa-eye"></i>
					</a>
-->
				</th>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
