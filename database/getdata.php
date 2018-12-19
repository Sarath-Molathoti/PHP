<?php
//$name=$_POST["stu_name"];
echo "$name";
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='root';
$n=0;
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
mysqli_select_db($con,'project1');
$query="SELECT * FROM `userinfo`";
$is_query_run=mysqli_query($con,$query);
$query_executed=mysqli_fetch_assoc($is_query_run);

	 while($query_executed['Name']){
	 if($name==$query_executed['Name']){
		 
			 echo "Already Existed";
			 echo $name;
		 }
		 else{
			 echo "Registered Successfully";
	 }}
	
?>
	
	