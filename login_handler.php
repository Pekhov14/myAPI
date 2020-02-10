<?php
session_start();

require_once 'classes/Connection.php';
require_once 'classes/Querys.php';

$login_name = $_POST['name'];
$login_pass = $_POST['password'];

$db = new Querys(Connection::make());
$entrance = $db->input_and_selection('users', $login_name, $login_pass);

if(isset($_SESSION['user_name'])){
	header('Location: http://api.loc/closed_room.php');
	exit();
} else {
	header('Location: http://api.loc/login.php');
	exit();
}
