<?php
require_once('dal.php');

$updateQuery = "UPDATE `student` SET `first_name` = '".$_POST['firstName']."', `last_name` = '".$_POST['lastName']."', `email` = '".$_POST['email']."' WHERE `email` = '".$_POST['email']."'";

$databaseObject = new Database();
$isExecuted = $databaseObject->updateQuery($updateQuery);
if($isExecuted)
{
	echo "data updated";
	header("location:show-student-database.php");
}
