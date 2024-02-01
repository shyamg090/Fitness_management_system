<?php
// page title
$page_title='Our training';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php
    //use default page title if one won't provived..
    if(isset($page_title)){
      echo $page_title;
    }
    else{
      echo 'Build your body';
    }
    ?>
  </title>
  <!-- adding bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
  <!-- adding fontawesome CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- custom styles for this template -->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/other.css" type="text/css">
  <!-- adding icon to this templete -->
  <link rel="shortcut icon" type="image/png" href="../images1/logo.ico">


</head>
<body>
  <h2 id="training-head">LET US BE YOUR GUIDE</h2>
  <!-- six types of trainings were added here -->
  <div class="container">
    <div class="row">
      <!-- training for flexible strength -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" id="training-c-title">FLEXIBLE STRENGTH</h4>
            <img src="images1/training01.jpg" id="training-img" alt="Here is trainig image">
          </div>

        </div>
      </div>
      <!-- training for 60-min session -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" id="training-c-title">60-MIN SESSION</h4>
            <img src="images1/training02.jpg" id="training-img" alt="Here is trainig image">
          </div>

        </div>
      </div>
      <!-- code traning was added here -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" id="training-c-title">CORE TRAINING</h4>
            <img src="images1/training03.jpg" id="training-img" alt="Here is trainig image">
          </div>

        </div>
        <br><br>
      </div>
      <!-- for weight gaining training -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" id="training-c-title">WEIGHT LIFTING</h4>
            <img src="images1/training04.jpg" id="training-img" alt="Here is trainig image">
          </div>

        </div>
      </div>
      <!-- cardio training -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" id="training-c-title">CARDIO POWER HOUSE</h4>
            <img src="images1/training05.jpg" id="training-img" alt="Here is trainig image">
          </div>

        </div>
      </div>
      <!-- cross fit training was added -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" id="training-c-title">CROSS FIT</h4>
            <img src="images1/training06.jpg" id="training-img" alt="Here is trainig image">
          </div>

        </div>
      </div>

    </div>
  </div>

</body>
<!-- adding bootstrap JS CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

<script type="text/javascript" src="js/js.js"></script>
</html>
<?php
include('includes1/footer1.html');
 ?>
