<?php
include('session.php');
include('admin_users.php');

if($start == 1){

    $id=$_GET['id'];

    echo "<h3>Are you sure you want to remove this user?</h3>";
    echo '<a href="?id='. $id .'&action=yes">Yes</a>';
    echo "<br>";
    echo "<br>";
    echo '<a href="?id='. $id .'&action=no">No</a>';


    if(isset($_GET['action'])){

        $action=$_GET['action'];

        if($action=='yes'){
            mysqli_query($conn,"DELETE FROM `users` WHERE id = '$id'");
            header('Location: users.php');
        }elseif($action=='no'){
            header('Location: users.php');
        }
    }

}else{
    echo "<script> alert('You are not allowed to do this');window.location= 'inventory.php' </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
    <center>
            Developed by Ramiro Alvarez Hernández
            <br>
            <div id="footer"></div>
    </center>

    <script src="https://www.rahcode.com/footer.js"></script>
</body>
</html>