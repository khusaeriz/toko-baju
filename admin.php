<?php

$app = require('system/bootstrap.php');

if(!is_login()) {
	redirect('admin');
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : false;

include ADMIN_VIEW."template.php";

if ($action) {
	include ADMIN_VIEW.$action."_".$page.".php";
} else {
	include ADMIN_VIEW.$page.".php";
}

include ADMIN_VIEW."foot.php";

?>
