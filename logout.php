<?php
include 'db_connect.php';
session_start();
$email=$_SESSION['email'];
echo $query="UPDATE user SET status='Offline' WHERE email='$email'";
$exec=mysqli_query($conn,$query);
if($exec==1){
    session_unset();
    session_destroy();
   
    header('LOCATION:index.php');
} else {
    echo "Logout Unsuccessful";
}
?>