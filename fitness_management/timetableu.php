<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Club | Timetable</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/Asap_400.font.js"></script>
<script src="js/Coolvetica_400.font.js"></script>
<script src="js/Kozuka_M_500.font.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
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

<div class="main">
  
  <!--==============================header=================================-->
  <header>
    
    <nav>
      <ul class="menu">
        <li><a href="indexuser.php">Home</a></li>
        <li><a href="trainings.php">Trainings</a></li>
        <li class="current"><a href="timetableu.php">Timetable</a></li>
        <li><a href="nutritionu.php">Nutrition</a></li>
    
        <li><a href="videos.php">Videos</a></li>
        <li><a href="contactsu.php">Contact Us</a></li>
      </ul>
    </nav>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-1">
              <h2 class="p3"><span class="color-1">Our</span> timetable</h2>
              <div class="wrap box-2 border-1">
                <div>
                  <p><strong>Monday</strong></p>
                  <p class="color-1">06:15 - 07:15</p>
                  <span><b>Activity :</b></span>
                  <span>Spin (Spin studio)</span>
                </div>
                <div>
                  <p><strong>Monday</strong></p>
                  <p class="color-1">07:15 - 07:30</p>
                  <span><b>Activity :</b></span>
                  <span>AB BLAST (Studio 1)</span>
                </div>
                <div class="last">
             
                  <p><strong>Monday</strong></p>
                  <p class="color-1">09:30 - 10:30</p>
                  <span><b>Activity :</b></span>
                  <span>Aqua Zumba</span>
                
                </div>
              </div>
              <div class="wrap box-2 border-1">
                <div>
                  <p><strong>Monday</strong></p>
                  <p class="color-1">10:30 - 11:15</p>
                  <span><b>Activity :</b></span>
                  <span>Boot Camp (Functional area)</span>
                </div>
                <div>
                  <p><strong>Monday</strong></p>
                  <p class="color-1">11:30 - 12:15</p>
                  <span><b>Activity :</b></span>
                  <span>'Legs with Lauren' (Functional area)</span>
                </div>
                <div class="last">
                
                  <p><strong>Monday</strong></p>
                  <p class="color-1">17:00 - 17:40</p>
                  <span><b>Activity :</b></span>
                  <span>Body Pump</span>
              
                </div>
              </div>
              <div class="wrap box-2">
                <div>
                  <p><strong>Monday</strong></p>
                  <p class="color-1">17:00 - 18:00</p>
                  <span><b>Activity :</b></span>
                  <span>Legs Bums and Tums (Studio 1)</span>
                </div>
               <div>
                  <p><strong>Monday</strong></p>
                  <p class="color-1">18:00 - 19:00</p>
                  <span><b>Activity :</b></span>
                  <span>Circuits (Functional area)</span>
                </div>
                <div class="last">
                 
                  <p><strong>Monday</strong></p>
                  <p class="color-1">18:15 - 19:15</p>
                  <span><b>Activity :</b></span>
                  <span>Boogie Bounce (Boogie bounce)</span>
               
                </div>
              </div>
            </div>
            <div class="col-2">
              <h2 class="p3"><span class="color-1">Events</span> Schedule</h2>
              <p class="p2">
              
              <ul class="list-2">
                <li><b>Corrib Karate: </b>
                Tuesday, 7:30 pm - 9:00 pm</li>
                <li><b> Heated Yoga </b>
               Wednesday, 7:30 pm - 9:00 pm</li>
                <li><b>Heated Yoga </b>
                Wednesday, 10:00 am - 10:45 am</li>
                <li><b>Shredded HIIT </b>
                Wednesday, 5:30 pm - 6:00 pm</li>
                <li><b>Core Fusion </b>
                Thursday, 5:30 pm - 6:15 pm</li>
              </ul>
              </div>
              <!--<a href="#" class="button top-5">Read more</a>  -->
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <!--==============================footer=================================-->
 <footer>
    <p>© 2023 Fitness World</p>
    <p>Website by <a target="_blank" href="#" class="link">SHYAM & THANUSH</a></p>
  </footer>
</div>
<script>Cufon.now();</script>
</body>
</html>
