
<?php
include('includes/connect.php');
if(isset($_POST['add_plant'])){
  $pname=$_POST['plant_name'];
  $pdesc=$_POST['Description'];
  $category_title=$_POST['plant_category'];
  $price=$_POST['Price'];
  




  $select_query="select * from `plants` where `pname`='$pname'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo"<script>alert('This Plant is present inside the database')</script>";
  }else{
  
  
  $insert_query="insert into `plants` (`pname`,`pdesc`,`category_title`,`price`) values ('$pname','$pdesc','$category_title','$price')";
  $result=mysqli_query($con,$insert_query);
 
  
    echo"<script>alert('Plants has been inserted successfully')</script>";
 
}}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cintent="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Plants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/
     all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Add Plants</h1>
 

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="plant_name" class="form-label">Plant name</label>
                <input type="text" name="plant_name"
                 id="plant_name" class="form-control" 
                 placeholder="Enter Plant Name" autocomplete="off"
                 required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Description" class="form-label">Description</label>
                <input type="text" name="Description"
                 id="Description" class="form-control" 
                 placeholder="Enter Plant Description" autocomplete="off"
                 required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <select name="plant_category" id="" 
                class="plant_category">
                <option value="">Select a category</option>
                <option value="">Show Plants</option>
                <option value="">Flower Plants</option>
                <option value="">Fruit Plants</option>
                <option value="">Medicinal Plants</option>
                

                </select>



              </div>

              <div class="form-outline mb-4 w-50 m-auto">
                <label for="Price" class="form-label">Price</label>
                <input type="text" name="Price"
                 id="Price" class="form-control" 
                 placeholder="Enter Plant Price" autocomplete="off"
                 required="required">
            </div>

           
            

              
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="Submit" name="add_plant" class="btn btn-info mb-3 px-3" value="Add Plants">
            </div>

            </form>
    </div>
        

</body>
</html>