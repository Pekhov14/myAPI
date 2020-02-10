<?php
require_once 'classes/Connection.php';
require_once 'classes/Querys.php';

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

$db = new Querys(Connection::make());
$users = $db->insert('users', $name, $pass, $token);

header('Location: http://api.loc/login.php');
exit;

// TODO
// создать сессию и редиректить на room.php