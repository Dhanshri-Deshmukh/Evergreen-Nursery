<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cintent="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">

     <link rel="stylesheet" href="style.css">
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/
     all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
    
    <img src="https://media.istockphoto.com/id/1045368942/es/vector/resumen-hoja-verde-icono-vector-logos-conjunto-de-iconos-de-ecolog%C3%ADa-icono-de-eco.jpg?s=612x612&w=0&k=20&c=eusLwzP1788auPYzWicDC6V5PrV7uY4l69FuJ-jqius=" height="50px",weight="100px">
    <nav class="navbar navbar-expand-lg">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="" class="nav-link">Welcome Admin</a>.
        </li>
      </ul>
    </nav>
    </div>
   </nav>
   <div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>
       
      <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">

            <div class="px-5">
                <a href="#"><img src="https://png.pngtree.com/png-vector/20191125/ourmid/pngtree-beautiful-admin-roles-line-vector-icon-png-image_2035379.jpg" height="80px",weight="100px"></a>
                <p class="text-light text-center">Admin</p>
            </div>
            <div class="button text-center">
                
                
                <button><a href="index.php?add_category" class="nav-link text-light bg-info my-1">add category</a></button>
                <button><a href="index.php?view_category" class="nav-link text-light bg-info my-1">View Category</a></button>
                <button><a href="index.php?add_Plant" class="nav-link text-light bg-info my-1">Add Plants</a></button>
                <button><a href="index.php?orders" class="nav-link text-light bg-info my-1">All Orders</a></button>
                <button><a href="index.php?manageusers" class="nav-link text-light bg-info my-1">List Users</a></button>
                <button><a href="http://localhost/nursery/home.php/" class="nav-link text-light bg-info my-1">Logout</a></button>
                
        </div>
      </div>


</div>

  <div class="container my-3">
    <?php
    if(isset($_GET['add_category'])){
      include('add_category.php');
    
    }
    
    if(isset($_GET['view_category'])){
      include('view_category.php');
    
    }
    
    if(isset($_GET['add_Plant'])){
      include('add_Plant.php');
    
    }

     
    if(isset($_GET['orders'])){
      include('orders.php');
    
    }
    
    if(isset($_GET['delete'])){
      include('delete.php');
    
    }
    
    if(isset($_GET['manageusers'])){
      include('manageusers.php');
    
    }

    
    ?>
    
    <div class="bg-info p-3 text-center">
           <p>All rights reserved -designed by Evergreen Nursery</p>
         </div>
               
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
     crossorigin="anonymous"></script>
