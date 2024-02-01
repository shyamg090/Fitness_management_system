<?php

     

include_once 'dbconnect.php';


?>
<?php include("func.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
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
      
      <a class="navbar-brand" href="adminuser.php"><h2>FITNESS WORLD</h2></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="nav navbar-nav navbar-right">
    
    
        <li><a href="logout.php" style="margin-top: 35%;"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
  
      </ul>
    </div>
  <hr style="border: 1px solid rgba(0,0,0,0.7) !important;color: #000000;">
    <div class="main">

  <!--==============================header=================================-->
 <header >
    
     
    <nav>
      
      <ul class="menu" style=" float:  left;">
        <li  class="current"><a> USER SEARCH</a></li>
        
        
      </ul>
    </nav></nav>
  
 <?php

if(isset($_POST['user_search_submit']))
{
    $contact=$_POST['search'];
     $query="select * from users where userid='$contact'";
    $result=mysqli_query($con,$query);
    
    echo "
    <div class='main'>
    <div class='card-body' style='background-color:#ffffff;color:#000000;''>
         <div class='card-body'>
    <table class='table table-hover'>
        <thead>
     <tr>
            <th>First name</th>
            <th>Last name</th>
         <th>Email id</th>
         <th>Phone</th>
         <th>Gender</th>
        </tr>   
        </thead>
        <tbody>
        </div></div>";
    while ($row=mysqli_fetch_array($result)){
         
         $fname=$row ['user_first'];
    $lname=$row['user_last'];
    $email=$row['user_email'];
    $contact=$row['phone'];
    $gender=$row['gender'];
      echo "<tr>
            
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$gender</td>
        </tr>";
        }
        echo '</tbody></table></div></div></div>';

}

?>

<?php
if(isset($_POST['user_search_submit']))
{
  $contact=$_POST['search'];
 $query1="select * from trainings where training_name in(select training_name from bookclass where useruid in (select user_uid from users where userid='$contact')) ";
    $result1=mysqli_query($con,$query1);
    echo "
    <div class='main'>
    <div class='card-body' style='background-color:#ffffff;color:#000000;''>
         <div class='card-body'>
    <table class='table table-hover'>
        <thead>
     <tr>
            <th>Training Name</th>  
             <th>Training Duration</th>
             <th>Trainer Name</th>
             <th>Training Amount</th>
         
        </tr>   
        </thead>
        <tbody>
        </div></div>";
    while ($row=mysqli_fetch_array($result1)){
          $packagename=$row ['training_name'];
          $packageduration=$row ['duration'];

 $query2="select trainer_name from bookclass where useruid in (select user_uid from users where userid='$contact') ";
    $result2=mysqli_query($con,$query2);
    while ($row=mysqli_fetch_array($result2)){
          $trainername=$row ['trainer_name'];}
        
    
        echo " <tr>
        <td>$packagename</td>
        <td>$packageduration</td>
        <td>$trainername</td>
        <td>Free</td>
        </tr>";
        }
        echo '</tbody></table></div></div></div>';
          }
?>



<?php
if(isset($_POST['user_search_submit']))
{
  $contact=$_POST['search'];
 $query1="select * from packages where amount in (select amount from payments where userid='$contact')   ";
    $result1=mysqli_query($con,$query1);
    echo "
    <div class='main'>
    <div class='card-body' style='background-color:#ffffff;color:#000000;''>
         <div class='card-body'>
    <table class='table table-hover'>
        <thead>
     <tr>
            <th>Package Duration</th>
             <th>Package Amount</th>
         
        </tr>   
        </thead>
        <tbody>
        </div></div>";
    while ($row=mysqli_fetch_array($result1)){
          $packagename=$row ['packagename'];
          $packageamount=$row ['amount'];
    
        echo " <tr>
        <td>$packagename</td>
        <td>$packageamount</td>
        </tr>";
        }
        echo '</tbody></table></div></div></div>';
          }
?>






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

