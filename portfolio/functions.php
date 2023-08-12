<?php

//Establish a database connection and return the connection object
function connectDatabase() {
    $host = "localhost";
    $dbName = "myportfoliodb";
    $user = "root";
    $password = "";

    $conn = new mysqli($host, $user, $password, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
