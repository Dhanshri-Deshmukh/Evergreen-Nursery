
<h3 class="text-center text-success">All Orders</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
           
            <th>Sno</th>
            <th>amt</th>
            <th>totalplants</th>
            <th>odate</th>

          
            
            
        </tr>
</thead>
<tbody class="bg-secondary text-light">
    <?php
    include('includes/connect.php');

    $select_users="select * from `userorder`";
    $result=mysqli_query($con,$select_users);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
      
        $amt=$row['amt'];
        $totalplants=$row['totalplants'];
        $odate=$row['odate'];
        $number++;

?>


    <tr class="text-center">
        <td><?php echo $number;?></td>
        
       
        <td><?php echo $amt;?></td>
        <td><?php echo $totalplants;?></td>
        
        <td><?php echo $odate;?></td>
    
        
        
    </tr>
<?php
}?>
</tbody>
</table>
