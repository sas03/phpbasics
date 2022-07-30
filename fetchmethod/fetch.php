<?php 

// include connect.php file giving database connection access
include 'connect.php';

// take a query and assign it to a variable $stmt for statement
$stmt = $db->query("SELECT * FROM names");

// fetch by default returns both the associative and numerical array at once
// fetch all the data from the $stmt variable, assign it to a $row variable and loop through it with a while-loop
/*while($row = $stmt->fetch()){
    // show the database fields using the keynames of the associative array
    //echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
    //shows what both the associative and numerical array $row contains
    echo "<pre>" . var_dump($row) . "</pre>";
}*/

// use PDO::FETCH_ASSOC for fetch only to return the associative array 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // show the database fields using the keynames of the associative array
    echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
    //shows what the associative array $row contains
    echo "<pre>" . var_dump($row) . "</pre>";
}

// use PDO::FETCH_NUM for fetch only to return the numerical array 
/*while($row = $stmt->fetch(PDO::FETCH_NUM)){
    // show the database fields using the keynames of the associative array
    //echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
    //shows what the numerical array $row contains
    echo "<pre>" . var_dump($row) . "</pre>";
}*/
?>