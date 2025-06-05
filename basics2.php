<?php

// echo phpinfo();
//this function use to get the php information,
//for now, we are trying to find the file location of php from this

//constants in php
//like in other languages, we also have constants in php as well, that we can't redeclare it or inialize again 
$name = "alex";
$name = "maria";
echo $name;
//if we use the const keyword before name then we won't be able to initialize it again and it will shows an error



echo "<br>";
//another way to declare constant in php
define("Name", "Mike");
// define("Name", "Jack"); //shows an error
echo Name;


echo "<br>";
//to get the info or to know the datatype of a variable, we use var_dump() funct
echo var_dump(Name);



//datatypes
//similar datatypes,except one, name -> resource
?>