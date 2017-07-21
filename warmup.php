<?php
// Create a program using PHP control structures that will perform a series of calculations based on the type of numbers in a given array. The calculations will start working with zero and the final result will be echoed after each array element calculation is performed.
// no negative numbers should first be converted to positive numbers
// no calculation should be performed for non-numeric elements
// odd numbers will be added to the result
// even numbers will be multiplied to the result

$result = 0;
$testArray = [2,1,-5,"bob"];

foreach($testArray as $value){
	if (is_numeric($value)){
		if ($value < 0 ){
			$value = -$value;
		} 
		if ($value %2 === 0){
			$result *= $value;
		} else {
			$result += $value;
		}
	}

}
echo $result . PHP_EOL;




// foreach($testArray as $element){
// 	if (is_numeric($value)){
// 		if ($element < 0){
// 			$element *= -1;
// 		}
// 		if ($element % 2 == 0){
// 			$result *= $element;
// 		} else {
// 			$result += $element;
// 		}
// 	}

















?>