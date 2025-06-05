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

/**In PHP, the resource data type is a special type that holds a reference to an external resource, such as:

        -a file handle (e.g., a file you're reading or writing to),

        -a database connection (like MySQL),

        -an image (when using image processing functions),

        -or a stream.**/

        
        
//🔹 Example of a Resource
$file = fopen("example.txt", "r");  // Opens a file for reading
var_dump($file);


//🔸 Output:
//resource(3) of type (stream)
//This means $file is not a string or number — it's a resource, which points to an open file on your system.

/**✅ When Do You Use It?
Whenever you use PHP functions that interact with:

Files: fopen(), fclose()

Databases: mysqli_connect(), pdo

Images: imagecreate(), imagepng()

Streams / Network: fsockopen(), curl_init()

You're usually working with a resource.**/


//array datatype
$arr = ["alex","john","carlos",20];
echo var_dump($arr);
?>