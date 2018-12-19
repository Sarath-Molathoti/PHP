<?php
$rollno=$_POST["rollno"];
$password=$_POST["password"];
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password) or die("can't connect to the database");
mysqli_select_db($con,'project1');
$result=mysqli_query($con,"DELETE FROM userinfo WHERE RollNo='$rollno'");

if(false==$result){
	printf("error:%s\n",mysqli_error($con));
}
else{
	include("links.php");
	echo " "."<br>";
	echo "Your Account Has Been Deleted Successfully";
}
?>
