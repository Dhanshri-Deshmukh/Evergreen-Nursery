<?php
include('C:\xampp\htdocs\nursery\admin_area\includes\connect.php');
if(isset($_POST['user_Registration'])){
  $uname=$_POST['username'];
  $email=$_POST['Email'];
  $pass=$_POST['Password'];
  $contact=$_POST['Contact'];
  $addr=$_POST['Address'];
  

  $select_query="select * from `register` where `uname`='$uname'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo"<script>alert('Already Exist')</script>";
  }else{
  
  
  $insert_query="insert into `register` (`uname`,`email`,`pass`,`contact`,`addr`) values ('$uname','$email','$pass','$contact','$addr')";
  $result=mysqli_query($con,$insert_query);
 
  
    echo"<script>alert('Register successfully')</script>";
    header("location:http://localhost/nursery/login.php");
}}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title> User Registration </title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/
     all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     <style>
        body{
            overflow: hidden;
        }
        </style>
</head>
<body>
<div class="container-fuild m-3">
        <h2 class="text-center mb-5">User Registration</h2>

    <div class="row d-flex justify-content-center ">
        <div  class="col-lg-6 ">
        <img src="https://media.istockphoto.com/id/1125570422/photo/florists-women-working-with-flowers-in-a-greenhouse.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=74NBqdnSF1Z5zS8hKjkI9xE6dnnrvdARjy1rcxqnjj8="
         alt="User Registration" class="img-fluid">
   
    </div>
    <div  class="col-lg-6 ">
       <form action="" method="post">
        <div class="form-outline mb-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="usrname" name="username"
            placeholder="Enter your username" required="required"
            class="form-control">
    </div>

 
      
        <div class="form-outline mb-4">
            <label for="Email" class="form-label">Email</label>
            <input type="text" id="Email" name="Email"
            placeholder="Enter your Email" required="required"
            class="form-control">
    </div>

   
      
        <div class="form-outline mb-4">
            <label for="Password" class="form-label">Password</label>
            <input type="text" id="Password" name="Password"
            placeholder="Enter your Password" required="required"
            class="form-control">
    </div>

   
       
        <div class="form-outline mb-4">
            <label for="Contact" class="form-label">Contact</label>
            <input type="text" id="Contact" name="Contact"
            placeholder="Enter your Contact" required="required"
            class="form-control">
    </div>

    
       <form action="" method="post">
        <div class="form-outline mb-4">
            <label for="Address" class="form-label">Address</label>
            <input type="text" id="Address" name="Address"
            placeholder="Enter your Address" required="required"
            class="form-control">
    </div>
        <div>
            <input type="Submit" class="bg-info py-2 px-3 border-0"
            name="user_Registration" value="Register">
           <p class="small fw-bold mt-2 pt-1">Don't you have an account? <a
           href="login.php" class="link-danger">Login</a></p>
    </div>
    
    </form>

    </div>
    </div>


</div>
</body>
</html>