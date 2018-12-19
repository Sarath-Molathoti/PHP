<?php
$table=array(array("sarath",165,50),
             array("hasan",180,55),
			 array("bharath",165,55));
echo $table[0][0]."  " ; echo $table[0][1]."  " ; echo $table[0][2]."  ".'<br>';
echo $table[1][0]."  " ; echo $table[1][1]."  " ; echo $table[1][2]."  ".'<br>';
echo $table[2][0]."  " ; echo $table[2][1]."  " ; echo $table[2][2]."  ".'<br>';
echo "          ".'<br>';
$table=array(array("name"=>"sarath","height"=>165,"weight"=>50),
             array("name"=>"hasan","height"=>180,"weight"=>55),
			 array("name"=>"bharath","height"=>165,"weight"=>55));
echo $table[0]["name"]."  " ; echo $table[0]["height"]."  " ; echo $table[0]["weight"]."  ".'<br>';
echo $table[1]["name"]."  " ; echo $table[1]["height"]."  " ; echo $table[1]["weight"]."  ".'<br>';
echo $table[2]["name"]."  " ; echo $table[2]["height"]."  " ; echo $table[2]["weight"]."  ".'<br>';
?>