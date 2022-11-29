<?php
//1.connecting to database mystore
include("../include/connect.php");

//2.after entering the category need to insert the categorie in table categories

//2awhen clicked on btn first check tthat it is in  database or not and 
//then insert the value in table 
if(isset($_POST['insert_cat'])){
  //variable for value inserted in cattitle
  $category_title = $_POST['cat_title'];
  //echo $category_title;

  /*checking that the cat_title enetered is present in table of database or not */
  //selecting all where cat_title = $category_tittle
  $select_query = "SELECT * FROM `category` where cat_title='$category_title'";
  $result_select = mysqli_query($con, $select_query);
  //number of rows having the same category_title entered.
  $number = mysqli_num_rows($result_select);
  //if $number is grreater than 0, it means category is already there is database
  if($number>0){
    echo "<script> alert('Category entered is already present in database.')</script>";
  }else{
    //inserting the value enetered
  $insert_query = "INSERT INTO `category` (`cat_title`) VALUES ('$category_title');";
  $result = mysqli_query($con, $insert_query);
  //if result query is executed then a alert of succefful insertion
  if($result){
    echo "<script> alert('your category has been inerted succeffuly.')</script>";
  }

  }


  
  
  
}
 
?>



<div class="container-fluid">
  <h2 class=" text-center">Insert category</h2>

<form action="" method="post">
<div class="input-group mt-3">
  <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  
  <input type="text" name="cat_title" class="form-control" placeholder="Insert Category" aria-label="Username" aria-describedby="basic-addon1">
  
</div>
<button class=" mt-3 bg-primary text-white border-0 " name="insert_cat" type="submit">Insert Categories</button>




</form>
