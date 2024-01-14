<?php
include('includes/connect.php');
if(isset($_POST['update_cat'])){

 // $select_query="select * from `category` where `category_title`='$category_title'";
 // $result_select=mysqli_query($con,$select_query);
 // $number=mysqli_num_rows($result_select);
 // if($number>0){
 //  // echo"<script>alert('This category is present inside the database')</script>";
 // }else{
  

  $update_query="update table `category` set `category_id`='5'";
  $result=mysqli_query($con,$update_query);
 
  
    echo"<script>alert('Category has been updated successfully')</script>";
 
}
?>


<h2 class="text-center">  Update Category </h2>
<form action="" method="post" class="mb-2">
   <div class="input-group w=90 mb-2" >
  <span class="input-group-text bg-info" id="basic-addon1"><i
   class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="update category" aria-label="Username" 
  aria-describedby="basic-addon1">
</div>
<div class="input-group w=10 mb-2" >

<input type="submit" class="bg-info border-0 p-2 my-3" name="update_cat"  Value="update category" >
</div>
</from>

