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
			
			<a class="navbar-brand" href="indexuser.php"><h2>FITNESS WORLD</h2></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
		
				 <li>  

          <div class="profile-userpic">
         <a href="1.php"> <img class="img-circle" src="images/profile_user.jpg" class="img-responsive" alt="" style="width: 80px; margin-top: 20px; "</a>

        </div>

      </li>
    
        <li><a href="logout.php" style="margin-top: 8%;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
  
			</ul>
		</div>
   <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;"></nav>
    

  <!--==============================header=================================-->

  
  <!--==============================content================================-->
  <img style="float: left;" src="images/image5.jpeg">
  <div style="float: right;">
  	<p class="font-1" style="color: black;">3 Months Unlimited Classes</p>
  	<p class="font-1" style="color:red;">10990</p>
  	
    <a href="func.php">
    	<form class="form-group" action="checkout5.php">
                
                <input style="margin-right: 40px; margin-top= -20px; background-color: red; font-size: 20px; float: right; max-width: auto;" type="submit" id="inputbtn" name="submit5" value="Buy Pack" class="btn btn-primary">
                
              </form>
    </a><br><br>

  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
     <p class="font-1" style="color:black; font-size: 35px;">Offer</p>
    <p class="font-2">Get FREE 2 months extension</p>
    
     <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
     <p class="font-1" style="color:black; font-size: 35px;">About this pack</p>
    <p class="font-2">Book unlimited Classes anytime at any mind.fit centre(only) for 3 months Practice Yoga & Meditation sessions with world-class trainers.</p>
    <p class="font-2"> leading psychologists in a state-of-the-art mind.fit centre. </p>
               
  </div>
                

        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <!--<div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">Follow</button>
          <button type="button" class="btn btn-danger btn-sm">Message</button>
        </div>-->
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        
        
        <!-- END MENU -->
      </div>
    </div>
    
  </div>
</div><br><br>

<div class="main" style="float: right;">
<div style="float: left;"><a href="1boxing.php"><img  src="images/boxing.jpeg"><center><p><h3>Boxing</h3></p></center></a>
 </div>
 <div style="float: left; margin-left: 100px;" ><a href="1dance.php"><img  src="images/dance.jpeg"><center><p><h3>Dance Fitness</h3></p></center></a>
 </div>
  <div style="float: left; margin-left: 100px;" ><a href="1football.php"><img  src="images/football.jpeg"><center><p><h3>Football</h3></p></center></a>
 </div>
  <div style="float: left; " ><a href="1gymaccess.php"><img  src="images/gymaccess.jpeg"><center><p><h3>Gym Access</h3></p></center></a>
 </div>
  <div style="float: left; margin-left: 100px;" ><a href="1poweryoga.php"><img  src="images/poweryoga.jpeg"><center><p><h3>Power Yoga</h3></p></center></a>
 </div>
  <div style="float: left; margin-left: 100px;" ><a href="1prowl.php"><img  src="images/prowl.jpeg"><center><p><h3>Prowl</h3></p></center></a>
 </div>
  <div style="float: left; ;" ><a href="1s&c.php"><img  src="images/s&c.jpeg"><center><p><h3>S & C</h3></p></center></a>
 </div>
  <div style="float: left; margin-left: 100px;" ><a href="1sports.php"><img  src="images/sports.jpeg"><center><p><h3>Sports Workout</h3></p></center></a>
 </div>
  <div style="float: left; margin-left: 100px;" ><a href="1yoga.php"><img  src="images/yoga.jpeg"><center><p><h3>Yoga</h3></p></center></a>
 </div>
</div>

<br>

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

