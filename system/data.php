<?php

$app = require('bootstrap.php');
$response = null;

if(!isset($_GET['type'])){
		$response = response(false, 'argumen tidak valid!');

		echo json_encode($response);
		die();
}

switch ($_GET['type']) {
	case 'produk':
		if (isset($_GET['kategori']))
		{
			$data = $app->get_produk_where('kategori', $_GET['kategori']);

			if (empty($data)) {
				$response = response(false, 'tidak ada data!');
			} else {
				$response = response(true, 'berhasil mengambil data', $data);
			}
		}
		elseif (isset($_GET['id']))
		{
			$data = $app->get_produk_where('id_produk', $_GET['id']);

			if (empty($data)) {
				$response = response(false, 'tidak ada data!');
			} else {
				$response = response(true, 'berhasil mengambil data', $data);
			}
		}
		else {
			$data = $app->get_produk();

			if (empty($data)) {
				$response = response(false, 'tidak ada data!');
			} else {
				$response = response(true, 'berhasil mengambil data', $data);
			}
		}

		break;

	default:
		$response = response(false, 'tipe salah!');
		break;
}

header("Content-type: text/json");

echo json_encode($response);
