<?php

         session_start();

include_once 'dbconnect.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >

<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /> -->
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css"> -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Asap_400.font.js"></script>
<script src="js/Coolvetica_400.font.js"></script>
<script src="js/Kozuka_M_500.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<script>
$(window).load(function(){
  $('.slider')._TMS({
  prevBu:'.prev',
  nextBu:'.next',
  pauseOnHover:true,
  pagNums:false,
  duration:800,
  easing:'easeOutQuad',
  preset:'Fade',
  slideshow:7000,
  pagination:'.pagination',
  waitBannerAnimation:false,
  banners:'fade'
  })
})  
</script>
</head>
<body>
<div class="container-fluid"> 
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			
			<a class="navbar-brand" href="traineruser.php"><h2>FITNESS WORLD</h2></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
        <li>  

          <div class="profile-userpic">
          <img class="img-circle" src="images/profile_user.jpg" class="img-responsive" alt="" style="width: 80px; margin-top: 20px; margin-right: 20px; ">
        </div>

      </li>
		      <li><a href="b.php" style="margin-top: 43%;"><span class="glyphicon glyphicon-shopping-cart"></span> Skills</a></li>
  
				<li><a href="logout.php" style="margin-top: 35%;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
	
			</ul>
		</div>
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
		<div class="main">

  <!--==============================header=================================-->

 
  <!--==============================content================================-->
 
        <!-- SIDEBAR USERPIC -->
        
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
          
          </div>
          <div class="profile-userpic">
          <img class="img-circle" src="images/profile_user.jpg" class="img-responsive" alt="" style="width: 200px;"><br><br>
        
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <!--<div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">Follow</button>
          <button type="button" class="btn btn-danger btn-sm">Message</button>
        </div>-->
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
      </div>
      <div >
        
        <h1 style="float: left;"><b>PROFILE</b></h1>
        <br><br><br><br>
        <p style="float: left;">NAME</p><br>
         <?php
     $con=mysqli_connect("localhost:3307","root","","loginsystem");

      $id=$_SESSION["trainerid"];
       $query1="select * from trainer where traineruid='$id'";
       $result1=mysqli_query($con,$query1);
        while ($row=mysqli_fetch_array($result1)){
         $name=$row ['name'];
         
         echo "<h3><b style='float:left;'>$name </b></h3>
    ";
       }
?>
<br>
<hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #00000;">
<br>
<br>

 <p style="float: left;">GENDER</p><br>
         <?php
     $con=mysqli_connect("localhost:3307","root","","loginsystem");

      $id=$_SESSION["trainerid"];
       $query1="select * from trainer where traineruid='$id'";
       $result1=mysqli_query($con,$query1);
        while ($row=mysqli_fetch_array($result1)){
         $gender=$row ['gender'];
        
         echo "<h3><b style='float:left;'>$gender</b></h3>
    ";
       }
?>
<br>
<hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #00000;">
<br>
<br>

 <p style="float: left;">EMAIL</p><br>
         <?php
     $con=mysqli_connect("localhost:3307","root","","loginsystem");

     $id=$_SESSION["trainerid"];
       $query1="select * from trainer where traineruid='$id'";
       $result1=mysqli_query($con,$query1);
        while ($row=mysqli_fetch_array($result1)){
         $email=$row ['email'];
       
         echo "<h3><b style='float:left;'>$email</b></h3>
    ";
       }
?>
<br>
<hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #00000;">
<br>
<br>

 <p style="float: left;">PHONE</p><br>
         <?php
     $con=mysqli_connect("localhost:3307","root","","loginsystem");

     $id=$_SESSION["trainerid"];
       $query1="select * from trainer where traineruid='$id'";
       $result1=mysqli_query($con,$query1);
        while ($row=mysqli_fetch_array($result1)){
         $phone=$row ['phone'];
         echo "<h3><b style='float:left;'>$phone</b></h3>
    ";
       }
?>
<br>
<hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #00000;">
<br>
<br>
</div>
    
     
        
          
          </div>   
      <br><br>
  
  <!--==============================footer=================================-->
  <footer>
    <p>© 2023 Fitness World</p>
    <p>Website by <a target="_blank" href="#" class="link">SHYAM & THANUSH</a></p>
  </footer>
</div>
	</div>

</div>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

