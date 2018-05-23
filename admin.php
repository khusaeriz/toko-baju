<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : false;

include "views/admin/template.php";

if ($action) {
	include "views/admin/".$action."_".$page.".php";
} else {
	include "views/admin/".$page.".php";
}
include "views/admin/foot.php";

?>
