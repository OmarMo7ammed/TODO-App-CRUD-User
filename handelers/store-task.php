<?php 
    session_start();
    $conn = mysqli_connect("localhost","root","","todo_app");
    if(!$conn){
        echo "connect error " . mysqli_connect_error();
    }

    if($_SERVER['REQUEST_METHOD']  == "POST" && isset($_POST['title']))
    {

        $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
            $sql = "INSERT INTO `tasks` (`title`) VALUES('$title')";
            $result = mysqli_query($conn,$sql);

            if(mysqli_affected_rows($conn) == 1){
                $_SESSION['success'] = "Data Inserted Successfully 👌";
            }
        // redirection
        header('location:../index.php');
    }