<?php
include("../include/connect.php");
?>

<div class="container-fluid mt-3 mb-5 pb-5 d-flex justify-content-center align-items-center ">
        <!--if we dont use enctype="multipart/form-data" in form then we wont 
             be able to input images -->
        <form style="width: 60%;" action=" " method="post" enctype="multipart/form-data" >
            <h2 class="text-center">Insert Products</h2>
        <!--product_title-->
        <div class="mb-3">
          <label for="exampleInputProduct_title1" class="form-label">Product Title</label>
          <input name="product_title" autocomplete="off" required placeholder="Enter Product Title" type="text" class="form-control" id="exampleInputProduct_title1" aria-describedby="product_titleHelp">
          
        </div>
        <!--product_desc-->
        <div class="mb-3">
            <label for="exampleInputProduct_desc1" class="form-label">Product Description</label>
            <input name="product_desc" autocomplete="off" required placeholder="Enter Product Description" type="text" class="form-control" id="exampleInputProduct_desc1" aria-describedby="product_descHelp">
            
          </div>
        <!--product_keyword-->
        <div class="mb-3">
            <label for="exampleInputProduct_keyword1" class="form-label">Product Keyword</label>
            <input name="product_keyword"  autocomplete="off" required placeholder="Enter Product Keyword" type="text" class="form-control" id="exampleInputProduct_keyword1" aria-describedby="product_keywordHelp">
            
        </div>  
        <!--product_categories-->
        <select class="form-select mb-3" name="product_categories" aria-label="Default select example">
            <option selected>Select A Category</option>
            <?php

            /*to show thw categories from database and display it here*/

            //selecting all the data from table category from database
            $select_query_category = "SELECT * FROM `category`";
            $result_select_query_category = mysqli_query($con,$select_query_category);
            //fetching the data from table category from database
            $row_data = mysqli_fetch_assoc($result_select_query_category);
            //we will get only the first id element using echo $row_data['cat_title'];
            //echo $row_data['cat_title'];
            /*therefore we use while loop which echo $row_data['cat_title']; till data
            is present*/
            $category_title1 = $row_data['cat_title'];
            echo "<option value=' 1'>$category_title1 </option>";
            while($row_data = mysqli_fetch_assoc($result_select_query_category)){
              //echo $row_data['cat_title'];
              $category_title = $row_data['cat_title'];
              $category_id = $row_data['cat_id'];
              echo "<option value=' $category_id'>$category_title</option>" ;
            }

            ?>
            
          </select>
         <!--product_brands--> 
          <select class="form-select mb-3" name="product_brands" aria-label="Default select example">
            <option selected>Select A Brand</option>
            <?php
            //selecting all the data from table brand from database
            $select_query_brand = "SELECT * FROM `brand`";
            $result_select_query_brand = mysqli_query($con,$select_query_brand);
          
            //fetching the data from table brand from database
            $row_data = mysqli_fetch_assoc($result_select_query_brand);
            //we will get only the first id element using echo $row_data['brand_title'];
            //echo $row_data['brand_title'];
            /*therefore we use while loop which echo $row_data['brand_title']; till data
            is present*/
            $brand_title1 = $row_data['brand_title'];
            echo "<option value=' 1'> $brand_title1 </option>";
            while($row_data = mysqli_fetch_assoc($result_select_query_brand)){
            //echo $row_data['brand_title'];
            
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            
            
            
                echo "<option value=' $brand_id'> $brand_title</option>";

           
            
            
            /*NOTE;-THE BRAND WITH BRAND ID-1 IS NOT SHOWN HERE REASON YET TO BE FIND*/
            }

            ?>
            
          </select>
          <!--product_image1-->
          <div class="mb-3">
            <label for="exampleInputProduct_image1" class="form-label">Product Image 1</label>
            <input name="product_image1" required placeholder="Enter Product_image1" type="file" class="form-control" id="exampleInputProduct_image1" aria-describedby="product_image1Help">
            
        </div>
        <!--product_image2-->
        <div class="mb-3">
            <label for="exampleInputProduct_image2" class="form-label">Product Image 2</label>
            <input name="product_image2" required placeholder="Enter Product_image2" type="file" class="form-control" id="exampleInputProduct_image2" aria-describedby="product_image2Help">
            
        </div>
        <!--product_image3-->
        <div class="mb-3">
            <label for="exampleInputProduct_image3" class="form-label">Product Image 3</label>
            <input name="product_image3" required placeholder="Enter Product_image3" type="file" class="form-control" id="exampleInputProduct_image3" aria-describedby="product_image3Help">
            
        </div> 
        <!--product_price-->
        <div class="mb-3">
            <label for="exampleInputProduct_price" class="form-label">Product Price</label>
            <input name="product_price" autocomplete="off" required placeholder="Enter Product Price" type="text" class="form-control" id="exampleInputProduct_price" aria-describedby="product_priceHelp">
            
        </div>
          
        
        
        <button type="submit" name ="insert_product" class="btn btn-primary">Insert Product</button>



          <?php
          /*after enetering the values in product form when btn is clicked*/
          //to check that the insert product btn is clicked
       if(isset($_POST['insert_product'])){
            //variables for values inserted
            $product_title = $_POST['product_title'];
            $product_desc = $_POST['product_desc'];
            $product_keyword = $_POST['product_keyword'];
            $product_categories = $_POST['product_categories'];
            $product_brands = $_POST['product_brands'];
            $product_price = $_POST['product_price'];
            //for images we use $_FILES
             //ACCESSING THE IMAGES
            $product_image1 = $_FILES['product_image1']['name'];
            $product_image2 = $_FILES['product_image2']['name'];
            $product_image3 = $_FILES['product_image3']['name'];
            //ACCESSING THE TEMP_NAMES
            $temp_image1 = $_FILES['product_image1']['tmp_name'];
            $temp_image2 = $_FILES['product_image2']['tmp_name'];
            $temp_image3 = $_FILES['product_image3']['tmp_name'];
            
            /*there is required attribute in every input tag still u can use this to check 
            whether all inputs are filled or not */  
           /*NOW CHECK WHETHER ALL THE INPUTS ARE EMPTY OR NOT*/
            if($product_title=='' or $product_desc=='' or $product_keyword=='' or 
                $product_categories=='' or $product_brands=='' or $product_image1=='' or 
                $product_image2=='' or $product_image3=='' or $product_price=='' ){
                  echo "<script> alert('plz fill al the Fields. Something is Missing.')</script>";
                  //once when received this message we need to exit from here and start again
                  exit();
                }else{
                  /*else means all the fields have been filled now we */
                  //1. firstly we need to move all the images in one folder called product_images 
                   move_uploaded_file($temp_image1,"./product_images/$product_image1");
                   move_uploaded_file($temp_image2,"./product_images/$product_image2");
                   move_uploaded_file($temp_image3,"./product_images/$product_image3");

                  //2.inserting the product details in product table of the database
                  $insert_product_query = "INSERT INTO `products` ( `product_title`,
                   `product_desc`, `product_keyword`, `cat_id`, `brand_id`, `product_image1`,
                    `product_image2`, `product_image3`, `product_price`, `date`, `status`)
                     VALUES ( '$product_title',
                      ' $product_desc', '$product_keyword', '$product_categories', '$product_brands', '$product_image1', '$product_image2', '$product_image3',
                        '$product_price', current_timestamp(), 'true');";
                  $result_product_query = mysqli_query($con, $insert_product_query); 
                  //now if all the values are enterd in table then we need to show this message
                  if($result_product_query){
                    echo "<script> alert('Product is inserted Succesfully.')</script>";

                  }
                  
                
                }

            

          }


          ?>
           
    </form></div>