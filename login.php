<?php
include("db_connect.php");
$username=$_REQUEST['userid'];      //GET + POST
$pass=$_REQUEST['password'];

$query = mysqli_query($conn,"SELECT * FROM `user` WHERE email='$username' AND (`status`='Offline' OR `status`='Signup')");
if(mysqli_num_rows($query)==1){
    while($row=mysqli_fetch_array($query)){    //assoc
		$password=$row['password'];
        $userid=$row['userid'];
		if($password==$pass) {
            $query2=mysqli_query($conn,"INSERT INTO login_history(user_id) VALUES('$userid')");
            $query3=mysqli_query($conn,"UPDATE user SET status='Online' WHERE userid='$userid'");
            if($query2 > 0 && $query3 > 0){
                session_start();
                $_SESSION['email']=$username;
                $_SESSION['name']=$row['first_name'].' '.$row['last_name'];
                header('LOCATION:success.php');
            } else {
                echo "invalid";
            }
        } else {
            echo "invalid";
   	   }
 }  
 } else {
           echo "invalid";
}
mysqli_close($conn);
?>