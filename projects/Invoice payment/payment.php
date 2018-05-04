<?php
if(isset($_POST['ok']));
{
	$paid=$_POST["paid"];
	$bill=$_POST["bill"];
	$bill=explode(",",$bill);
	unset($bill[0]);
	
	echo "Total paid Amount = $paid"."<br/>";
	foreach($bill as $key=>$bill)
	{
		echo $key,"]"," ",$bill, "<br/>";
        }	

}


?>
