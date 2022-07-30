<?php

include 'connect.php';

// use the prepared statement with named parameters to insert records in column fields from the table 'names'
$stmt = $db->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES (:firstname, :lastname, :postcode)");

// Bind values
$stmt->bindValue(':firstname', 'Jenny');
$stmt->bindValue(':lastname', 'Jodpers');
$stmt->bindValue(':postcode', 'JJ22 9JJ');

// Execute the statement
$stmt->execute();

// use the prepared statement with placeholders to insert records in column fields from the table 'names' 
/*$stmt = $db->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES (?, ?, ?)");

// Bind values
$stmt->bindValue(1, 'Indira');
$stmt->bindValue(2, 'Iguana');
$stmt->bindValue(3, 'IG1 1GT');

// Execute the statement
$stmt->execute();*/

?>