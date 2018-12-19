<?php
for($i=0;$i<10;$i++)
{
	if($i!=5)
	{
		echo "Hello...This is $i<br>";
	}
	else{
		exit("YOU HAVE REACHED 5.THE PAGE IS DEAD");//you can use die function also
	}
}?>