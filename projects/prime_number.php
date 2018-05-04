<?php
error_reporting(E_ALL);
$time_start=(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])*1000;

function isPrime($number) 
{
	
    $prime = true;
	
	if($number<2)
		return false;
		
	if($number==2)
		return true;

	if($number%2==0)
		return false;
		
    // Set default to true
	
	for ($i = 3; $i < $number; $i++) //all numbers are divisible by 1 so we start from 2
	{
		
		if (($number % $i)==0) //this is the condition to check reminder is 0 or not 
		                           
		{
            $prime = false;  //if it get any even number then it will break and return immidiately
            return $prime;
        }
    }
                    
    return $prime; // return only true value
}
?>

<?php

$count=0;
$value=2;
while ($count<1000) { //it counts all the number less than 1000
    if (isPrime($value)) { //function declaration($number=$i)
        $count++;
        echo $value.",\n";
    }
    $value++;   //increment by 1
}
		
?>	
 
<br/>
<?php 
$time_end=(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])*1000;
$execution_time=($time_end-$time_start);
echo "<b>Start time: </b>".$time_start." ms"."</br>";
echo "<b>End time: </b>".$time_end." ms"."</br>";		
echo "<b>Total execution time: </b>".$execution_time." ms"."</br>";	

?>

