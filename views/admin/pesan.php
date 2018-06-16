<div class="content-title">
	<h4>Pesan Masuk</h4>
</div>

<div class="table-container">
	<table class="table	table-bordered">
		<thead>
			<th width="5%">No</th>
			<th width="20%">Pengirim</th>
			<th width="20%">Email</th>
			<th width="20%">Perihal</th>
			<th>Isi</th>
			<th width="15%">Aksi</th>
		</thead>
		<tbody>
			<?php
			for ($i=1; $i < 2; $i++) { ?>
				<tr>
					<td>
						<?= $i ?>
					</td>
					<td>Adi Kusuma</td>
					<td>adi.kusuma@gmail.com</td>
					<td>Lain-lain</td>
					<td>tes</td>
					<th>
						<a href="#" class="btn btn-warning btn-sm color-white" title="Edit">
						<i class="fas fa-reply"></i>
					</a>
						<a href="#" class="btn btn-primary btn-sm color-white" title="Edit">
						<i class="fa fa-eye"></i>
					</a>
						<a href="#" class="btn btn-danger btn-sm color-white" title="Edit">
						<i class="fa fa-trash"></i>
					</a>
					</th>
				</tr>
				<?php } ?>
		</tbody>
	</table>
</div>
