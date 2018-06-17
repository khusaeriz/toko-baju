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
				if (!$insert)
					$response = response(false, 'gagal memasukan data');
				else
					$response = response(true, 'berhasil memasukan data.');

				break;

			case 'update':
				$record = $_POST;
				$data 	= $_POST;
				$insert = $app->update('produk', $record, $data);

				if (!$insert)
					$response = response(false, 'gagal memasukan data');
				else
					$response = response(true, 'berhasil memasukan data.');

				break;
			default:
				$response = response(false, 'aksi salah!');
				break;
		}
		break;

	case 'login':
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$stmt = $app->db->prepare("select * from users where username = :username and password = :password");
		$stmt->bindValue(":username", $username);
		$stmt->bindValue(":password", $password);
		$stmt->execute();

		$result = $stmt->fetch();

		if ($result) {
			$_SESSION['user'] = $result;
			$app->update('users', ['username' => $username], ['last_login' => date('Y-m-d h:i:s')]);
		} else {
			set_alert(response(false, 'login gagal'));
		}

		redirect('admin.php');

		break;

	case 'logout':
		unset($_SESSION['user']);
		redirect('admin');
		break;

	default:
		$response = response(false, 'tipe salah');
		break;
}

header("Content-type: text/json");

echo json_encode($response);
