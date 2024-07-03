<?php
require_once "connection2.php";
session_start();
$level2 = $level2_err = "";
$name1 = $name1_err = "" ;
$pno = $pno_err = "";
$select1 = $select1_err = "";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    // check if the user is empty 
    if(empty(trim($_POST['name1'])))
    {
        $name1_err = 'name cannot be blank';
        echo "<script> alert('Field should not be blank..');
        window.location.href='after_login.php'; </script>";
    }
    else
    {
        $sql = "SELECT id FROM users1 WHERE name1 = ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_name1);

            // Set the value of param user
            $param_name1 = trim($_POST['name1']);

            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                $name1 = trim($_POST['name1']);
            }
            else
            {
                echo "<script> alert('Something went wrong..'); </script>";
            }
        }
    }
    mysqli_stmt_close($stmt);


    // check if the level1 is empty 
    if(empty(trim($_POST['level2'])))
    {
        $level2_err = "level should not be blank";
        echo "<script> alert('Level should not be blank..'); 
        window.location.href='after_login.php';</script>";
    }
    else
    {
        $sql = "SELECT id FROM users1 WHERE level2 = ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_level2);

            // Set the value of param level
            $param_level2 = trim($_POST['level2']);

            
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                $level2 = trim($_POST['level2']);
            }
            else
            {
                echo "<script> alert('Something went wrong..'); </script>";
            }
        }
    }
    mysqli_stmt_close($stmt);



    // pno is empty or not
    if(empty(trim($_POST["pno"])))
    {
        $pno_err = "pno cannot be blank";
        echo " <script>alert('Field should not be blank..');
                       window.location.href='after_login.php';
                            </script>
                        ";

    }
    else
    {
        $sql = "SELECT id FROM users1 WHERE pno = ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_pno);

            // Set the value of param userid
            $param_pno = trim($_POST['pno']);

    
            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {   
                    echo " <script>
                             alert('User id is already registered..');
                             window.location.href='after_login.php';
                            </script>
                        ";
                     $pno_err = "This userid is already registered.."; 
                }
                else
                {
                    $pno = trim($_POST['pno']);
                }
            }
            else
            {
                echo "<script> alert('Something went wrong..'); </script>";
            }
        }
    }

    mysqli_stmt_close($stmt);



    // check if the option is empty 
    if(empty(trim($_POST['select1'])))
    {
        $select1_err = 'select cannot be blank';
        echo "<script> alert('Field should not be blank..');
        window.location.href='after_login.php'; </script>";
    }
    else
    {
        $sql = "SELECT id FROM users1 WHERE select1 = ?";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_select1);

            // Set the value of param user
            $param_select1 = trim($_POST['select1']);

            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                $select1 = trim($_POST['select1']);
            }
            else
            {
                echo "<script> alert('Something went wrong..'); </script>";
            }
        }
    }
    mysqli_stmt_close($stmt);


    // inserting data into the database
    if(empty($pno_err) && empty($name1_err) && empty($level2_err) && empty($select1_err)) 
    {
        $sql = "INSERT INTO users1 (pno , name1 , level2 ,select1) VALUES (?, ? ,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "ssss", $param_pno, $param_name1,$param_level2,$param_select1);
            // parameters
            $param_pno = $pno;
            $param_name1 = $name1;
            $param_level2 = $level2;
            $param_select1 = $select1;

            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
                echo " <script>alert('Successfully registered..');
                               window.location.href='after_login.php';
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




    