<div class="content-title">
	<h4>Pengelolaan Produk</h4>
</div>

<!-- Tambah Produk -->
<div class="modal fade bd-example-modal-lg" id="add-product" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" style="width:55%	">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Tambah Produk</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="/action_page.php">
					<div class="form-group">
						<label for="nama">Nama Produk:</label>
						<input type="text" class="form-control" id="nama">
					</div>
					<div class="form-group">
						<label for="pwd">Kategori:</label>
						<input type="text" class="form-control" id="kat">
					</div>
					<div class="form-group">
						<label for="pwd">Jumlah:</label>
						<input type="number" class="form-control" id="pwd">
					</div>
					<div class="form-group">
						<label for="pwd">Harga Satuan:</label>
						<input type="number" class="form-control" id="pwd">
					</div>
					<div class="form-group">
						<label for="pwd">Foto:</label>
						<input type="file" class="form-control" id="pwd">
					</div>
					<div class="form-group">
						<label for="comment">Deskripsi:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
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

<!-- Edit Produk -->
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
						<label for="nama">Nama Produk:</label>
						<input type="text" class="form-control" id="nama" value="Baju Bagus">
					</div>
					<div class="form-group">
						<label for="pwd">Jumlah:</label>
						<input type="number" class="form-control" id="pwd" value="2">
					</div>
					<div class="form-group">
						<label for="pwd">Harga Satuan:</label>
						<input type="number" class="form-control" id="pwd" value="1000">
					</div>
					<div class="form-group">
						<label for="pwd">Foto:</label>
						<input type="file" class="form-control" id="pwd">
					</div>
					<div class="form-group">
						<label for="comment">Deskripsi:</label>
						<textarea class="form-control" rows="5" id="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</textarea>
					</div>
				</form>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<a href="" class="btn btn-primary">Simpan</a>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<div class="table-container">
	<div class="table-action text-right">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-product">Tambah Produk</button>
	</div>
	<table class="table	table-bordered">
		<thead>
			<th width="5%">No</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga Satuan</th>
			<th width="15%">Aksi</th>
		</thead>
		<tbody>
			<?php for ($i=1; $i < 6; $i++) { ?>
			<tr>
				<td>
					<?= $i ?>
				</td>
				<td>Baju Bagus</td>
				<td>2</td>
				<td>1000</td>
				<th>
					<a href="#" class="btn btn-danger btn-sm" title="Hapus">
						<i class="fa fa-trash"></i>
					</a>
					<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-product" style="color:#fff">
						<i class="fa fa-edit"></i>
					</button>
<!--
					<a href="details.html" class="btn btn-primary btn-sm color-white" title="Edit">
						<i class="fa fa-eye"></i>
					</a>
-->
				</th>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
