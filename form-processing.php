<?php
require_once('dal.php');

$insertQuery = "INSERT INTO `student` VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['email']."');";

$databaseObject = new Database();
$isExecuted = $databaseObject->insertQuery($insertQuery);
if($isExecuted)
{
	echo "data inserted";
	header("location:show-student-database.php");
}
