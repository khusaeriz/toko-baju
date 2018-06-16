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
		switch(@$_GET['action']) {
			case 'insert':
				$data = $_POST;
				$insert = $app->insert('produk', $data);
				if (!$insert) {
					$response = response(false, 'gagal memasukan data');
				}
				else {
					$response = response(true, 'berhasil memasukan data.');
				}
				break;
			case 'update':
				$record = $_POST;
				$data = $_POST;
				$insert = $app->update('produk', $record $data);
				if (!$insert) {
					$response = response(false, 'gagal memasukan data');
				}
				else {
					$response = response(true, 'berhasil memasukan data.');
				}
				break;

				break;
			default:
				$response = response(false, 'aksi salah!');
				break;
		}
		break;

	default:
		$response = response(false, 'tipe salah');
		break;
}

header("Content-type: text/json");

echo json_encode($response);
