<?php 

// include connect.php file giving database connection access
include 'connect.php';

// use of prepared statements with placeholders for sql queries
// they remove the risk of SQL injection because they don't involve inserting strings in our SQL queries
// use the placeholder question-mark depending from a particular field instead of the string we search for
/*$stmt = $db->prepare("SELECT * FROM names WHERE id = ? && firstname LIKE ?");

// use bind values to bind our search string to the placeholder question-mark
// by refering to it's position in the sql query
// there are 2 question-marks, so we need to bind 2 values in correct order(id-1,firstname-2)
// bind all the database records where the id = 3
$stmt->bindValue(1,'3');
// bind all the database records where the firstname contains the letter 'i'
$stmt->bindValue(2,'%i%');

// Then execute the statement
$stmt->execute();

// use PDO::FETCH_ASSOC for fetch only to return the associative array 
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


// we can also search for variables instead of values(which are more limited)
// with bindParam, we can specify a list of names to search for instead of just one by using a variable as an array
/*$stmt = $db->prepare("SELECT * FROM names WHERE id = ? && firstname = ?");

$id = 4;
$name = 'Dippy';

// Bind parameters with bindParam instead of bindValue
//As with bindValue, there are 2 question-marks, so we need to bind 2 values in correct order(id-1,firstname-2)
$stmt->bindParam(1,$id);
$stmt->bindParam(2,$name);

$stmt->execute();

// use PDO::FETCH_ASSOC for fetch only to return the associative array 
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
} */

// we can also search for variables instead of values(which are more limited)
// with bindParam, we can specify a list of names to search for instead of just one by using a variable as an array
$stmt = $db->prepare("SELECT * FROM names WHERE firstname = ?");

$names = array('Andy','Belinda','Dippy');

// for each element of the array $names
foreach($names as $name){
    // Bind parameters with the name of the array thanks to bindParam instead of bindValue
    $stmt->bindParam(1,$name);

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

?>