<?php 
require_once "connection1.php";
session_start();
$userid = $_POST['userid'];
$password = $_POST['password'];
$s = "SELECT id FROM users WHERE userid ='$userid' && password ='$password'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['userid'] = $userid;
    header('location:after_login.php');
}
else
{

    echo "Login Failed..Please fill the details correctly";

    //echo "<script> alert('Login Failed..Please fill the details correctly');
    //               window.location.href='login12.php';
    //      </script>";
} 
?>