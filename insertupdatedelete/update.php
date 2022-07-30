<?php

include 'connect.php';

// use the prepared statement with named parameters to update a record from a specific column field(postcode) from the table 'names'
// we look at a certain firstname and change the postcode related to the firstname
$stmt = $db->prepare("UPDATE names set postcode = :postcode WHERE firstname = :firstname");

// Bind values
$stmt->bindValue(':firstname', 'Jenny');
$stmt->bindValue(':postcode', 'UI89 7TY');

// Execute the statement
$stmt->execute();

?>