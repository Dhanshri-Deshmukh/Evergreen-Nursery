<<?php
session_start();
?>
<?php

//if(($_SESSION["RULE"])!="USER")

//{
//    header("C:\xampp\htdocs\nursery\order.php");
  //  die();
//} 

?>
<?php
include('C:\xampp\htdocs\nursery\admin_area\includes\connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" cintent="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    <?php
    ?>

<h3 class="text-center text-success">MY Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            
        <th>Sno</th>
        <th>oid</th>
            <th>amt</th>
            <th>totalplants</th>
            <th>odate</th>

          
            
        </tr>
</thead>
<tbody>
    <?php
    $uid=$_SESSION["uid"];
    $total=0;
    $sql="SELECT * FROM userorder where uid=$uid";
   
    $result=$con->query($sql);

    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $oid=$row['oid'];
        $amt=$row['amt'];
        $totalplants=$row['totalplants'];
        $odate=$row['odate'];
        $number++;

?>

             <tr class="text-center">
        <td><?php echo $number;?></td>
        
        <td><?php echo $oid;?></td>
        <td><?php echo $amt;?></td>
        <td><?php echo $totalplants;?></td>
        
        <td><?php echo $odate;?></td>
    
        
        
    </tr>
      <?php 
        }
      
      ?>
      </table>