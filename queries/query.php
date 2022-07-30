<?php 

// include connect.php file giving database connection access
include 'connect.php';

// sql-query(using the $db object from the connection script) in a foreach loop(could be used in pdo-connection types, or others)
// Put the query string in the query method(select everything from the table "names")
// Each time the foreach loop runs, it returns an array we will call $row
// htmlentities() convert special caracters into html entities
foreach($db->query("SELECT * FROM names") as $row){
    //show the database fields using the keynames of the associative array
    echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
}


// another way to retrieve data is to use a fetch method
?>