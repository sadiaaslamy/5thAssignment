<?php
session_start();

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

$user = [
	'email' => $user_email,
	'name' => $user_name,
	'password' => $user_password
	
];

$_SESSION['auth_user'] = $user;
$_SESSION['authenticated'] = true;

header('location: profile.php');
