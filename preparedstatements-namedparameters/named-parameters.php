<?php 

// include connect.php file giving database connection access
include 'connect.php';

// use of prepared statements with named parameters for sql queries
// they remove the risk of SQL injection because they don't involve inserting strings in our SQL queries
// use the column field name instead of the string we search for
$stmt = $db->prepare("SELECT * FROM names WHERE firstname = :firstname");

$names = array('Andy','Belinda','Dippy');

// for each element of the array $names
foreach($names as $name){
    // Bind parameters with the parameters' name(from the column field name) thanks to bindParam
    $stmt->bindParam(':firstname',$name);

    $stmt->execute();

    // use PDO::FETCH_ASSOC for fetch only to return the associative array and loop through the array 
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // use the associative array to assign each database result to a variable
        $firstname = htmlentities($row['firstname']);
        $lastname = htmlentities($row['lastname']);
        $postcode = htmlentities($row['postcode']);

        // echo the variables
        // displays the matching record from the database
        echo $firstname . ' ' . $lastname . ' ' . $postcode . '<br>';

        //shows what the associative array $row contains
        echo "<pre>" . var_dump($row) . "</pre>";
    }
}


// Prepared statement with named parameters using bindValue
/*$stmt = $db->prepare("SELECT * FROM names WHERE firstname = :firstname");

// Bind parameters with the parameters' name(from the column field name) thanks to bindValue
// In case of bindValue, you can add a third parameter to refer to the type of data(PARAM_STR for string, PARAM_INT for integer, PARAM_BOOL for boolean) to bind - not needed for mysql database, because mysql has type casting
$stmt->bindValue(':firstname','Andy',PDO::PARAM_STR);

$stmt->execute();

// use PDO::FETCH_ASSOC for fetch only to return the associative array and loop through the array 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    // use the associative array to assign each database result to a variable
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    // echo the variables
    // displays the matching record from the database
    echo $firstname . ' ' . $lastname . ' ' . $postcode . '<br>';

    //shows what the associative array $row contains
    echo "<pre>" . var_dump($row) . "</pre>";
}*/
?>