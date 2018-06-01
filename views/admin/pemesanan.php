<div class="content-title">
	<h4>Pemesanan Produk</h4>
</div>

<div class="table-container">
	<table class="table	table-bordered">
		<thead>
			<th>No</th>
			<th>Nama</th>
			<th>Produk</th>
			<th>Jumlah</th>
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
				<td><?= $status[$i]; ?></td>
				<th>
<!--
					<a href="#" class="btn btn-danger btn-sm" title="Hapus">
						<i class="fa fa-trash"></i>
					</a>
-->
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
