<?php

$con=mysqli_connect('localhost','root','tiger','nursery');
if(!$con){

    die(mysqli_error($con));
    echo" Connection not Successful";

}





?>