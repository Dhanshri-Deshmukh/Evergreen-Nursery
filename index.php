<?php
include('admin_area/includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cintent="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evergreen Nursery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
     crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/
     all.min.css"integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
    
    <img src="https://media.istockphoto.com/id/1045368942/es/vector/resumen-hoja-verde-icono-vector-logos-conjunto-de-iconos-de-ecolog%C3%ADa-icono-de-eco.jpg?s=612x612&w=0&k=20&c=eusLwzP1788auPYzWicDC6V5PrV7uY4l69FuJ-jqius=" height="50px",weight="100px">
      <button class="navbar-toggler" type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="http://localhost/nursery/contact.php" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/nursery/about.php/">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/nursery/Register.php">Register</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/nursery/contact.php/">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me=auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/nursery/Login.php/">Login</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="http://localhost/nursery/admin_area/admin_Login.php">Admin</a>
        </li>
  
       
       
</ul>
<button><a href="http://localhost/nursery/udashboard.php/" class="nav-link">UDashboard</a></button>
</nav>

<div class="bg-light">
  <h3 class="text-center">Evergreen Nursery</h3>
  <p class="text-center">Save Tree Save Environment</p>
</div>

<div class="row">
  <div class="col-md-10">

      
      <div class="row">
        
        <div class="col-md-4">
        <div class="card">
  <img src="https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-g-plants-rose-dark-pink-plant-in-grower-round-black-pot-922015.jpg?v=1681378404" height="200px",weight="120px" alt=""">
  <div class="card-body">
    <h5 class="card-title">Rose</h5>
    <h5 class="card-title">Price:100</h5>
    <p class="card-text">Roses are best known as ornamental plants grown for their flowers in the garden .</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
    
    
  </div>
</div>

        </div>
        <div class="col-md-4">
        <div class="card">
  <img src="https://m.media-amazon.com/images/I/41zNXXXlGzL.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Aloe Vera</h5>
    <h5 class="card-title">Price:40</h5>
    <p class="card-text">Aloe is a cactus-like plant that grows in hot, dry climates. 
</p>
<a class="btn btn-primary" href="http://localhost/nursery/order.php?p=40"> Add to cart</a>

  </div>
</div>
        </div>
        <div class="col-md-4">
        <div class="card">
  <img src="https://shrigramorganics.com/wp-content/uploads/2020/06/sapota-chikoo-plant-1-greencuration-original-imafhpkawzzcyhhu.jpeg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chikoo</h5>
    <h5 class="card-title">Price:100</h5>
    <p class="card-text">chikoo leaves have a length of 0.8 to 3 cm.it is the fruit of an evergreen tree.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
   
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://img3.exportersindia.com/product_images/bc-full/2018/10/5796208/mosambi-plant-1538392784-4302444.jpeg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lemon</h5>
    <h5 class="card-title">Price:90</h5>
    <p class="card-text">Lemon is a plant. The fruit, juice, and peel are used to make medicine. </p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
    
  </div>
</div>
       </div>
       
       <div class="col-md-4">
        <div class="card">
  <img src="https://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-beautiful-flowers-of-the-season_30d90171-633b-403a-b2ba-d86c040d5587.jpg?v=1634216665" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Show Plants</h5>
    <p class="card-text">They are used to decorate houses.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
    
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://5.imimg.com/data5/OY/UZ/MA/ANDROID-24223783/product-jpeg-500x500.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mango</h5>
    <h5 class="card-title">Price:200</h5>
    <p class="card-text">The mango tree produces the delicious mango fruit, while absorbing carbon dioxide, producing oxygen, and supporting the livelihoods of thousands of workers.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://5.imimg.com/data5/SELLER/Default/2022/11/RR/VU/XE/164273021/money-plant-500x500.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Money plant</h5>
    <h5 class="card-title">Price:30</h5>
    <p class="card-text">Money plants add value to a healthy lifestyle by removing airborne pollutants from indoor air.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://5.imimg.com/data5/SELLER/Default/2021/1/GH/XZ/UU/25238491/mogra-plant-500x500.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mogra</h5>
    <h5 class="card-title">Price:40</h5>
    <p class="card-text">It is a small shrub or vine with fragrant white or yellow flowers that bloom in the summer and fall.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://5.imimg.com/data5/SZ/EW/HK/ANDROID-59019362/product-jpeg.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Coconut</h5>
    <h5 class="card-title">Price:250</h5>
    <p class="card-text">he fronds are used to make roofs, fences and wickerwork utility items: baskets, hats, partition walls, etc.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://m.media-amazon.com/images/I/61C5ok-ITHL._AC_UF1000,1000_QL80_.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hibiscus</h5>
    <h5 class="card-title">Price:30</h5>
    <p class="card-text">The Hibiscus flowers are large and showy, and the genus grows into herbs, shrubs or small trees.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://img1.wsimg.com/isteam/ip/a77c2b0c-88eb-4126-b546-f2238a606676/ols/mint-0002.jpg/:/rs=w:1200,h:1200" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tulsi</h5>
    <h5 class="card-title">Price:20</h5>
    <p class="card-text">The plant is widely used in Ayurvedic and folk medicine, often as an herbal tea for a variety of ailments, and is considered sacred in Hinduism.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://images.meesho.com/images/products/170384219/3h1tz_512.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Champa</h5>
    <h5 class="card-title">Price:50</h5>
    <p class="card-text">It is a deciduous plant with thin bark. The stem is sausage-like with a grey-green colour. As it is deciduous, The leaves fall and only the stem remains during the winter season.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       <div class="col-md-4">
        <div class="card">
  <img src="https://www.setgreen.com/uploaded/products/eb-image-1563201687.jpg" height="200px",weight="120px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Neem</h5>
    <h5 class="card-title">Price:25</h5>
    <p class="card-text">Neem trees are attractive broad-leaved evergreens that can grow up to 30 m tall and 2.5 m in girth.</p>
    <a class="btn btn-primary" href="http://localhost/nursery/order.php?p=100"> Add to cart</a>
  </div>
</div>
       </div>
       
      </div>

    
    


  </div>
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
        <a href="#" class="nav-link text-light"><h4></h4></a>
       
       </li>
       <?php
       $select_category="Select * from `category`";
       $result_category=mysqli_query($con,$select_category);
#$row_data=mysqli_fetch_assoc($result_category);
#echo $row_data['category_title'];
       while($row_data=mysqli_fetch_assoc($result_category)){
        $category_title=$row_data['category_title'];
        $category_id=$row_data['category_id'];
         echo " <li class='nav-item'>
         <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
         </li>";
        }
?>
    
      
      
      
    </ul>
</div>
    

         
  </div>
</div>


         <div class="bg-info p-3 text-center">
           <p>All rights reserved -designed by Evergreen Nursery</p>
         </div>
                </div>



  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
     crossorigin="anonymous"></script>

