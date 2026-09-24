<!DOCTYPE html>
<html>
<head>
<title>Student form</title>
</head>
<body>
<h2>Student Registration</h2>
<form method="POST">
Name:<input type="text" name="name"><br><br>
Age:<input type="number" name="age"><br><br>
course:<input type="text" name="course"><br><br>
<input type="submit" name="submit" value="save">
</form>
<?php
$conn=mysqli_connect('localhost','root',"",'college');
if(!$conn){
die("connection failed");
}
if(isset($_POST["submit"])){
$name=$_POST["name"];
$age=$_POST["age"];
$course=$_POST["course"];
$sql="INSERT INTO student(name,age,couse)
VALUES('$name','$age','$course')";
mysqli_query($conn,$sql);
echo"<h3>student data saved successfully.</h3>";
}
$result=mysqli_query($conn,"SELECT*FROM student");
echo "<h2>student details</h2>";
while($row=mysqli_fetch_assoc($result)){
echo "ID:".$row["id"]."<br>";
echo "Name:".$row["name"]."<br>";
echo "Age:".$row["age"]."<br>";
echo "course:",$row["course"]."<br>";
echo "<hr>";
}
mysqli_close($conn);
?>
</body>
</html>
