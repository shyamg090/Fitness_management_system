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
          <img class="img-circle" src="images/profile_user.jpg" class="img-responsive" alt="" style="width: 80px; margin-top: 20px; ">
        </div>

      </li>
		
				<li><a href="logout.php" style="margin-top: 35%;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
	
			</ul>
		</div>
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;"></nav>
		

  <!--==============================header=================================-->

 
  <!--==============================content================================-->
  <center><?php

$con=mysqli_connect("localhost:3306","root","","fitness_management");
         $username=$_SESSION["userid"];

   $query1="select * from users where user_uid='$username'";
   $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $userid=$row ['userid'];
         $query2="select * from payments where userid='$userid'";
        $result2=mysqli_query($con,$query2);

    while($row=mysqli_fetch_array($result2)){
        $amount=$row ['amount'];   
       $query="select * from packages where amount='$amount' ";
     $result=mysqli_query($con,$query);
     while ($row=mysqli_fetch_array($result)){
         $amount=$row ['amount'];
    $packagename=$row['packagename'];
   
      
      if($amount == 10990)
      {
         echo ' <img  src="images/image5.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">3 Months Unlimited Classes</p>
    <p class="font-1" style="color:red;">10990</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}

  if($amount == 15490)
      {
         echo ' <img  src="images/image6.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">10 Months Unlimited Classes</p>
    <p class="font-1" style="color:red;">15490</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
  
  ';
      }


    if($amount == 13590)
      {
         echo ' <img  src="images/image4.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">3 Month Unlimited Classes</p>
    <p class="font-1" style="color:red;">13590</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
  
  ';
      }


      if($amount == 11490)
      {
         echo ' <img  src="images/image3.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">6 Month Select Pack</p>
    <p class="font-1" style="color:red;">11490</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
  
  ';
      }

      if($amount == 17990)
      {
         echo '<img  src="images/image1.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">6 Month Unlimited Classes</p>
    <p class="font-1" style="color:red;">17990</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
  
  ';
      }

      if($amount == 21990)
      {
         echo ' <img  src="images/image2.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">9 Month Unlimited Classes</p>
    <p class="font-1" style="color:red;">21990</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
  
  ';
      }
    
}
}

}


?>
          

           <?php

$con=mysqli_connect("localhost:3306","root","","fitness_management");
         $username=$_SESSION["userid"];

   $query1="select * from bookclass where useruid='$username'";

     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $training_name=$row ['training_name'];
         $trainer_name=$row ['trainer_name'];
         $start_date=$row ['start_date'];

        
      
      if($training_name == 'Boxing')
      {
         echo ' <img  src="images/boxingg.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">Boxing</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}





if($training_name == 'Dance Fitness')
      {
         echo ' <img  src="images/dancee.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">3 Months class</p>
    <p class="font-1" style="color:red;">Dance Fitness</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}


if($training_name == 'Football')
      {
         echo ' <img  src="images/footballl.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">Football</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}


if($training_name == 'Gym Access')
      {
         echo ' <img  src="images/gymaccesss.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">Gym Access</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}


if($training_name == 'Power Yoga')
      {
         echo ' <img  src="images/poweryogaa.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">Power Yoga</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}


if($training_name == 'Prowl')
      {
         echo ' <img  src="images/prowll.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">Prowl</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}


if($training_name == 'S & C')
      {
         echo ' <img  src="images/s&cc.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">S & C</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}


if($training_name == 'Sports Workout')
      {
         echo ' <img  src="images/sportss.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">Sports Workout</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}


if($training_name == 'Yoga')
      {
         echo ' <img  src="images/yogaa.jpeg">
  <div >
    <br>
    
    <p class="font-1" style="color: black;">2 Months class</p>
    <p class="font-1" style="color:red;">Yoga</p>
    <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">

  ';
}




}     ?> 
</center><br>
</div>
</div>
</nav>
  
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













