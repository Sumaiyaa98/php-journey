<?php
//OPERATORS in PHP
$x = +'5';  //anpther way to do type casting
$y = 2;
var_dump($x);

echo $x+$y;

//to avoid an error of infinte value, we can use fdiv() function
//ex
$a = 10;
$b = 0;
// var_dump($a/$b); //throws as error
var_dump(fdiv($a,$b)); //output: float(INF)
//fdiv is like division so that's why we don't have to mention the division symbol

//another modulous fucntion
var_dump(fmod($a,4));


//concatination operator 
//long way
$h = "Hello";
$h = $h . "world";
echo $h;

//short way
$h .= "World";
echo $h;

var_dump($a==$b);
var_dump($a<>$b); /*or*/  var_dump($a!=$b);
//both do the same thing

$n = 'a';
echo ++$n;

?>