<?php 

/* todo : write a function that prints every alternate number from 0 to the input provided. Example customPrint(8) will produce an output of 0 2 4 6 
*/

function customPrint($input)
{

	for($i=0;$i<$input;$i=$i+2)
	{
		echo $i." ";
	}
}

//customPrint(8);

/* 
todo : Armstrong number
function isArmstrong($number) return true if the number is armstrong else false.
logic : 153 = 1*1*1 + 5*5*5 + 3*3*3 = 153 for 3 digit numbers only

*/
function isArmstrong($number)
{
	$sum = 0;
	$digits = calculateDigits($number);

	$temporary = $number;

	while($temporary>0)
	{
		$lastDigit = $temporary%10;
		$sum = $sum + pow($lastDigit,$digits);

		$temporary = $temporary - $lastDigit;

		if($temporary>0)
		$temporary = $temporary/10; 	
	}

	if($sum==$number)
		echo $number." is an Armstrong number";
	else
		echo $number." is not an Armstrong number ".$sum;
	 
}

function calculateDigits($number)
{
	$message = "Secret Nuclear Launch Codes";
	$digits = 0;
	$temporary = $number;
	while($temporary>0)
	{
		$lastDigit = $temporary%10;
		//echo $lastDigit;
		$temporary = $temporary - $lastDigit;
		$digits++;
		if($temporary>0)
		$temporary = $temporary/10; 	
	}

	return $digits;
}

echo calculateDigits(1212121212);
//isArmstrong(9474);