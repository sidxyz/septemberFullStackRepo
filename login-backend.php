<?php

require_once('dal.php');

$username = $_POST['email'];
$password = $_POST['password'];

$dbObject = new Database();

$selectQuery = "SELECT * FROM `users` WHERE `email` = '".$username."'";
$output = $dbObject->executeQuery($selectQuery,'select');

$message = "something went wrong";
	session_start();
if(sizeof($output)==0)
{
	$message = "username does not exist";
	$_SESSION['error-message']=$message;
	header('location:login.php');
}
else
{
	if($output[0]['password']==$password)
	{
		$message = "correct credentials";	
		$_SESSION['username']=$username;
		header('location:show-student-database.php');
	}
	else
	{
		$message = "incorrect credentials!";
		$_SESSION['error-message']=$message;
		header('location:login.php');
	}
}

echo($message);
