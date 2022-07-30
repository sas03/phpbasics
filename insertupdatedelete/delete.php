<?php

include 'connect.php';

// use the prepared statement with named parameters to delete records from the table 'names'
$stmt = $db->prepare("DELETE FROM names WHERE firstname = :firstname");

// Bind values
$stmt->bindValue(':firstname', 'Jenny');

// Execute the statement
$stmt->execute();

?>