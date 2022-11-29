<?php

include("../include/connect.php");
if(isset($_POST['insert_brand'])){
  $brand_title = $_POST['brand_title'];
  echo $brand_title;
  $select_brand="SELECT * FROM `brand` where brand_title= '$brand_title';";
  $result_select_brand = mysqli_query($con,$select_brand);
  
  $number_brand = mysqli_num_rows($result_select_brand);
  if($number_brand>0){
    echo "<script>alert('entered brand is already present')</script>";
  }else{
    $insert_brand = "INSERT INTO `brand` ( `brand_title`) VALUES ( '$brand_title');";
    $result_insert_brand = mysqli_query($con,$insert_brand);
    
    if($result_insert_brand){
      echo "<script>alert('brand entered is succeffully inserted')</script>";
    }
  }

}

?>


<div class="container-fluid">
<h2 class=" text-center">Insert brands</h2>

<form action="" method="post">
<div class="input-group mt-3">
  <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  
  <input type="text" name="brand_title" class="form-control" placeholder="Insert Brands" aria-label="Username" aria-describedby="basic-addon1">
  
</div>
<button class=" mt-3 bg-primary text-white border-0 " name="insert_brand" type="submit">Insert Brands</button>




</form>
