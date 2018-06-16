<?php

function base_url($uri = '') {
	$config = new config;
	$url = $config->base_url;
	return $url . $uri;
}

function response($success, $message, $data = null) {
	$response = [
		'success' => $success,
		'message' => $message,
		'data' => $data
	];

	return $response;
}

?>
