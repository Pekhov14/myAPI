<?php
session_start();

if(isset($_SESSION['user_name'])){
	include_once __DIR__  . '/view_closed_room.php';

//	$db = new Querys(Connection::make());
//	$entrance = $db->input_and_selection('users', $login_name, $login_pass);
}
elseif (empty($_SESSION['user_name'])) {
	header('Location: http://api.loc/index.php');
	exit();
}
