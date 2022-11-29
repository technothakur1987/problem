<?php
//setting up the connection
$con=mysqli_connect('localhost','root','','mystore');
if(!$con){
 
  die(mysqli_error($con));
}else{
 echo "connection succefful";
  
}

?>