<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


include "views/layouts/template.php";
include "views/admin/".$page.".php";
include "views/layouts/foot.php";

?>
