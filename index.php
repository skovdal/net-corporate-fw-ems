<?php
function handleRequest() {
	$host = isset($_POST['HOST']) && strlen($_POST['HOST']) > 0 ? $_POST['HOST'] : null;

	header('Content-Type: application/json');
	http_response_code(200);

	echo json_encode([
		'STATUS' => 'OK'
	], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

	exit;
}

handleRequest();
?>