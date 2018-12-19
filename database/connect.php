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
while($row=mysqli_fetch_array($username)){
	echo $row["Name"]."<br>";
}
$count=mysqli_num_rows($username) or die("can't count");
if($count>0){
	die("User Already Exists!");
}
$result=mysqli_query($con,"INSERT INTO userinfo(RollNo,Name,Password,State) VALUES('$rollno','$name','$password','$state')");

if(false==$result){
	printf("error:%s\n",mysqli_error($con));
}
else{
  echo "Registered Successfully";
}
?>
