<?php
$rollno=$_POST["rollno"];
$name=$_POST["name"];
$password=$_POST["password"];
$state=$_POST["state"];
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password) or die("can't connect to the database");
mysqli_select_db($con,'project1');
$result=mysqli_query($con,"UPDATE userinfo SET Name='$name',Password='$password',State='$state' WHERE RollNo='$rollno'");

if(false==$result){
	printf("error:%s\n",mysqli_error($con));
}
else{
	include("links.php");
	echo " "."<br>";
	echo "Your details has been updated uccessfully";
}
?>
