<?php
require_once 'classes/Connection.php';
require_once 'classes/Querys.php';

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['token'])) {
	$url_token = $_GET['token'];

	$db = new Querys(Connection::make());
	$tokens = $db->select_one('users', 'token', $url_token);
//	var_dump($tokens);
	if ($tokens) {
//		echo 'такой ключ есть';
		$result_query = $db->select('films');
//		echo json_encode($result_query, JSON_UNESCAPED_UNICODE);

		foreach ($result_query as $res) {
			echo json_encode($res, JSON_UNESCAPED_UNICODE);
//			var_dump($res);
		}

//		var_dump($result_query);




//		var_dump($result_query);
//		зделать запрос на выборку данных
//		перевестив json
//		вывести json
	} else {
//		echo 'такого ключа нет';
		http_response_code(405);
	}
} else {
	echo 'не гет';
}

////	$tokens = $db->select_one('users', 'token', '1');
//	$tokens = $db->select('users', 'token');

//	var_dump($tokens);


// если есть гет запрос
//	взять токен из него
//	проверить есть ли он в базе
//	если есть выдать json
// https://www.youtube.com/watch?v=UPuR-dy-kgE