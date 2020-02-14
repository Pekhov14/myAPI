<?php
require_once __DIR__  . '/Classes/Connection.php';
require_once __DIR__  . '/Classes/Querys.php';

$options = ['cost' => 12];

$token = bin2hex(random_bytes(15));
$name  = htmlspecialchars(trim($_POST['name']));
$pass  = password_hash(htmlspecialchars($_POST['password']),PASSWORD_BCRYPT, $options);

//$arr_insert = [
//	"token" => $token,
//	"name"  => $name,
//	"pass" => $pass,
//];
//var_dump($arr_insert['token']);

if (!empty($name) && !empty($pass)) {
	$db = new Querys(Connection::make());
	$users = $db->insert('users', $name, $pass, $token);

	header('Location: login.php');
	exit;
} else {
	header('Location: index.php');
}


