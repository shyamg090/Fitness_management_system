<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="background:url('images/8.jpg'); background-size: cover;">
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="images/7.jpg" class="card-img-top">
            <div class="card-body">
              <center>
                
              <h3>USER LOGIN</h3><br>
              <form class="form-group" method="POST" >
                <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8"><input type="text" name="uid" class="form-control" placeholder="Enter username" required/></div><br><br>
                  
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="pwd" placeholder="Enter password" required/></div><br><br><br>
                </div>

                <input style="margin-right: 30px; margin-top= -20px; " type="submit" id="inputbtn" name="submit" value="Login" class="btn btn-primary">
                
              </form>
              <form action="signup.php">
                <input style="margin-right: 30px; margin-top= -20px; " href="signup.php"  type="submit" id="inputbtn" name="signup_submit" value="Signup" class="btn btn-primary"></form>
                                 
           <?php
$con=mysqli_connect("localhost:3306","root","","fitness_management");
if(isset($_POST['submit'])){


  $username=$_POST['uid'];
  $password=$_POST['pwd'];
  $_SESSION["userid"]=$username;
    $_SESSION["password"]=$password;
    $query="select * from users where user_uid='$username' and user_pwd='$password'";
  $result=mysqli_query($con,$query);

if(mysqli_num_rows($result) > 0) {
      
   if (isset($_SESSION["userid"])) {
    
       header("location: indexuser.php");
            exit();
     } }
     else {
      echo "<script>alert('username/password incorrect')</script>";
        echo "<script>window.open('index1.php','_self')</script>";
     
     }
            
        }
           
    
?>
          


              
            
              
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
?>