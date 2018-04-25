<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include "views/front/head.php";

if ($page == 'home') {
	include "views/front/lead.php";
} else {
	include "views/front/breadcrumb.php";
}

include "views/front/".$page.".php";
include "views/front/foot.php";

?>
