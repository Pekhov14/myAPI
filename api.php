<?php
require_once __DIR__  . '/classes/Connection.php';
require_once __DIR__  . '/classes/Querys.php';

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['token'])) {
	$url_token = $_GET['token'];

	$db = new Querys(Connection::make());
	$tokens = $db->select_one('users', 'token', $url_token);

	if ($tokens) {
		$result_query = $db->select_join();

		foreach ($result_query as $res)
			echo json_encode($res, JSON_UNESCAPED_UNICODE);
	} else {
		http_response_code(405);
	}
} elseif ($_SERVER['REQUEST_METHOD'] == "POST") {

} else {
	http_response_code(405);
}
