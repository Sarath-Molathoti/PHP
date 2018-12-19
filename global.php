<?php
$stu="sarath";
function add($n1,$n2){
	$sum=$n1+$n2;
	global $stu;
	echo $stu.'<br>';
	return $sum;
}
$r=add(10,20);
echo "Result = ".$r;
?>