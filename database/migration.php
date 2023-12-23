<?php

    // Connection To MySQL
    $conn = mysqli_connect('localhost','root','');
    // Check Connection Eroor
    if(!$conn){
        echo "Connect error : " . mysqli_connect_error();
    }
    $sql = "CREATE DATABASE IF NOT EXISTS todo_app";
    // make Query
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);

    // Connection to Database
    $conn = mysqli_connect('localhost','root','','todo_app');
    // Check Connection Eroor
    if(!$conn){
        echo "Can't Connect to Database : " . mysqli_connect_error();
    }

    $sql = "CREATE TABLE IF NOT EXISTS `tasks`(
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `title` VARCHAR(255) NOT NULL
    )";
    // Make Query
    $result = mysqli_query($conn,$sql);
    echo mysqli_errno($conn);
    // Close Connection
    mysqli_close($conn);
?>