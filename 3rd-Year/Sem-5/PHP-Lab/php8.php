<?php
class Student
{
public $name;
public $course;
function __construct($name,$course)
{
$this->name=$name;
$this->course=$course;
echo "Constructor called <br>";
echo "Student Name:".$this->name."<br>";
echo "course:".$this->course."<br><br>";
}
function __destruct()
{
echo "Destructor called<br>";
echo "object is destroyed:";
}
}
$Student=new Student("Rahul","BCA");
?>