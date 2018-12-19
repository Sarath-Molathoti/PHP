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
$username=mysqli_query($con,"SELECT Name FROM userinfo WHERE Name='$name'") or die("can't");
$count=mysqli_num_rows($username);
if($count!=0){
	include("links.php");
	echo " "."<br>";
	die("User Already Exists!");
}
if(strlen($password)>4){
$result=mysqli_query($con,"INSERT INTO userinfo(RollNo,Name,Password,State) VALUES('$rollno','$name','$password','$state')");

if(false==$result){
	printf("error:%s\n",mysqli_error($con));
}
else{
	include("links.php");
	echo " "."<br>";
  echo "Registered Successfully";
}}
else{
	include("links.php");
	echo " "."<br>";
echo " Password must be atleast 4 characters";}
?>
