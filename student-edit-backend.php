<?php 

require_once('dal.php');

$databaseObject = new Database();
$selectQuery="SELECT * FROM `student` where `email`='".$_GET['email']."'";
$output = $databaseObject->selectQuery($selectQuery);

if(!$output)
echo "nope";

?>