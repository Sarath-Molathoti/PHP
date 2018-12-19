<?php
$table=array(array("name"=>"sarath","height"=>165,"weight"=>50),
             array("name"=>"hasan","height"=>180,"weight"=>55),
			 array("name"=>"bharath","height"=>165,"weight"=>55));
foreach($table as $item)
{
	foreach($item as $student)
	{
		echo $student." ".'<br>';
	}
}

?>