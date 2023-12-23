<?php

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "crud_php_mysql1";

    $conn = mysqli_connect($server_name,$user_name,$password,$db_name);
    if(!$conn){
        die("Couldn't connect to database: " . mysqli_connect_error());
    }
