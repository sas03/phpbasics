<?php 

// include connect.php file giving database connection access
include 'connect.php';

// take a query and assign it to a variable $stmt for statement
$stmt = $db->query("SELECT * FROM names");

// Alternative to using fetch in a while-loop
// As with fetch, fetchAll returns both associative and numerical array at once by default
// fetchAll to return the whole dataset from the database at once to a single array
$results = $stmt->fetchAll();

// case you only want to work with associative array
//$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// case you only want to work with numerical array
//$results = $stmt->fetchAll(PDO::FETCH_NUM);

// loop through the array
foreach($results as $row){
    //use the numerical array(column numbers - id) to assign each database result to a variable
    /*$firstname = htmlentities($row['1']);
    $lastname = htmlentities($row['2']);
    $postcode = htmlentities($row['3']);*/

    //use the associative array to assign each database result to a variable
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    // echo the variables
    echo $firstname . ' ' . $lastname . ' ' . $postcode . '<br>';
    
    //echo "<pre>" . var_dump($row) . "</pre>";
}

?>