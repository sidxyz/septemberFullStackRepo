<?php 

$studentArray = ['vinay','angadh','prachi','nirmal','karam'];

$studentAssocArray = ['id'=>'222','name'=>'sid','email'=>'sid@gmail.com','contact'=>9930086388];

//echo $studentAssocArray['email'];

foreach ($studentAssocArray as $key => $value) 
{
//	echo " for key ".$key." the value is = ".$value."<br>";
}

foreach ($studentArray as $index => $student) 
{
//	echo " Array contains  ".$student." at index = ".$index."<br>";
}


try 
{	
	$host="127.0.0.1";
	$user="root";
	$pass="root";
	$dbName="second_database";
	$connectionString = "mysql:host=".$host.";dbname=".$dbName;
	$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

	$pdo = new PDO($connectionString,$user,$pass,$options);

	$insertQuery = "INSERT INTO `student` VALUES ('sam', 'tam', 'sam@tam.com');";
	$insertStatement = $pdo->prepare($insertQuery);
	$insertSuccess = $insertStatement->execute();


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
//echo $pdo;

//if(sizeof($pdo)>0)
//echo "connected";
//else
//echo "connection failed";

/*$statement = $pdo->prepare($query);
$success = $statement->execute();
$output = $statement->fetchAll();
*/












