<html>
    <body>
<h3 class="text-center text-success">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
            <th>Sno</th>
            <th>Category title</th>
            
            <th>Delete</th>
            
        </tr>
</thead>
<tbody class="bg-secondary text-light">
    <?php
    include('includes/connect.php');

    $select_cat="select * from `category`";
    $result=mysqli_query($con,$select_cat);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
        $category_id=$row['category_id'];
        $category_title=$row['category_title'];
        $number++;

?>


    <tr class="text-center">
        <td><?php echo $number;?></td>
        <td><?php echo $category_title;?></td>
        <!--
        <td><button><a href="http://localhost/nursery/admin_area/update.php?cid-$category_id" class="nav-link text-light bg-info my-1">update</a></button></td>
    -->
       <td> <button><a href="http://localhost/nursery/admin_area/delete.php?cid=<?php echo $row['category_id']?>" class="nav-link text-light bg-info my-1">Delete</a></button></td>

    
    </tr>
<?php
}?>
</tbody>
</table>
</body>
</html>


