
<?php
session_start();
include('C:\xampp\htdocs\nursery\admin_area\includes\connect.php');
if(isset($_POST['order'])){
  
    $amt=$_POST['amt'];
    $totalplants=$_POST['totalplants'];
    $odate=$_POST['odate'];
    $total=$amt *  $totalplants;
    $uid=$_SESSION['uid'];

  
  $insert_query="insert into `userorder` (`uid`,`amt`,`totalplants`,`odate`) values ('$uid','$total','$totalplants','$odate')";
  $result=mysqli_query($con,$insert_query);
 
  
    echo"<script>alert('order successfully')</script>";
 
}
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
<form action="" method="post">
    <div class="container mt-3">
        <h1 class="text-center">My Order</h1>
        <div class="form-outline mb-4 w-50 m-auto">
                



           

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="amt" class="form-label">amt</label>
                <?php
                  $p=$_GET['p'];
                   ?>
                <input type="text" name="amt"
                 id="amt" class="form-control" 
                 value="<?php echo $p ?>" autocomplete="off"
                 readonly>
            </div>
   
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="totalplants" class="form-label">totalplants</label>
                <input type="text" name="totalplants"
                 id="totalplants" class="form-control" 
                 placeholder="Enter Total Plants" autocomplete="off"
                 required="required">
            </div>

           

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="odate" class="form-label">odate</label>
                <input type="date" name="odate"
                 id="odate" class="form-control" 
                 placeholder="Enter odate" autocomplete="off"
                 required="required">
            </div>

           
            

              
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="Submit" name="order" class="btn btn-info mb-3 px-3" value="order">
            </div>

            </form>
    </div>
        

</body>
</html>
