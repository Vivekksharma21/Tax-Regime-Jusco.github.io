<?php
require_once "connection1.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login1style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Registraion page</title>
  </head>
  <body> 
    
    <div class="container" style="height:fit-content; background-color:antiquewhite;">
      <input type="checkbox" id="flip">
      <div class="cover">
        <div class="front">
          <img class="frontImg" src="tata4.jpg" alt="">
        </div>
        <div class="back">
          <img class="backImg" src="tata4.jpg" alt="">
        </div>
      </div>
      <div class="h3"><p><span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b><small>Tax Regime</small> </b></span></p></div>
      <div class="forms" style="background-color:antiquewhite;">
        <div class="form-content">
          <div class="login-form">
            <div class="title" style="background-color:antiquewhite;"><h2 style="text-decoration: underline;">Log In </u></h2></div>
            <br>
             <div class="content"><p>-Please enter your user id and password of RFID system-</p></div>


            <form action="validation.php" method="POST">
              
             <div class="input-boxes">
               <div class="input-box">
                 <i class="fas fa-user"></i>
                 <input type="text" placeholder="Enter your User id" required id="user_id" name="userid" style="background-color:antiquewhite;">
               </div>
               <div class="input-box">
                 <i class="fas fa-lock"></i>
                 <input type="password" placeholder="Enter your password" required id="password" name="password" style="background-color:antiquewhite;">
               </div>
               <div class ="logged"><input name="remember" type="checkbox" value="Remember Me"> Keep me logged in </div>
               <div class="text"><a href="#" style="color:blue;">Forgot password?</a></div>
               <div class="button input-box">
               <input type="submit" value="Sumbit" name="submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
              </div>
            </form>
        </div>


        <div class="signup-form">
          <div class="title" style="margin-top: -40px;background-color:antiquewhite;"><h2 style="text-decoration: underline;">Sign Up </h2></div>
        
            <form action="login_register1.php" method="POST" >
              <div class="input-boxes">
                
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Enter your name" required id="name" name="user" style="background-color:antiquewhite;">
                </div>
              
                
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Enter your User id" required id="user_id" name="userid" style="background-color:antiquewhite;">
                </div>
                <div class="input-box">
                  <i class="fas fa-address-book"></i>
                  <input type="text" placeholder="Enter your level" required id="level1" name="level1" style="background-color:antiquewhite;">
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input class="password" type="password" placeholder="Set your password " required id="password" name="password" style="background-color:antiquewhite;">
                </div>
                <p style="text-align: left;margin-top:-12px;"><small> password should be greater than 8 character </small></p>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input class="cpassword" type="password" placeholder="Confirm your password" required id="cpassword" name="confirm_password" style="background-color:antiquewhite;">
                </div>
                <div class="button input-box">
                  <input type="submit" value="Sumbit" class="btn" name="submit">
                </div>
                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
              </div>


            </form>
            <script>
              document.querySelector('.btn').onclick = function()
              {
                var password = document.querySelector('.password').value, cpassword = document.querySelector('.cpassword').value;
                if(password == "")
                {
                  alert("Field should not be empty.");
                }
                else if(password != cpassword)
                {
                  alert("password didn't match..Please try again.");
                  return false;
                }
                return true ;
              }


            </script>


      
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
