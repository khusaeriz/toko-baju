<?php

function base_url($uri = '') {
	$config = new config;
	$url = $config->base_url;
	return $url . $uri;
}

/**
	set response
**/
function response($success, $message, $data = null) {
	$response = [
		'success' => (bool)$success,
		'message' => $message,
		'data' => $data
	];

	return $response;
}

/**
	check login
**/
function is_login() {
	if(isset($_SESSION['user'])) {
		return true;
	}
	return false;
}

/**
	redirect page
**/
function redirect($uri = '') {
	$url = base_url($uri);
	header("location:".$url);
}

/**
	set alert
**/
function set_alert($message) {
	$_SESSION['alert'] = $message;
}

/**
	check if alert exists
**/
function has_alert() {
	if (isset($_SESSION['alert'])) {
		return true;
	}
	return false;
}

/**
	display alert
**/
function display_alert(){
	echo "<div class='alert'>";

	if ($_SESSION['alert']['success'] == true) {
		echo "<div class='alert alert-success'>";
	} else {
		echo "<div class='alert alert-danger'>";
	}

	echo "<div class='alert alert-content'>";
	echo $_SESSION['alert']['message'];
	echo "</div>";
	echo "</div>";

	unset($_SESSION['alert']);
}
