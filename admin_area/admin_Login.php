
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title> Admin Login </title>

    
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
        <h2 class="text-center mb-5">Admin Login</h2>

    <div class="row d-flex justify-content-center ">
        <div  class="col-lg-6 ">
        <img src="https://media.istockphoto.com/id/1125570422/photo/florists-women-working-with-flowers-in-a-greenhouse.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=74NBqdnSF1Z5zS8hKjkI9xE6dnnrvdARjy1rcxqnjj8="     alt="User Registration" class="img-fluid">
   
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
            <label for="Password" class="form-label">Password</label>
            <input type="text" id="Password" name="Password"
            placeholder="Enter your Password" required="required"
            class="form-control">
    </div>
    
    


    
        <div>
            <input type="Submit" class="bg-info py-2 px-3 border-0"
            name="user_Login" value="Login">
          
    </div>
    
    </form>

    </div>
    </div>


</div>
</body>
</html>
<?php
include('includes/connect.php');


 /* $select_query="select * from `category` where `category_title`='$category_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);*/
  
  
    if(isset($_POST['user_Login']))
    {
	

      $aname=$_POST['username'];
      $pass=($_POST['Password']);
      
     if($aname=='admin' and $pass=='pass123')
	{

  	  echo"<script>alert('Login successfully')</script>";
        header("location:http://localhost/nursery/admin_area/index.php");
	}
    else
    {
            print"<script>alert('invalid username or password')</script>";

    }
   
}
?>