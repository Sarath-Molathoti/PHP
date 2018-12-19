<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password) or die("can't connect to the server");
mysqli_select_db($con,'project1') or die("can't connect to the database");
$result=mysqli_query($con,"SELECT * FROM userinfo");
if(false==$result){
	printf("error:%s\n",mysqli_error($con));
}
else{
	while($row=mysqli_fetch_array($result)){
		echo $row["RollNo"]." ".$row["Name"]." ".$row["Password"]." ".$row["State"]." "."<br>";
	}
	
}
echo " "."<br>";
include "links.php";
?>
