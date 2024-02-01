<?php

session_start();
$con=mysqli_connect("localhost:3306","root","","fitness_management");
$id=$_SESSION["traineruid"];
$trainingid=3;
$name='Football';
   $query1="select * from trainings where training_name='$name' and trainingid='$trainingid'";
     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
           $trainingidd=$row ['trainingid'];
           $training_name=$row ['training_name'];
           
         
         $query2="select * from trainer_skills where trainingid='$trainingidd' and trainerid='$id'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
       $query="insert into trainer_skills(trainerid, training_name,trainingid)values('$id','$training_name','$trainingidd')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('skill added.')</script>";
        echo "<script>window.open('traineruser.php','_self')</script>";
    }
    }
    else
    {
        echo "<script>alert('already Taken')</script>";
        echo "<script>window.open('traineruser.php','_self')</script>";
    }
}