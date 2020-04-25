<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$data = json_decode(file_get_contents('php://input'), true);
    $email = $data['email'];
}


if (json_last_error() !== JSON_ERROR_NONE) {
	http_response_code(400);
	echo json_encode([ 'error' => 'Invalid request.' ]);
	exit;
}


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	http_response_code(400);
	echo json_encode([ 'error' => 'Invalid email.' ]);
	exit;
}

$config = parse_ini_file('config.ini');

// Make sure the configuration file is good.
if (!$config) {
	http_response_code(500);
	echo json_encode([ 'error' => 'Internal server error.' ]);
	exit;
}


echo json_encode([ 'success' => 'Subscription successful' ]);

