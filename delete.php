<?php  
    include('inc/header.php');
    
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header("Location:index.php");
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM `users`  WHERE `user_id`='$id' LIMIT 1 ";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        header("Location:index.php");
    }
    $sql1 = "DELETE FROM `users` WHERE `user_id`='$id' ";
    mysqli_query($conn,$sql1);

?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User Have Been Deleteed</h1>
    <?php header("refresh:3;url=index.php"); ?>
  
<?php  include('inc/footer.php'); ?>

 
  