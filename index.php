<?php

$app = require('system/bootstrap.php');

$css = [
	'master.css'
];
$js = [
	'home.js'
];

include FRONT_VIEW."head.php";
include FRONT_VIEW."welcome.php";
include FRONT_VIEW."home.php";
include FRONT_VIEW."foot.php";
