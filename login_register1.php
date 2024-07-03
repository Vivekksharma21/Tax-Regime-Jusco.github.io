<?php
require_once "connection1.php";
session_start();
$level1 = $level1_err = "";
$user = $user_err = "" ;
$userid = $password= $confirm_password= "";
$userid_err = $password_err = $confirm_password_err = "";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    // check if the user is empty 
    if(empty(trim($_POST['user'])))
    {
        $user_err = "user cannot be blank";
    }
    else
    {
        $sql = "SELECT id FROM users WHERE user = ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_user);

            // Set the value of param user
            $param_userid = trim($_POST['user']);

            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                $user = trim($_POST['user']);
            }
            else
            {
                echo "<script> alert('Something went wrong..'); </script>";
            }
        }
    }
    mysqli_stmt_close($stmt);


    // check if the level1 is empty 
    if(empty(trim($_POST['level1'])))
    {
        $level1_err = "level should not be blank";
    }
    else
    {
        $sql = "SELECT id FROM users WHERE level1 = ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_level1);

            // Set the value of param level
            $param_level1 = trim($_POST['level1']);

            
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                $level1 = trim($_POST['level1']);
            }
            else
            {
                echo "<script> alert('Something went wrong..'); </script>";
            }
        }
    }
    mysqli_stmt_close($stmt);



    // userid is empty or not
    if(empty(trim($_POST["userid"])))
    {
        $userid_err = "Userid cannot be blank";
    }
    else
    {
        $sql = "SELECT id FROM users WHERE userid = ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_userid);

            // Set the value of param userid
            $param_userid = trim($_POST['userid']);

    
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {   
                    echo " <script>
                             alert('User id is already registered..');
                             window.location.href='login12.php';
                            </script>
                        ";
                     $userid_err = "This userid is already registered.."; 
                }
                else
                {
                    $userid = trim($_POST['userid']);
                }
            }
            else
            {
                echo "<script> alert('Something went wrong..'); </script>";
            }
        }
    }

    mysqli_stmt_close($stmt);

    // Check for password
    if(empty(trim($_POST['password'])))
    {
        $password_err = "Password cannot be blank";
        echo " <script> alert('Password cannot be blank ');</script>";
    }
    elseif(strlen(trim($_POST['password'])) < 8)
    {
        $password_err = "Password cannot be less than 8 characters";
        echo"<script> alert('Password cannot be less than 8 characters');
                      window.location.href='login12.php'; 
            </script>";
    }
    else
    {
        $password = trim($_POST['password']);
    }

    // confirm password 
    if(trim($_POST['password']) !=  trim($_POST['confirm_password']))
    {
        $password_err = "Passwords should match ";
        
    }


    // inserting data into the database
    if(empty($userid_err) && empty($password_err) && empty($confirm_password_err) && empty($user_err) && empty($level1_err)) 
    {
        $sql = "INSERT INTO users (userid, password , user , level1) VALUES (?, ? ,?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "ssss", $param_userid, $param_password, $param_user,$param_level1);
            // parameters
            $param_userid = $userid;
            $param_password = $password;
            $param_user = $user;
            $param_level1 = $level1;
            $_SESSION['user'] = $param_user;
            

            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
                echo " <script>alert('Registration successfully..');
                               window.location.href='login12.php';
                        </script>
                ";
            }
            else
            {
                echo " <script> alert('Something went wrong... cannot redirect!');</script>";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}

?>




    