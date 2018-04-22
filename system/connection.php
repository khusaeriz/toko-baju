<?php

$dbh = new PDO('mysql:host=localhost;dbname=db_toko_baju', 'root', '');

$stmt = $dbh->prepare('select * from product');
$stmt->execute();

$data = array();

while($row = $stmt->fetchObject()) {
	$data[] = $row;
}

$data = [2 => $data[1], 3=> $data[2]];

print_r($data);
// print_r(json_encode($data));

?>
