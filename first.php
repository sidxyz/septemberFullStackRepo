<?php

//$message="Hello World";

//$salary = 250;
// print - you are eligible for tax if salary is more than 250 else print
// that you are safe

//print_r($names);
//var_dump($names);
//echo $names;

// todo : attach a surname to each name in the array and print it
// surname : kumar

//echo sizeof($names);

/*echo $names[0]." kumar ";
echo $names[1]." kumar ";
echo $names[2]." kumar ";
echo $names[3]." kumar ";
echo $names[4]." kumar ";
echo $names[5]." kumar ";*/

// for($i=0;$i<sizeof($names);$i=$i+1)
// {
// 	echo $names[$i]." kumar ";
// }

// for($i=sizeof($names)-1;$i>=0;$i=$i-1)
// {
// 	echo $names[$i]." kumar ";
// }

// $names = ['Aditya','sid','prathamesh','Karamjeet','Prachi','Nirmal','Pranita','Sandeep'];



/*$i=0;
while($i<sizeof($names))
{
	echo $names[$i]." kumar ";
	$i = $i+1;
}*/


// Arithmetic

$num1 = 20;
$num2 = 30;
$salary = 10000;
//$tax = 0.33*10000;
//echo $substraction; 

function addition($first,$second)
{
	echo $first+$second;
}


//addition(20,30);
//addition(10,30);
//addition(499,3444);

/*
create a fucnction which takes salary as input and echos tax payable as output.
Logic is : 
->if salary is greater than 10,000 and lesser than 50,000 tax payable is 20% of salary.
-> if salary is greater than 50,000 then tax payable is 33% of salary
*/

function calculateSalary($salary)
{
	if($salary>10000)
	{
		if($salary<50000)
		{
			$tax = 0.2*$salary;
		}
		else
		{
			$tax = 0.33*$salary;	
		}
	}
	else
	{
		$tax= "you dont fall in tax slab";	
	}


	echo $tax;
}

//calculateSalary(110000);


$names = ['Aditya','sid','prathamesh','Karamjeet','Prachi','Nirmal','Pranita','Sandeep'];

function searchInArray($array,$keyword)
{
	$i =0;
	$found = false;
	while($i<sizeof($array))
	{
		if($array[$i]==$keyword)
		{
			$i = $i+1;
			echo $keyword." found at ".$i;
			$found = true;	
		}
		$i = $i+1;
		
	}
	if($found == false)
	{
		echo $keyword." not found";
	}	
}

searchInArray($names,'Prachi');
searchInArray($names,'Ron');

























































































