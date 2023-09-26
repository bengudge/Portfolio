<?php
$servername = "localhost";
$dbname = "bengudgi_portfolio";
$username = "bengudgi_bengudgion";
$password = "tmbqB06F9)_C";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    print("Connected to $dbname at $servername successfully." . '<br>');
    
} 
catch (PDOException $pe) {
    die ("Could not connect to the database $dbname :" . $pe->getMessage());
}