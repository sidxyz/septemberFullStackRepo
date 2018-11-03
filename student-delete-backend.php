<?php 

require_once('dal.php');

$databaseObject = new Database();
$deleteQuery="DELETE FROM `student` where `email`='".$_GET['email']."'";
$isExecuted = $databaseObject->deleteQuery($deleteQuery);

if($isExecuted)
header("location:show-student-database.php");
else
echo "nope";

?>