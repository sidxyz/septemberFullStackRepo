<?php 
try 
{	
	$host="127.0.0.1";
	$user="root";
	$pass="root";
	$dbName="second_database";
	$connectionString = "mysql:host=".$host.";dbname=".$dbName;
	$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

	$pdo = new PDO($connectionString,$user,$pass,$options);

	$insertQuery = "INSERT INTO `student` VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['email']."');";
	//var_dump($insertQuery);
	$insertStatement = $pdo->prepare($insertQuery);
	$insertSuccess = $insertStatement->execute();

	//var_dump($insertSuccess);

	$query = "SELECT * FROM `student`";
	$statement = $pdo->prepare($query);
	$success = $statement->execute();
	$output = $statement->fetchAll();

	$rowCount = 1;

	//var_dump($output);
	foreach ($output as $rowNumber => $row) 
	{
		echo "<br><br>Output begins for row ".$rowCount."<br>";
		foreach ($row as $columnName => $columnValue)
		{
			echo "The value at column ".$columnName." is = ".$columnValue."<br>";
		}
		$rowCount++;
	}

}
catch (Exception $e) 
{
	echo "there was an exception in database connection = ".$e;	
}