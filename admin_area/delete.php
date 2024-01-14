<?php
include('includes/connect.php');
$aid=$_GET['cid'];


    $sql="DELETE FROM category WHERE category_id='$aid'";
     $result=$con->query($sql);
     if($result)
     {
        header("location:http://localhost/nursery/admin_area/index.php");
     }
  die();

?>