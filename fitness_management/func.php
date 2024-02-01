<?php
session_start();


$con=mysqli_connect("localhost:3306","root","","fitness_management");
if(isset($_POST['submit1']))
{   
    $amount=$_POST['amount'];
    $username=$_SESSION["userid"];
   $query1="select * from users where user_name='$username'";
     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $userid=$row ['userid'];
         $amount=$_POST['amount'];
         $query2="select * from payments where amount='$amount' and userid='$userid'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
       $query="insert into payments(amount,userid)values('$amount','$userid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('payment sucessfull.')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
    }
    else
    {
        echo "<script>alert('already Taken')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
}
}



if(isset($_POST['submit2']))
{   
    $amount=$_POST['amount'];
    $username=$_SESSION["userid"];
   $query1="select * from users where user_uid='$username'";
     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $userid=$row ['userid'];
         $amount=$_POST['amount'];
         $query2="select * from payments where amount='$amount' and userid='$userid'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
       $query="insert into payments(amount,userid)values('$amount','$userid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('payment sucessfull.')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
    }
    else
    {
        echo "<script>alert('already Taken')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
}
}


if(isset($_POST['submit3']))
{   
    $amount=$_POST['amount'];
    $username=$_SESSION["userid"];
   $query1="select * from users where user_uid='$username'";
     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $userid=$row ['userid'];
         $amount=$_POST['amount'];
         $query2="select * from payments where amount='$amount' and userid='$userid'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
       $query="insert into payments(amount,userid)values('$amount','$userid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('payment sucessfull.')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
    }
    else
    {
        echo "<script>alert('already Taken')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
}
}



if(isset($_POST['submit4']))
{   
    $amount=$_POST['amount'];
    $username=$_SESSION["userid"];
   $query1="select * from users where user_uid='$username'";
     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $userid=$row ['userid'];
         $amount=$_POST['amount'];
         $query2="select * from payments where amount='$amount' and userid='$userid'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
       $query="insert into payments(amount,userid)values('$amount','$userid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('payment sucessfull.')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
    }
    else
    {
        echo "<script>alert('already Taken')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
}
}



if(isset($_POST['submit5']))
{   
    $amount=$_POST['amount'];
    $username=$_SESSION["userid"];
   $query1="select * from users where user_uid='$username'";
     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $userid=$row ['userid'];
         $amount=$_POST['amount'];
         $query2="select * from payments where amount='$amount' and userid='$userid'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
       $query="insert into payments(amount,userid)values('$amount','$userid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('payment sucessfull.')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
    }
    else
    {
        echo "<script>alert('already Taken')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
}
}



if(isset($_POST['submit6']))
{   
    $amount=$_POST['amount'];
    $username=$_SESSION["userid"];
   $query1="select * from users where user_uid='$username'";
     $result1=mysqli_query($con,$query1);
     while ($row=mysqli_fetch_array($result1)){
         $userid=$row ['userid'];
         $amount=$_POST['amount'];
         $query2="select * from payments where amount='$amount' and userid='$userid'";
    $result2=mysqli_query($con,$query2);
    if(mysqli_num_rows($result2)!=1){
            
       $query="insert into payments(amount,userid)values('$amount','$userid')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('payment sucessfull.')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
    }
    else
    {
        echo "<script>alert('already Taken')</script>";
        echo "<script>window.open('indexuser.php','_self')</script>";
    }
}
}



   

if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }



    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
        if(isset($_POST['pay_submit']))
        {
            $Payment_id=$_POST['Payment_id'];
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['customer_id'];
            $payment_type=$_POST['payment_type'];
            $query="insert into Payment(Payment_id,Amount,customer_id,payment_type)values('$Payment_id','$Amount','$customer_id','$payment_type')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
            } 


if(isset($_POST['send']))
        {
            $Name=$_POST['name'];
            $Email=$_POST['email'];
            $Phone=$_POST['phone'];
            $Services=$_POST['services'];
            $Message=$_POST['message'];
            $query="insert into Payments(name,email,phone,services,message)values('$Name','$Email','$Phone','$Services','$Message')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('index1.php','_self')</script>";
            }
            } 

 function get_user_details(){
  
    global $con;
    
    $query="select * from users";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
          $userid=$row ['userid'];
         $fname=$row ['user_first'];
    $lname=$row['user_last'];
    $email=$row['user_email'];
    $contact=$row['phone'];
    $gender=$row['gender'];
      echo "<tr>
            <td>$userid</td>
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$gender</td>
        </tr>";
    }
}



 function get_trainer_details(){
  
    global $con,$aid;
    
    $query1="select * from trainer";
    $result1=mysqli_query($con,$query1);
    while ($row=mysqli_fetch_array($result1)){

         
    
   
         $id=$row ['trainerid'];
         $fname=$row ['name'];
     $email=$row['email'];
    $contact=$row['phone'];
    $gender=$row['gender'];
    $_SESSION["id"]=$id;
      echo "<tr>
            <td>$id</td>
          <td>$fname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$gender</td>
          <td> <a href='delete.php'><button type='button'>Remove</button></a></td>
        </tr>";
    }
}
function get_package(){

    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>
            
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
            </tr>";

    }
}




function get_name(){

    if(isset($_POST['submit'])){
    $username=$_POST['uid'];
    $password=$_POST['pwd'];
    $userfirst=$row ['user_first'];
    $userlast=$row['user_last'];
        
    $query="select * from users where user_uid='$username' and user_pwd='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    { 

        echo"<tr> <td> $userfirst</td> </tr></p>";
        
    
    }
   
    }

    
   

    }




 





?>


