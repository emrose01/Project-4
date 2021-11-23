<!--
Emily Morton
Cy Kovachevich
Ryan Mills
2 December 2021
CSC 390
Project 4 View List Page
-->

<?php include_once 'header.php'; ?>


////Dustin's Example!

// Prepare data to connect to the database
$host = 'localhost';
$db = 'test';
$dsn = "mysql:host=$host;dbname=$db";
$username = 'root';
$password = '';

// Actually connect to the database
$conn = new PDO($dsn, $username, $password);

// To interact with the database, we need to do SQL queries

// The first step to do a query is prepare it
$query = $conn->prepare('SELECT * FROM menu');

// Actually run the query
$query->execute();

// // Get the results from the query, looping once for each row
// while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
//     echo "Name: " . $row['name'] . ' Description' . $row['description'] . '<br>';
// }

// This will give you back all the rows in one fetch
// This does the exact same thing as the commented out example above, just in a different way
$rows = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo "Name: " . $row['name'] . ' Description' . $row['description'] . '<br>';
}
