<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


include "views/admin/template.php";
include "views/admin/".$page.".php";
include "views/admin/foot.php";

?>
