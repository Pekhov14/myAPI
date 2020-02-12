<?php
session_start();

require_once __DIR__  . '/Classes/Connection.php';
require_once __DIR__  . '/Classes/Querys.php';

$login_name = $_POST['name'];
$login_pass = $_POST['password'];

$db = new Querys(Connection::make());
$entrance = $db->input_and_selection('users', $login_name, $login_pass);

if(isset($_SESSION['user_name'])){
	header('Location: closed_room.php');
	exit();
} else {
	header('Location: login.php');
	exit();
}
