<?php 
// Error catching with try and catch
try{
    // Database connection variables
    $server = "mysql:host=localhost;dbname=phpbasics;charset=utf8";
    $user = "root";
    $password = "";
    // Create new instance of the PDO Class and assign it to the variable $db
    $db = new PDO($server, $user, $password);

    var_dump($db);//object(PDO)#1 (0) { } shows successful connection to the database
}

// $e object of the class Exception to store information about the error
catch(Exception $e){
    echo $e->getMessage();//getMessage Method of the $e object to show a shorter error message instead of the whole object
    //echo $e;//show the error stored in variable $e for debugging purposes
    //echo "An error has occured";
}

?>