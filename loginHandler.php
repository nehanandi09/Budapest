<?php

if (isset($_POST['loginButton'])) {
	//Login button was pressed
	$email = $_POST['email'];
	$password = $_POST['password'];

	$result = $account->login($email, $password);

	if ($result) {
		$_SESSION['email'] = $email;
		header("Location: bookRoom.php");
	}
}