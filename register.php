<?php
function validateEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)||$email=="") {
  return 0;
} else {
        return 1;
    }
}
function validateMobile($mobile){
    if(preg_match("/[0-9]{10}/",$mobile)) {
        return 1;
    }
    else return 0;
}
function checkDOB($day,$month,$year){
   
$years  = date("Y") - $year;
$months = date("m") - $month;
$days   = date("d") - $day;
        if($years == 0 && ($day!=""||$month!=""||$year!="") && $months >= 0) {
         if($months == 0 && $days > 0){
             return 1;
         }
        } else if($years > 0 && ($day!=""||$month!=""||$year!="")){
            return 1;
        } else return 0;
} 
include 'db_connect.php';  //require
$dob=date('Y-m-d');
$first_name = $_REQUEST['fname'];
$last_name = $_REQUEST['lname'];
$usr_email= $_REQUEST['email'];
$usr_pwd  = $_REQUEST['password'];
$usr_mobile  = $_REQUEST['mobile'];
$dd=$_REQUEST['dd'];
$mm=$_REQUEST['mm'];
$yy=$_REQUEST['yy'];
$dob=$yy."-".$mm."-".$dd;
$gender=$_REQUEST['gender'];
if(validateEmail($usr_email)!=1||validateMobile($usr_mobile)!=1||checkDOB($dd,$mm,$yy)!=1){
    echo "Invalid Fields";
} else {
$query1 = "SELECT * FROM `user` WHERE email='$usr_email'";
    $exec1=mysqli_query($conn,$query1);
    if(mysqli_num_rows($exec1)>0){
        echo "Already Registered";
    } else {
        $query = "INSERT INTO user(first_name,last_name,email,password,mobile,status,gender,dob) VALUES('$first_name','$last_name', '$usr_email','$usr_pwd','$usr_mobile','Signup','$gender','$dob' )" ;
        $var = mysqli_query($conn,$query);
        if($var) {
            header('LOCATION:index.php');
           // echo "Registration Successful";
        } else {
            echo "Failed";
        }
    }
}
mysqli_close($conn);
?>
<!--foreach-->
<!--array as a concept-->
<!--PHP in HTML & HTML in PHP-->
