<?php

//Arrays in PHP
$programmingLng = ['Java','Cpp','Python'];
//to print the specific element from an array
echo $programmingLng[1];

echo "<br>";

//to check if the specific index or key exist in array or not, we use isset(arrname[key])
//ex
var_dump(isset($programmingLng[4]));
//it will gives the value in boolean form, we use this to avoid any error
//another way
var_dump(array_key_exists(4 ,$programmingLng));



echo "<br>";
//to just simply print an array
print_r($programmingLng);

//to print more properly like an array, we can use pre tag
echo "<pre>";
print_r($programmingLng);
echo "<pre>";

//output:
/**Array
(
    [0] => Java
    [1] => Cpp
    [2] => Python
) */


//to get the number if elements in an array
echo count($programmingLng);
//output: 3

echo "<br>";
//to push elements in an array
$programmingLng[] = 'Javascript';
print_r($programmingLng);


//another way to push an elements using array_push() fucntion
array_push($programmingLng, 'C','Go','php');
echo "<br>";
print_r($programmingLng);


//to generate our own keys, despite using predefined indexes
$studentGpa = [
    'Alex' => 3.5,
    'Mike' => 2.6,

];
print_r($studentGpa);
//to print specific element using keys

echo $studentGpa['Mike'];
echo gettype($studentGpa['Mike']);

//to add more elements in an array by giving keys as well
$studentGpa['Sarah'] = 3.6;
print_r($studentGpa);

//to remove an element in an array, 
//use array_pop() to remove last element,
//use array_shift() to remove first element,

echo array_pop($studentGpa); //output->3.6
print_r($studentGpa);

//output
/**(
    [Alex] => 3.5
    [Mike] => 2.6
) */

echo array_shift($studentGpa); //output->3.5
print_r($studentGpa);


//unset function, to destroy our array or to remove the specific element that u want
unset($programmingLng[0],$programmingLng[3]);
print_r($programmingLng);

// output
/**Array
(
    [1] => Cpp
    [2] => Python
    [4] => C
    [5] => Go
    [6] => php
) */
//or if we don't mention any element, it will remove all the elements from our array and shows an error 
// if u try to print like ->'undefined variable $programmingLng' because the array doesn't exist anymore

unset($programmingLng);
print_r($programmingLng);
?>