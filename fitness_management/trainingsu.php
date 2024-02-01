<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Club | Trainings</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
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
        <li  class="current"><a href="trainingsu.php">Trainings</a></li>
        <li><a href="timetableu.php">Timetable</a></li>
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
             <div class="col-md-12 col-lg-12 col-sm-12">
              <h2 class="p3"><span class="color-1">Our</span> Trainers</h2>
              <p class="p2"><strong>Our nationally certified trainers offer top notch service</strong></p>
              <p>Training Team is a highly qualified and motivational group of individuals that aim to bring you the best experience of personal training any facility can offer. Our trainers are nationally certified through the National Academy of Sports Medicine, educated as Corrective Exercise Specialists, and have specialized training in several other areas of health and fitness.</p>
              <div class="wrap box-1 top-4"> <img src="images/page2-img1.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                  <p class="p2"><strong>Trainers Are For you always</strong></p>
                  <p>The trainers at Fitness world are invested in holding you accountable. They want to motivate you and help push you past your fitness plateaus. Learn more about our staff by following The Burn Fitness Training Team on Facebook, Twitter, Instagram, and check out our Blog here.</p>
                </div>
              </div>
              <div class="wrap box-1 top-4"> <img src="images/page2-img2.jpg" alt="" class="img-border img-indent ">
                <div class="extra-wrap">
                  <p class="p2"><strong>Fitness Equipments</strong></p>
                  <p>We specialise in top-of-the-line home and commercial fitness equipment with cutting-edge technologies.
At Fitness World, you will find a range of Treadmills, Ellipticals,dumbells, Bikes and Gym Stations of leading brands. All of our fitness accessories and equipment are competitively priced. Our best price guarantee ensures that you will never have to pay much. Browse through our exercise machines and have them installed at your home, gym, club or office for maximum fitness results.</p>
        </div>
        </div>
<div>  <center><strong><h2>TIPS FOR HEALTH</h2></strong></center></div>
                <div class="wrap box-1 top-4"> <img src="images/12.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                <p class="p2"><strong>TIPS : AVOID  EXECESSIVE CARDIO</strong></p>
<p>It is essential to exercise regularly which means that there should be a proper balance between weight training and functional training. Ensure whenever you are working out that each set doesn’t last more than 45-60 seconds. Excessive cardio is a complete no, so take care while you are chalking out your routine.
</p></div></div>

                <div class="wrap box-1 top-4"> <img src="images/13.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                <p class="p2"><strong>TIPS : HYDRATION</strong></p>
              <p>Consuming at least 6 liters of water is a must as it helps in washing away the toxins. Drink ample of water at regular intervals to keep the body hydrated. A little tip from us-always carry a bottle of water with you wherever you go! </p>
                </div>
              </div>
           
                
            
            </div>
          </div>
        </div>
      </div>
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
