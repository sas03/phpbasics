<?php 
// Database connection variables
$server = "mysql:host=localhost;dbname=phpbasics;charset=utf8";
$user = "root";
$password = "";
// Create new instance of the PDO Class and assign it to the variable $db
$db = new PDO($server, $user, $password);

var_dump($db);//object(PDO)#1 (0) { } shows successful connection to the database

?>