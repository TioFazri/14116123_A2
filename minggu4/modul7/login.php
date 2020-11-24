<?php
	session_start();

	include_once('user.php');

	$user = new user();

	if (isset($_POST['login'])) {
		$username = $user ->escape_string($_POST['username']);
		$password = $password ->escape_string($_POST['password']);
		$auth = $user->check_login($username, $password);
	}
?>