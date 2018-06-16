<?php

echo "connecting to database...\n";
$tables = ['produk', 'pesa', 'pesanan'];


try {
	$db = new PDO('mysql:host=localhost;dbname=toko_baju', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

} catch (PDOException $e) {
	echo "\nfailed to connect to database!!\n";
	echo $e->getMessage();
	die();
}

foreach($argv as $arg){
	switch($arg){
		case '--reset':
			$sql = "drop table if exists ". implode(', ', $tables);
			$db->query($sql);
			break;
		case '--drop':
			$sql = "drop table if exists ". implode(', ', $tables);
			$db->query($sql);
			die();
			break;
	}
}

$sql = file_get_contents('./scheme.sql');
$db->query($sql);

echo 'success import	.';
