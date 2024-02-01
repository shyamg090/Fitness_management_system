<?php

         session_start();

include_once 'dbconnect.php';

$con=mysqli_connect("localhost:3306","root","","fitness_management");

$query = "SELECT * FROM trainer 
 where trainerid in(select trainerid from trainer_skills where training_name='Boxing') ";
$result1 = mysqli_query($con, $query);




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
          <img class="img-circle" src="images/profile_user.jpg" class="img-responsive" alt="" style="width: 80px; margin-top: 20px; margin-right: 20px; ">
        </div>

      </li>
		      <li><a href="a.php" style="margin-top: 35%;"><span class="glyphicon glyphicon-shopping-cart"></span>Orders </a></li>
  
				<li><a href="logout.php" style="margin-top: 35%;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
	
			</ul>
		</div>
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
		

  <!--==============================header=================================-->

 
  <!--==============================content================================-->
 <br><br><img style="padding-left: 150px" src="images/boxingg.jpeg">
  <div style="float: right;">
    <p class="font-1" style="color: black;">2 Months Class</p><br><br>
    <?php
    $_SESSION["trainingid"]=1;

    $_SESSION["training_name"]='Boxing';
    $_SESSION["training_duriation"]='2 Months';
    ?>
      <form class="form-group" method="POST" action="func1.php">
         <label class="font-4" style="font-size: 20px;">Trainer </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>


                 <div class="font-10" style="font-size: 20px;"><label >Pick Date </label></div>
        <input type="date" name="date" id="sdate" value="<?php echo date('Y-m-d');?>" class="btn btn-warning btn-lg" required/>
      
                <input style="margin-right: 30px; margin-top= -20px; background-color: red; font-size: 20px; float: center;  max-width: auto;" type="submit" id="inputbtn" name="boxing" value="Book Class" class="btn btn-primary btn-lg">
                
              </form>
    </a><br>

  
     <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
     <p class="font-1" style="color:black; font-size: 35px;">About this pack</p>
    <p class="font-2">Book unlimited Classes anytime at any centre in your city for 1 months.</p>
    <p class="font-2">Every Cult centre offers a plethora of group workout formats designed and run by highly qualified fitness experts.  </p>
    <p class="font-2">These workouts are great for newbies and fitness veterans alike, and are guaranteed to show results</p>
               
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

