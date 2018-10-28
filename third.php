<?php

class Student {
	public $name;
	public $mobile;
	public $email;
	public $course;
	public $college;
	public $attendance=0;

	public function addDetails($name,$mobile,$email,$course,$college)
	{
		$this->name=$name;
		$this->mobile=$mobile;
		$this->email=$email;
		$this->course=$course;
		$this->college=$college;

		$this->show();
	}

	public function show()
	{
		echo "<br/><br/> name = ".$this->name."<br/> mobile = ".$this->mobile."<br/>  email = ".$this->email."<br/> course = ".$this->course."<br/> college = ".$this->college."<br/> attendance = ".$this->attendance;
	}

	public function makeAttendance()
	{
		$this->attendance=$this->attendance+1;
	}

}

//creating an object

$student1 = new Student();
$student1->addDetails("angadh",9987787877,"angadh@gmail.com","fullstack","RAIT");


$student2 = new Student();
$student2->addDetails("vinay",9287747877,"vinay@gmail.com","fullstack","SIES");


$student1->makeAttendance();
$student2->makeAttendance();

$student1->makeAttendance();
$student2->makeAttendance();

$student1->makeAttendance();
$student2->makeAttendance();

//$student1->show();
//$student2->show();


class Account {
	public $name;
	public $mobile;
	public $email;
	public $accountNumber;
	public $balance=0;

	public function addDetails($name,$mobile,$email,$accountNumber)
	{
		$this->name=$name;
		$this->mobile=$mobile;
		$this->email=$email;
		$this->accountNumber=$accountNumber;
	}

	public function show()
	{
		echo "<br/><br/> name = ".$this->name."<br/> mobile = ".$this->balance;
	}

	public function deposit($amount)
	{
		$this->balance=$this->balance+$amount;
	}

}

$savings = new Account();
$savings->addDetails("siddarth",993008765,"sid@gmail.com",288788654);
$savings->show();

$savings->deposit(10000);
$savings->show();

$savings->deposit(5000);
$savings->show();