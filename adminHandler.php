<?php

if (isset($_POST['adminLoginButton'])) {
	//Login button was pressed
	$empID = $_POST['empid'];
    $password = $_POST['password'];
    
    $result = $admin->login($empID,$password);

	if ($result) {
		$_SESSION['empID'] = $empID;
		$message = "Login Successful!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} else{
		$message = "Login Unsuccessful, contact Manager";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}