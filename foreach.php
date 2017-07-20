<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// Construct a loop that iterates through each value and outputs its type as either integer, 
// float, boolean, array, null, or string.
// 'Sgt. Pepper', 
// "11", 
// null, 
// array(1,2,3), 
// 3.14, 
// "12 + 7", 
// false, 
// (string) 11);


foreach($things as $thing){

	if (is_numeric($thing)){
		echo "$thing is a number\n";
		
	} else if (is_array($thing)){
		echo "$thing is an array\n";

	} else if (is_string($thing)){
		echo "$thing is a string\n";

	} else if (is_bool($thing)){
		echo "$thing is a boolean\n";

	} else if (is_float($thing)){
		echo "$thing is a float\n";

	} else if (is_int($thing)){
		echo "$thing is an integer\n";

	} else if (is_null($thing)){
		echo "null\n";
	} 
}

// Construct a loop that iterates through each value and outputs only values with a type that 
// is scalar.

// Create a loop that will echo out every value, including those nested in arrays. Output should
//  look like this.






?>