<?php

class Database
{
	public $host="127.0.0.1";
	public $user="root";
	public $pass="root";
	public $dbName="second_database";
	

	public function connect()
	{
		 $connectionString = "mysql:host=".$this->host.";dbname=".$this->dbName;
		 $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
		 $pdo = new PDO($connectionString,$this->user,$this->pass,$options);
		return $pdo;	
	}
	
	public function insertQuery($query)
	{
		try 
		{
			$pdo = $this->connect();
			$insertStatement = $pdo->prepare($query);
			$insertSuccess = $insertStatement->execute();
			return true;	
		} 
		catch (Exception $e) 
		{
			 var_dump("insert query failed, insert query statement was".$query." the exception thrown by PHP was ".$e);
			 return false;
		}
	}

	public function selectQuery($query)
	{
		try 
		{
			$pdo = $this->connect();
			$statement = $pdo->prepare($query);
			$success = $statement->execute();
			$output = $statement->fetchAll();
			return $output;	
		} 
		catch (Exception $e) 
		{
			 var_dump("Select query failed, insert query statement was".$query." the exception thrown by PHP was ".$e);
			 return false;
		}	
	}

	public function deleteQuery($query)
	{
	 	try 
		{
			$pdo = $this->connect();
			$insertStatement = $pdo->prepare($query);
			$insertSuccess = $insertStatement->execute();
			return true;	
		} 
		catch (Exception $e) 
		{
			 var_dump("Delete query failed, insert query statement was".$query." the exception thrown by PHP was ".$e);
			 return false;
		}
	}

	public function updateQuery($query)
	{
		try 
		{
			$pdo = $this->connect();
			$insertStatement = $pdo->prepare($query);
			$insertSuccess = $insertStatement->execute();
			return true;	
		} 
		catch (Exception $e) 
		{
			 var_dump("update query failed, insert query statement was".$query." the exception thrown by PHP was ".$e);
			 return false;
		}
	}
}

























