<?php 
$con= new mysqli('localhost','root','','Samge');

if($con){
    echo "Connection with the database Successful";
}
else{
die(mysqli_error($con));
}












?>