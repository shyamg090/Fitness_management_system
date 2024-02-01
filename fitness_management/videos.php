<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fitness World</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/cufon-yui.js"></script>
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
<body style="background-color:#F8F8F8 !important;">
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
		
				<li><a href="logout.php" style="margin-top: 24%;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
					
			</ul>
			</div>

		
	<hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000; background-color:#F8F8F8 !important;"></nav  >
		<div class="main">

  <!--==============================header=================================-->

  <header >
    
    
    <nav>
      <ul class="menu">
        <li ><a href="indexuser.php">Home</a></li>
        <li><a href="trainings.php">Trainings</a></li>
        <li><a href="timetableu.php">Timetable</a></li>
        <li><a href="nutritionu.php">Nutrition</a></li>
      
        <li class="current"><a href="videos.php">Videos</a></li>
       <li><a href="contactsu.php">Contact Us</a></li>
      </ul>
    
    </nav>
  </header>

  
  	
  	<div class="row">
  	

  	<div class="col-md-4 "><iframe src="https://www.youtube.com/embed/89e518dl4I8" allowfullscreen="true"></iframe><p class="font-2"> CHEST WORKOUT</p></div>
    
  	<div class="col-md-4 "><iframe src="https://www.youtube.com/embed/gozU3CUIizs" allowfullscreen="true"></iframe><p class="font-2"> BICEPS WORKOUT</p></center></div>
  	<div class="col-md-4 "><iframe src="https://www.youtube.com/embed/jv31A4Ab4nA" allowfullscreen="true"></iframe><p class="font-2"> SHOULDER WORKOUT</p></center></div>
  

  	</div>
  	<div class="row">
  	

  	<div class="col-md-4 "><iframe src="https://www.youtube.com/embed/tMyFe-IL7Ks" allowfullscreen="true"></iframe><p class="font-2"> TRICEPS WORKOUT</p></center></div>
  	<div class="col-md-4 "><iframe src="https://www.youtube.com/embed/eE7dzM0iexc" allowfullscreen="true"></iframe><p class="font-2"> BACK WORKOUT</p></center></div>
  	<div class="col-md-4 "><iframe src="https://www.youtube.com/embed/qk97w6ZmV90" allowfullscreen="true"></iframe><p class="font-2"> ABS WORKOUT</p></center></div>
  	


  	</div>

  	

  	
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


