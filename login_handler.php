<?php
session_start();

require_once __DIR__  . '/Classes/Connection.php';
require_once __DIR__  . '/Classes/Querys.php';

$login_name = htmlspecialchars($_POST['name']);
$login_pass = htmlspecialchars($_POST['password']);

if (!empty($login_name) && !empty($login_pass)) {
	$db = new Querys(Connection::make());
	$entrance = $db->input_and_selection('users', $login_name, $login_pass);
}

if(isset($_SESSION['user_name'])){
	header('Location: closed_room.php');
	exit();
} else {
	header('Location: login.php');
	exit();
}
