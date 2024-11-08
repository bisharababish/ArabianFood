<?php // defining the connections of the database to the website with its public servernames and other variables.
$servername = "localhost:3307";
$username = "root";
$password = ""; // no password because its a localhost from xampp.
$dbname = "registrations";

$conn = new mysqli($servername, $username, $password, $dbname); // connection of the database

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // if something happens or breaks,it will show a message on the website what is the error and where.
}
?>