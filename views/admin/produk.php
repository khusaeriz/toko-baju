<div class="content-title">
	<h4>Pengelolaan Produk</h4>
</div>

<div class="table-container">
	<div class="table-action text-right">
		<a href="#" class="btn btn-primary">
			Tambah Produk
		</a>
	</div>
	<table class="table	table-bordered">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga Satuan</th>
			<th width="15%">Aksi</th>
		</thead>
		<tbody>
		<?php for ($i=1; $i < 10; $i++) { ?>
			<tr>
				<td><?= $i ?></td>
				<td>Baju Bagus</td>
				<td>2</td>
				<td>1000</td>
				<th>
					<a href="#" class="btn btn-danger btn-sm" title="Hapus">
						<i class="fa fa-trash"></i>
					</a>
					<a href="#" class="btn btn-warning btn-sm color-white" title="Edit">
						<i class="fa fa-edit"></i>
					</a>
					<a href="#" class="btn btn-primary btn-sm color-white" title="Edit">
						<i class="fa fa-eye"></i>
					</a>
				</th>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
