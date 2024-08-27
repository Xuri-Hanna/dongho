<?php 
    $server = "dongho.mysql.database.azure.com";
    $user = "dongho";
    $password = "Hieu0411!";
    $database = "watchshop";

    $conn = new mysqli($server, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
