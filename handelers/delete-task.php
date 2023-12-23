<?php 
    session_start();

    if(isset($_GET['id']))
    {
        $conn = mysqli_connect("localhost","root","","todo_app");
        if(!$conn){
            $_SESSION['errors']=  "connect error " . mysqli_connect_error();
        }
        $id = $_GET['id'];

        $sql = "SELECT * FROM `tasks`  WHERE `id` = '$id' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($result);
    
        if(!$row){
            $_SESSION['errors'] = "Data Not Founded";
        }else
        {
            $sql = "DELETE FROM `tasks`  WHERE `id` = '$id' ";
            $result = mysqli_query($conn,$sql);
            $_SESSION['success'] = "Data Deleted Successfully";
        }
        // redirection 
        header("location:../index.php");
    }