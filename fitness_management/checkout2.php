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
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
		

  <!--==============================header=================================-->

  
  <!--==============================content================================-->
  <img style="padding-left: 150px" src="images/image1.jpeg">
  <div style="float: right;">
    <br>
    <br><br><br>
  	<p class="font-1" style="color: black;">6 Month Unlimited Classes</p>
  	<p class="font-1" style="color:red;">17990</p>
  	<hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
  
    
    	<form class="form-group" method="POST" action="func.php">
        <div class="row">
                
                  <div class="col-md-4"><label style="color: gray; font-size: 20px;">MRP: </label></div>
                  <div class="col-md-8"><input type="text" name="amount" value="17990" class="form-control"  required/></div><br><br>
                  <div class="col-md-4"><label style="color: gray; font-size: 20px;">Total Payable </label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="amountp" value="17990" required/></div><br><br><br>
                </div>
                
                <input style="margin-right: 30px; margin-top= -20px; background-color: red; font-size: 20px; float: right; max-width: auto;" type="submit" id="inputbtn" name="submit2" value="Proceed to pay" class="btn btn-primary">
                
              </form>
    <br><br>

           
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

