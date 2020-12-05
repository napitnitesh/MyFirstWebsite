<?php
    //ways to connect to a mySql datbase -
    // 1. mySQLi extension 
    // 2. PDO

    // Connectig to the database - 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "first_db";

    // Create a connection - 
    $conn = mysqli_connect( $servername, $username, $password,$db);

    // Die if connection was not successful - 
    if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
    }
?>
