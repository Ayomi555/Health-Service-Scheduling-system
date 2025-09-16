<?php

    // $conn = mysqli_connect("localhost:3308","root","","edoc");
    // $stmt = mysqli_stmt_init($conn);

    // print_r($conn);

    $database = new mysqli("localhost:3308","jaydee","","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>