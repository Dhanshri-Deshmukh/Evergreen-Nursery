
<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr class="text-center">
           
            <th>Sno</th>
            <th>uid</th>
            <th>uname</th>
            <th>contact</th>

          
            
            
        </tr>
</thead>
<tbody class="bg-secondary text-light">
    <?php
    include('includes/connect.php');

    $select_users="select * from `register`";
    $result=mysqli_query($con,$select_users);
    $number=0;
    while($row=mysqli_fetch_assoc($result)){
      
        $uid=$row['uid'];
        $uname=$row['uname'];
        $contact=$row['contact'];
        $number++;

?>


    <tr class="text-center">
        <td><?php echo $number;?></td>
        
       
        <td><?php echo $uid;?></td>
        <td><?php echo $uname;?></td>
        <td><?php echo $contact;?></td>
    
        
        
    </tr>
<?php
}?>
</tbody>
</table>
