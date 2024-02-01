<?php
session_start();


$con=mysqli_connect("localhost:3306","root","","fitness_management");
if(isset($_POST['boxing']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Booking Sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['dance']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['football']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['gymaccess']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['poweryoga']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['prowl']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['s&c']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['sports']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}



if(isset($_POST['yoga']))
{   $useruid=$_SESSION["userid"];
    $name=$_SESSION["training_name"];
    $time=$_SESSION["training_duriation"];
   $date=$_POST['date'];
   $trainer_name=$_POST['docapp'];


$tid=$_SESSION["trainingid"];
         $query2="select * from bookclass where useruid='$useruid' and training_name='$name'";    
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
            
       $query="insert into bookclass(training_name,trainer_name,start_date,trainingid,useruid)values('$name','$trainer_name','$date','$tid','$useruid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('booked sucessfull.')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }
  }
    
    else
    {
        echo "<script>alert('class taken')</script>";
        echo "<script>window.open('trainings.php','_self')</script>";
    }

}







?>