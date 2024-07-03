<?php 
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
  // header('location:login12.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tax Regime</title>
  <link rel="stylesheet" href="after_login.css">
</head>
<body>
  
  <header>
    <h2 style="margin-left: -80px;color:cyan;">Tax Regime</h2>
    <br>
    <nav style="text-align:center;">
      <a><H4 style="margin-left:80px;"> JUSCO </H4></a>
    </nav>
    <br>
    <div class='home'>
      <a href="after_login.php" style="color: white;">Home</a>
    </div>
    <div class='report'>
      <a href="after_home.php" style="color: white;">Report page</a>
    </div>
    <div class='logout'>
      <a href='logout.php'; style="color:red;text-align:right;">Logout</a>
    </div>
    
  </header>
  <div class="content">
    <div class="container">
      <span style="margin-top: -9px;">
        <p>Tax Regime switch option facility from default(New Tax Regime) to old Tax Regime for Financial year 2023-24</p>
      </span>
    </div>
    <div class="format">
      <div class="details">
        <fieldset>
          <legend>Record Details</legend>
        </fieldset><br>
        <form action="after_login_register.php" method="POST">
        <div class="data">
          
            <div class="row">
              <div class="textbox">
                <label><b> Pno: </b></label>
                <input type="text" name="pno" style="margin-left: 103px;border:1px solid red;height: 30px;"><br>
              </div>
              <div class="textbox">
                <label class="fname"><b> Name: </b></label>
                <input type="text" id="fname" name="name1" class="textbox" style="margin-left: 85px;border:1px solid red;height: 30px;" ><br>
              </div>
              <div class="textbox">
                <label for="fname"><b> Level: </b></label>
                <input type="text" id="level2" name="level2" style="margin-left: 91px;border:1px solid red;height: 30px;"><br>
              </div>
            </div>
            </div>
            <div class="document">
              <p style="text-align: left; margin-left: 5px;margin-top:2px;margin-bottom:8px;"><b> Documents : </b></p>
              <fieldset><legend></legend></fieldset><br>

              <div class='cbdt' style="margin-bottom: 9px;margin-top:-9px;">
                <button onclick="window.open('Dummy1.pdf','_blank');">CBDT clarification for TDS - 115BAC</button>
                <button onclick="window.open('Dummy2.pdf','_blank');">New Tax Slab Vs Old Tax Slab Option</button>
                <button onclick="window.open('doc.docx','_blank');">Tax Calculator</button>
              </div>
            
           </div>
           <div class="texts">
              <p style="text-align: left;margin-left:29px;margin-top:13px;"><b>You are currently under Income default option-I (New Tax Regime).</b></p>
              <p style="text-align: left;margin-left:29px;margin-top:20px;"> Do you want to switch from Option-I(New Tax Regime) to Option-II (Old Tax Regime)?
              <select name="select1" style="margin-left: 35px; width: 80px;height: 22px;background-color:rgb(247, 246, 237);color:black;">
                <option value="select" name="selects" category>select
                <option value="yes">Yes
                <option value="No">No 
                </option>
                </option>
              </select>
              </p>
              <p style="text-align:left;margin-left:29px;margin-top:20px;"><input type="checkbox" id="tick1" onclick="enable()">
              I have read the enclosed documents attached carefully before exercising the switching option.
              </p>
              <p style="text-align:left;margin-left:29px;margin-top:10px;"><input type="checkbox" id="tick2" onclick="enable()">
              I can switch only once in a Financial Year
              </p>
           </div>
        </div>
      <div class="submit">
        <button class="buttonn" disabled="true" id="btn" ><b>Submit</b>
      </div>
</form>
      
    </div>
  </div>
</body>
<script>
  function enable()
  {
    var check1 = document.getElementById("tick1");
    var check2 = document.getElementById("tick2");
    var btn = document.getElementById("btn");
    if(check1.checked && check2.checked)
    {
      btn.removeAttribute("disabled");
    }
    else
    {
      btn.disabled=true;
    }
  }
</script>
</html> 
