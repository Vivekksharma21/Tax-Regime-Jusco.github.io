<?php 
require_once "connection2.php";
session_start();
if(isset($_SESSION['userid']))
{
   echo "welcome....".$_SESSION['userid'];
}
else
{
   echo "<script> alert('please login to continue..');
                   window.location.href='login12.php';
          </script>";
   //header('location:login12.php');
}


// for table 
//$query = "SELECT * FROM users1 ORDER by id DESC";
//$data = mysqli_query($conn,$query);
//$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<htmm lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Regime</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="after_home.css">
   </head>
<body>
   <header>
        <h2 style="margin-left: -80px;color:cyan;">Tax Regime</h2><br>
       <nav>
       <a><H4 style="margin-left:80px;"> JUSCO </H4></a>
       </nav><br>
       <div class='home'>
         <a href="after_login.php" style="color: white;">Home</a>
       </div>
       <div class='report'>
         <a href="after_home.php" style="color: white;">Report page</a>
       </div>
       <div class='logout' style="text-align: right;margin-right:-80px;">
          <a href='logout.php'; style="color: red;text-align:right;">Logout </a>
       </div>
   </header>
      <div class="content">
         <div class="container">
            <span style="margin-left:-93%;margin-top:-14px;">
               <p>Report</p>
            </span>
         </div>
         <div class="search">
            <fieldset>
               <legend>
                  <h5>Search</h5>
               </legend>
               <form action="" method="POST" style="margin-bottom: 9px;margin-top:6px">
                  <label for="month" style="margin-left:-2530px;margin-right:20px;">From Date : </label>
                  <input type="date" id="date1" name="fdate" style="width: 200px;border-radius: 3px;">
                  <td><label for="month" style="margin-left:200px;margin-right:20px;">To Date : </label></td>
                  <input type="date" id="date2" name="tdate" style="width: 200px;border-radius: 3px;">
                  <button class="button" name="view" style=" margin-left:150px;margin-right:-2400px;border-radius: 4px;background-color:blue;width:90px;color:white;height:30px;">View</button>
               </form>
            </fieldset>
            <hr style="margin-top:1px; margin-left:20px;margin-right:20px;">
            <table style="color:darkblue;">
               <tr>
                  <th> <i class="fa fa-step-backward" style="color:1px solid black;margin-left:25px;margin-top:10px;"></i></th>
                  <th> <i class="fa fa-angle-left" style="color:1px solid black;margin-left:30px;margin-top:10px;font-size:20px;"></i></th>
                  <th> <input type="text" style="width: 40px; height:20px;margin-left:17px;margin-top:8px;"></th>
                  <th> <p style="font-size:x-small;margin-top:8px;"> of 2 ? </p></th>
                  <th> <i class="fa fa-angle-right" style="color:1px solid black;margin-left:17px;margin-top:10px;font-size:20px;"></i></th>
                  <th> <i class="fa fa-step-forward" style="color:1px solid black;margin-left:30px;margin-top:10px;"></i></th>
                  <th> <div class="v" style="border-left: 1px solid black;height:44px;position:absolute;margin-top:-20px;margin-left:28px;"></div> </th>
                  <th> <i class="fa fa-undo" style="color:1px solid black;margin-left:45px;margin-top:10px;"></i></th>
                  <th> <div class="v" style="border-left: 1px solid black;height:44px;position:absolute;margin-top:-20px;margin-left:18px;"></div> </th>
                  <th> <i class="fa fa-arrow-circle-left" style="color:1px solid black;margin-left:35px;margin-top:10px;"></i></th>
                  <th> <div class="v" style="border-left: 1px solid black;height:44px;position:absolute;margin-top:-20px;margin-left:18px;"></div> </th>
                  <th> <select name="dropdown" style="margin-left: 40px;margin-top:8px;width: 85px;height: 20px;background-color:white;color:black;">
                          <option value="select" name="select" category>100%
                          <option value="yes">90%
                          <option value="No">50%
                          </option>
                          </option>
                        </select>
                  </th>
                  <th> <div class="v" style="border-left: 1px solid black;height:44px;position:absolute;margin-top:-20px;margin-left:23px;"></div> </th>
                  <th> <i class="fa fa-save" style="color:1px solid black;margin-left:42px;margin-top:10px;"></i></th>
                  <th> <div class="v" style="border-left: 1px solid black;height:44px;position:absolute;margin-top:-20px;margin-left:20px;"></div> </th>
                  <th> <i class="fa fa-print" value="print" type= "button" name="table1" onclick="window.print();return false ;" style="color:1px solid black;margin-left:42px;margin-top:10px;"></i></th>
                  <th> <div class="v" style="border-left: 1px solid black;height:44px;position:absolute;margin-top:-20px;margin-left:23px;"></div> </th>
                  <th> <input type="text" style="width: 100px; height:20px;margin-left:40px;margin-top:8px;"></th>
                  <th> <p style="font-size:x-small;margin-top:8px;"> Find | Next </p></th>
                  <th> <div class="v" style="border-left: 1px solid black;height:44px;position:absolute;margin-top:-20px;margin-left:23px;"></div> </th>
               </tr>
            </table>
            <hr style="margin-top: 6px;margin-left:20px;margin-right:20px;">
            <h3 id="table1" style="text-decoration: underline;text-align:center;color:hsl(193, 89%, 17%);margin-top:22px;margin-left:-30%;margin-bottom:5px;font-size:24px;font-style:italic;"><b> REPORT </b></h3>
            <table id="table1" class="table1" style="margin-top: 20px ;">
            <tr>
                  <th>Pno</th>
                  <th>Name</th>
                  <th>Level</th>
                  <th>Option </th>
                  <th>Created on</th>
            </tr>

            
            
            <?php
               if(isset($_POST['fdate']) && $_POST['tdate'])
               {
                  $fdate = $_POST['fdate'];
                  $tdate = $_POST['tdate'];
                  $query = "SELECT * FROM users1 WHERE created_at BETWEEN '$fdate' AND '$tdate' ";
                  $query_run = mysqli_query($conn,$query);
                  if(mysqli_num_rows($query_run)>0)
                  {
                     foreach($query_run as $row)
                     {
                       // echo $row['name1'];
                       ?>
                        <tr>
                           <td><?= $row['pno']; ?></td>
                           <td><?= $row['name1']; ?></td>
                           <td><?= $row['level2']; ?></td>
                           <td><?= $row['select1']; ?></td>
                           <td><?= $row['created_at']; ?></td>
                        </tr>
                         

                       <?php
                     }

                  }
                  else
                  {
                     echo "no record found";
                  }
               }

            // for table
            // while($result=mysqli_fetch_array($data))
            //{
            //  echo '<tr>';
            //  echo '<td>'.$result['pno'].'</td>';
            //  echo '<td>'.$result['name1'].'</td>';
            //  echo '<td>'.$result['level2'].'</td>';
            //  echo '<td>'.$result['select1'].'</td>';
            //  echo '<td>'.$result['created_at'].'</td>';
            //  echo '</tr>';
            //}
            ?>   


            </table>
         </div>
      </div>
        
        
</body>
</htmm>
