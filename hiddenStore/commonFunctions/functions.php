<?php
/*function to show all the products from table on main page*/
function displayProducts(){
  global $con;

  /*when we click on any brand/category in side nav , that related product 
  should be displayed else display all the products it means when thatgetvariable
   brand or category is not set, we need to show all the data else show the 
   related data */

   //checking isset
   if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
     //checking that set btn is clicked or not 
      if(isset($_GET['searchBtn'])){
        echo "<script> alert('search btn is clicked ')</script>";
        //getting the value of input of search
          $input_search = $_GET['searchInput'];

          //now selecting all the values where keywords is $input_search
          $search_query_product = "SELECT * FROM `products` where product_keyword like '%$input_search%'  ";
          $result_search_query_product = mysqli_query($con,$search_query_product);

          if($result_search_query_product){
     
          //fetching the data from table category from database
          $row_search_query_product = mysqli_fetch_assoc($result_search_query_product);
     
         //getting no of rows matching the keyword
          $num = mysqli_num_rows($result_search_query_product);
     
          if($num>0){

           $product_id1 = $row_search_query_product['product_id'];
          $product_title1 = $row_search_query_product['product_title'];
          $product_desc1 = $row_search_query_product['product_desc'];
          $product_categorie1 = $row_search_query_product['cat_id'];
          $product_brand1 = $row_search_query_product['brand_id'];
          $product_image11 = $row_search_query_product['product_image1'];
          $product_image21 = $row_search_query_product['product_image2'];
          $product_image31 = $row_search_query_product['product_image3'];
          $product_price1 = $row_search_query_product['product_price'];


        echo "<div class='col-4 mt-1 mb-1 '>
        <div class='card'>
          <img src='./adminArea/product_images/$product_image11' class='card-img-top ' alt='$product_image11'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title1</h5>
            <p class='card-text'> $product_desc1</p>
            <p class='card-text'>Price:- $product_price1 /- inr</p>
            <a href='index.php?add_to_cart=$product_id1' class='btn btn-primary'>Add to cart</a>
            <a href='productdetails.php?product_id=$product_id1' class='btn btn-dark' name='ViewMore'>View more</a>
          </div>
        </div>
       </div>";

        while($row_search_query_product = mysqli_fetch_assoc($result_search_query_product)){
          $product_id = $row_search_query_product['product_id']; 
         $product_title = $row_search_query_product['product_title'];
         $product_desc = $row_search_query_product['product_desc'];
         $product_categorie = $row_search_query_product['cat_id'];
         $product_brand = $row_search_query_product['brand_id'];
         $product_image1 = $row_search_query_product['product_image1'];
         $product_image2 = $row_search_query_product['product_image2'];
         $product_image3 = $row_search_query_product['product_image3'];
         $product_price = $row_search_query_product['product_price'];


         echo "<div class='col-4 mt-1 mb-1  '>
         <div class='card'>
           <img src='./adminArea/product_images/$product_image1' class='card-img-top ' alt='$product_image1'>
           <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
             <p class='card-text'> $product_desc</p>
             <p class='card-text'>Price:- $product_price /- inr</p>
             <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
             <a href='productdetails.php?product_id=$product_id' class='btn btn-dark' name='ViewMore'>View more</a>
           </div>
         </div>
        </div>";

      }
      
      

    }
    if($num==0){
      echo "<script> alert('no product found')</script>";
      echo "<h1 CLASS='TEXT-DANGER TEXT-CENTER MT-2'>NO PRODUCT FOUND</h1>";
    }

    


  }


      }else{

      /*showing the products here*/
      //selecting all the data from table product from database in random order maximim
      $select_query_product = "SELECT * FROM `products` order by rand() limit 0,9 ";
      $result_select_query_product = mysqli_query($con,$select_query_product);
      
      //fetching the data from table product from database
      $row_data = mysqli_fetch_assoc( $result_select_query_product);

      
          $product_id1 = $row_data['product_id'];
          $product_title1 = $row_data['product_title'];
          $product_desc1 = $row_data['product_desc'];
          $product_categorie1 = $row_data['cat_id'];
          $product_brand1 = $row_data['brand_id'];
          $product_image11 = $row_data['product_image1'];
          $product_image21 = $row_data['product_image2'];
          $product_image31 = $row_data['product_image3'];
          $product_price1 = $row_data['product_price'];


          echo "<div class='col-4 mt-1 mb-1 '>
          <div class='card'>
            <img src='./adminArea/product_images/$product_image11' class='card-img-top ' alt='$product_image11'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title1</h5>
              <p class='card-text'> $product_desc1</p>
              <p class='card-text'>Price:- $product_price1 /- inr</p>
              <a href='index.php?add_to_cart=$product_id1' class='btn btn-primary'>Add to cart</a>
              <a href='productdetails.php?product_id=$product_id1' class='btn btn-dark' name='ViewMore'>View more</a>
            </div>
          </div>
         </div>";

          while($row_data = mysqli_fetch_assoc($result_select_query_product)){
            $product_id = $row_data['product_id']; 
           $product_title = $row_data['product_title'];
           $product_desc = $row_data['product_desc'];
           $product_categorie = $row_data['cat_id'];
           $product_brand = $row_data['brand_id'];
           $product_image1 = $row_data['product_image1'];
           $product_image2 = $row_data['product_image2'];
           $product_image3 = $row_data['product_image3'];
           $product_price = $row_data['product_price'];


           echo "<div class='col-4 mt-1 mb-1  '>
           <div class='card'>
             <img src='./adminArea/product_images/$product_image1' class='card-img-top ' alt='$product_image11'>
             <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'> $product_desc</p>
               <p class='card-text'>Price:- $product_price /- inr</p>
               <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
               <a name='ViewMore' href='productdetails.php?product_id=$product_id' class='btn btn-dark'>View more</a>
             </div>
           </div>
          </div>";};

    }}}};


/*products to show when category is set*/
function displayProductWhenCatIsSet(){
  global $con;
  //check whether cat is set 
  if(isset($_GET['category'])){
    $category_id = $_GET['category'];
    
     
    //selecting all the products where cat id =$category_id
    $select_query_product = "SELECT * FROM `products` where cat_id=$category_id ";
      $result_select_query_product = mysqli_query($con,$select_query_product);
      if($result_select_query_product){
        $num = mysqli_num_rows($result_select_query_product);
       
        if(mysqli_num_rows($result_select_query_product) > 0){
          while($row_data = mysqli_fetch_assoc($result_select_query_product)){
            $product_id = $row_data['product_id'];
            $product_title = $row_data['product_title'];
            $product_desc = $row_data['product_desc'];
            $product_category = $row_data['cat_id'];
            $product_brand = $row_data['brand_id'];
            $product_image1 = $row_data['product_image1'];
            $product_image2 = $row_data['product_image2'];
            $product_image3 = $row_data['product_image3'];
            $product_price = $row_data['product_price'];
           


           echo "<div class='col-4 mt-1 mb-1  '>
           <div class='card'>
             <img src='./adminArea/product_images/$product_image1' class='card-img-top ' alt='$product_image1'>
             <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'> $product_desc</p>
               <p class='card-text'>Price:- $product_price /- inr</p>
               <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
               <a href='productdetails.php?product_id=$product_id' class='btn btn-dark' name='ViewMore'>View more</a>
             </div>
           </div>
          </div>";
          }

        }else{
          echo "<h1 class='text-center text-danger mt-5'>Sorry no products yet. plz Wait For Sometime, It will be there</h1>";
        }

      }
      
      
    
      

    
      

     
      
      

   

  }
} ;

/*products to show when brand is set*/
function displayProductWhenBrandIsSet(){
  global $con;
  //check whether cat is set 
  if(isset($_GET['brand'])){
    $brand_id = $_GET['brand'];
    
     
    //selecting all the products where cat id =$category_id
    $select_query_product = "SELECT * FROM `products` where brand_id=$brand_id ";
      $result_select_query_product = mysqli_query($con,$select_query_product);
      if($result_select_query_product){
        $num = mysqli_num_rows($result_select_query_product);
       
        if(mysqli_num_rows($result_select_query_product) > 0){
          while($row_data = mysqli_fetch_assoc($result_select_query_product)){
            $product_id = $row_data['product_id'];
            $product_title = $row_data['product_title'];
            $product_desc = $row_data['product_desc'];
            $product_category = $row_data['cat_id'];
            $product_brand = $row_data['brand_id'];
            $product_image1 = $row_data['product_image1'];
            $product_image2 = $row_data['product_image2'];
            $product_image3 = $row_data['product_image3'];
            $product_price = $row_data['product_price'];
           


           echo "<div class='col-4 mt-1 mb-1  '>
           <div class='card'>
             <img src='./adminArea/product_images/$product_image1' class='card-img-top ' alt='$product_image1'>
             <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'> $product_desc</p>
               <p class='card-text'>Price:- $product_price /- inr</p>
               <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
               <a href='productdetails.php?product_id=$product_id' class='btn btn-dark' name='ViewMore'>View more</a>
             </div>
           </div>
          </div>";
          }

        }else{
          echo "<h1 class='text-center text-danger mt-5'>Sorry no products yet. plz Wait For Sometime, It will be there</h1>";
        }

      }
      
      
    
      

    
      

     
      
      

   

  }
} 



/*products to show when no category or brand is set */
 

  

          

   
   





    /*function to show brands in side nav*/
function displayBrandsSideNav(){
    global $con;
    //selecting all the data from table brand from database
    $select_query_brand = "SELECT * FROM `brand`";
    $result_select_query_brand = mysqli_query($con,$select_query_brand);
    
    //fetching the data from table brand from database
    $row_data = mysqli_fetch_assoc($result_select_query_brand);
    //we will get only the first id element using echo $row_data['brand_title'];
    //echo $row_data['brand_title'];
    $brand_title1 = $row_data['brand_title'];
      $brand_id1 = $row_data['brand_id'];
      echo "<p class='card-text '><a href='index.php?brand=$brand_id1' class='text-white text-decoration-none'>$brand_title1</a></p> ";
    /*therefore we use while loop which echo $row_data['brand_title']; till data
    is present*/
    while($row_data = mysqli_fetch_assoc($result_select_query_brand)){
      //echo $row_data['brand_title'];
     $brand_title = $row_data['brand_title'];
      $brand_id = $row_data['brand_id'];
      echo "<p class='card-text '><a name='ViewMore' href='index.php?brand=$brand_id' class='text-white text-decoration-none'>$brand_title</a></p> ";
    /*NOTE;-THE BRAND WITH BRAND ID-1 IS NOT SHOWN HERE REASON YET TO BE FIND*/
    }

}

/*function to show categories in side nav*/

function displayCategorySideNav(){
    global $con;
    //selecting all the data from table category from database
    $select_query_category = "SELECT * FROM `category`";
    $result_select_query_category = mysqli_query($con,$select_query_category);
    
    //fetching the data from table category from database
    $row_data = mysqli_fetch_assoc($result_select_query_category);
    //we will get only the first id element using echo $row_data['cat_title'];
    //echo $row_data['cat_title'];
    $category_title1 = $row_data['cat_title'];
    $category_id1 = $row_data['cat_id'];
    echo "<p class='card-text'><a href='index.php?category=$category_id1' class='text-white text-decoration-none'>$category_title1</a></p> ";
    /*therefore we use while loop which echo $row_data['cat_title']; till data
    is present*/
    while($row_data = mysqli_fetch_assoc($result_select_query_category)){
      //echo $row_data['cat_title'];
      $category_title = $row_data['cat_title'];
      $category_id = $row_data['cat_id'];
      echo "<p class='card-text'><a name='ViewMore' href='index.php?category=$category_id' class='text-white text-decoration-none'>$category_title</a></p> ";

    }

}

function displayAllProducts(){
  global $con;

  /*when we click on any brand/category in side nav , that related product 
  should be displayed else display all the products it means when thatgetvariable
   brand or category is not set, we need to show all the data else show the 
   related data */

   //checking isset
   if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
      //checking that search btn is clicked or not 
      if(isset($_GET['searchBtn'])){
        echo "<script> alert('search btn is clicked ')</script>";
        //getting the value of input of search
          $input_search = $_GET['searchInput'];

          //now selecting all the values where keywords is $input_search
          $search_query_product = "SELECT * FROM `products` where product_keyword like '%$input_search%'  ";
          $result_search_query_product = mysqli_query($con,$search_query_product);

          if($result_search_query_product){
     
          //fetching the data from table category from database
          $row_search_query_product = mysqli_fetch_assoc($result_search_query_product);
     
         //getting no of rows matching the keyword
          $num = mysqli_num_rows($result_search_query_product);
          echo "<script>alert('$num')</script>";
     
          if($num>0){
            $product_id1=$row_search_query_product['product_id'];
            $product_title1 = $row_search_query_product['product_title'];
            $product_desc1 = $row_search_query_product['product_desc'];
            $product_categorie1 = $row_search_query_product['cat_id'];
            $product_brand1 = $row_search_query_product['brand_id'];
            $product_image11 = $row_search_query_product['product_image1'];
            $product_image21 = $row_search_query_product['product_image2'];
            $product_image31 = $row_search_query_product['product_image3'];
            $product_price1 = $row_search_query_product['product_price'];
            echo "<div class='col-4 mt-1 mb-1 '>
                    <div class='card'>
                    <img src='./adminArea/product_images/$product_image11' class='card-img-top ' alt='$product_image11'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title1</h5>
                      <p class='card-text'> $product_desc1</p>
                      <p class='card-text'>Price:- $product_price1 /- inr</p>
                      <a href='index.php?add_to_cart=$product_id1' class='btn btn-primary'>Add to cart</a>
                      <a name='ViewMore' href='productdetails.php?product_id=$product_id1' class='btn btn-dark'>View more</a>
                      </div>
                      </div>
                      </div>";

            while($row_search_query_product = mysqli_fetch_assoc($result_search_query_product)){
              $product_id = $row_search_query_product['product_id'];  
                  $product_title = $row_search_query_product['product_title'];
                   $product_desc = $row_search_query_product['product_desc'];
                  $product_categorie = $row_search_query_product['cat_id'];
                  $product_brand = $row_search_query_product['brand_id'];
                  $product_image1 = $row_search_query_product['product_image1'];
                  $product_image2 = $row_search_query_product['product_image2'];
                  $product_image3 = $row_search_query_product['product_image3'];
                  $product_price = $row_search_query_product['product_price'];


                    echo "<div class='col-4 mt-1 mb-1  '>
                    <div class='card'>
                      <img src='./adminArea/product_images/$product_image1' class='card-img-top ' alt='$product_image1'>
                      <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'> $product_desc</p>
                      <p class='card-text'>Price:- $product_price /- inr</p>
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                      <a name='ViewMore' href='productdetails.php?product_id=$product_id' class='btn btn-dark'>View more</a>
                      </div>
                    </div>
                    </div>";   } 

   } 
          if($num==0){
            echo "<script> alert('no product found')</script>";
            echo "<h1 CLASS='TEXT-DANGER TEXT-CENTER MT-2'>NO PRODUCT FOUND</h1>";
          }
  
  
  } }
 else{

      

      /*showing the products here*/
      //selecting all the data from table product from database
      $select_query_product = "SELECT * FROM `products` order by rand()  ";
      $result_select_query_product = mysqli_query($con,$select_query_product);
      
      //fetching the data from table product from database
      $row_data = mysqli_fetch_assoc( $result_select_query_product);

      
      $product_id1 = $row_data['product_id'];
          $product_title1 = $row_data['product_title'];
          $product_desc1 = $row_data['product_desc'];
          $product_categorie1 = $row_data['cat_id'];
          $product_brand1 = $row_data['brand_id'];
          $product_image11 = $row_data['product_image1'];
          $product_image21 = $row_data['product_image2'];
          $product_image31 = $row_data['product_image3'];
          $product_price1 = $row_data['product_price'];


          echo "<div class='col-4 mt-1 mb-1 '>
          <div class='card'>
            <img src='./adminArea/product_images/$product_image11' class='card-img-top ' alt='$product_image11'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title1</h5>
              <p class='card-text'> $product_desc1</p>
              <p class='card-text'>Price:- $product_price1 /- inr</p>
              <a href='index.php?add_to_cart=$product_id1' class='btn btn-primary'>Add to cart</a>
              <a name='ViewMore'href='productdetails.php?product_id=$product_id1' class='btn btn-dark'>View more</a>
            </div>
          </div>
         </div>";

          while($row_data = mysqli_fetch_assoc($result_select_query_product)){
            $product_id = $row_data['product_id']; 
           $product_title = $row_data['product_title'];
           $product_desc = $row_data['product_desc'];
           $product_categorie = $row_data['cat_id'];
           $product_brand = $row_data['brand_id'];
           $product_image1 = $row_data['product_image1'];
           $product_image2 = $row_data['product_image2'];
           $product_image3 = $row_data['product_image3'];
           $product_price = $row_data['product_price'];


           echo "<div class='col-4 mt-1 mb-1  '>
           <div class='card'>
             <img src='./adminArea/product_images/$product_image1' class='card-img-top ' alt='$product_image11'>
             <div class='card-body'>
               <h5 class='card-title'>$product_title</h5>
               <p class='card-text'> $product_desc</p>
               <p class='card-text'>Price:- $product_price /- inr</p>
               <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
               <a name='ViewMore' href='productdetails.php?product_id=$product_id' class='btn btn-dark'>View more</a>
             </div>
           </div>
          </div>";}

    }}}}



/*displayProductDetails*/ 

function displayProductDetails(){
  global $con;
 
  if(isset($_GET['product_id']) ){
    echo "<script> alert('Welcome to product details dahsboard')</script>";
    echo "<script> alert('product get variableis set')</script>";

    if(!isset($_GET['brand'])){
      echo "<script> alert('brand get variable is not set')</script>";
      if(!isset($_GET['category'])){
        echo "<script> alert('category get variable is not set')</script>";
        //show the details here
        $product_id= $_GET['product_id'];
        echo "<script> alert('fetching details for product:$product_id')</script>";

      //selecting all the data from table product from database where product_id = $product_id
     
      $select_query_product = "SELECT * FROM `products`where product_id=$product_id";
      $result_select_query_product = mysqli_query($con,$select_query_product);
      if($result_select_query_product){
        echo "<script> alert('result selected for product:$product_id')</script>";
        //fetching the data from table product from database
        $row_data = mysqli_fetch_assoc( $result_select_query_product);
        if($row_data){
          echo "<script> alert('result fetched for product:$product_id')</script>";
          $product_id1 = $row_data['product_id'];
          $product_title1 = $row_data['product_title'];
          $product_desc1 = $row_data['product_desc'];
          $product_categorie1 = $row_data['cat_id'];
          $product_brand1 = $row_data['brand_id'];
          $product_image11 = $row_data['product_image1'];
          $product_image21 = $row_data['product_image2'];
          $product_image31 = $row_data['product_image3'];
          $product_price1 = $row_data['product_price'];


          /*echo "<div class='col-4 mt-1 mb-1 '>
          <div class='card'>
            <img src='./adminArea/product_images/$product_image11' class='card-img-top ' alt='$product_image11'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title1</h5>
              <p class='card-text'> $product_desc1</p>
              <p class='card-text'>Price:- $product_price1 /- inr</p>
              <a href='index.php?add_to_cart=$product_id1' class='btn btn-primary'>Add to cart</a>
              
            </div>
          </div>
         </div>";*/
         echo "<div class='col-4 border'>
    <div class='col-12 mt-1 mb-1  '>
       <div class='card '  >
         <img src='./adminArea/product_images/$product_image11' class='card-img-top ' alt=''>
         <div class='card-body'>
           <h5 class='card-title'>$product_title1</h5>
           <p class='card-text'> $product_desc1</p>
           <p class='card-text'>Price:-  $product_price1 /- inr</p>
           <a href='index.php?add_to_cart=$product_id1' class='btn btn-primary'>Add to cart</a>
           
         </div>
       </div>
    </div>
   </div> 
    <div class='col-md-8 border'>
      <h3 class='text-center text-info'>Related products</h3>
      <div class='row'>
        <div class='col-6 border'>
        <img src='./adminArea/product_images/$product_image21' class='card-img-top ' alt='' style='height:15rem!important;'>
        </div>
        <div class='col-6 border'>
        <img src='./adminArea/product_images/$product_image31' class='card-img-top ' alt='' style='height:15rem!important;'>

        </div>
      </div>

    </div>";

         
        }

      }
    }
      
        
     
       
        

      







      
      };
    };
  };


 



/*serachbtn frunction for product detaila page  */ 
function seachBtnProduct(){
  global $con;
  //checking that search btn is clicked or not 
  if(isset($_GET['searchBtn'])){
    echo "<script> alert('search btn is clicked ')</script>";
    //getting the value of input of search
      $input_search = $_GET['searchInput'];

      //now selecting all the values where keywords is $input_search
      $search_query_product = "SELECT * FROM `products` where product_keyword like '%$input_search%'  ";
      $result_search_query_product = mysqli_query($con,$search_query_product);

      if($result_search_query_product){
 
      //fetching the data from table category from database
      $row_search_query_product = mysqli_fetch_assoc($result_search_query_product);
 
     //getting no of rows matching the keyword
      $num = mysqli_num_rows($result_search_query_product);
 
      if($num>0){
        $product_id1=$row_search_query_product['product_id'];
        $product_title1 = $row_search_query_product['product_title'];
        $product_desc1 = $row_search_query_product['product_desc'];
        $product_categorie1 = $row_search_query_product['cat_id'];
        $product_brand1 = $row_search_query_product['brand_id'];
        $product_image11 = $row_search_query_product['product_image1'];
        $product_image21 = $row_search_query_product['product_image2'];
        $product_image31 = $row_search_query_product['product_image3'];
        $product_price1 = $row_search_query_product['product_price'];
        echo "<div class='col-4 mt-1 mb-1 '>
                <div class='card'>
                <img src='./adminArea/product_images/$product_image11' class='card-img-top ' alt='$product_image11'>
                <div class='card-body'>
                  <h5 class='card-title'>$product_title1</h5>
                  <p class='card-text'> $product_desc1</p>
                  <p class='card-text'>Price:- $product_price1 /- inr</p>
                  <a href='index.php?add_to_cart=$product_id1' class='btn btn-primary'>Add to cart</a>
                  <a name='ViewMore' href='productdetails.php?product_id=$product_id1' class='btn btn-dark'>View more</a>
                  </div>
                  </div>
                  </div>";

        while($row_search_query_product = mysqli_fetch_assoc($result_search_query_product)){
          $product_id = $row_search_query_product['product_id'];  
              $product_title = $row_search_query_product['product_title'];
               $product_desc = $row_search_query_product['product_desc'];
              $product_categorie = $row_search_query_product['cat_id'];
              $product_brand = $row_search_query_product['brand_id'];
              $product_image1 = $row_search_query_product['product_image1'];
              $product_image2 = $row_search_query_product['product_image2'];
              $product_image3 = $row_search_query_product['product_image3'];
              $product_price = $row_search_query_product['product_price'];


                echo "<div class='col-4 mt-1 mb-1  '>
                <div class='card'>
                  <img src='./adminArea/product_images/$product_image1' class='card-img-top ' alt='$product_image1'>
                  <div class='card-body'>
                  <h5 class='card-title'>$product_title</h5>
                  <p class='card-text'> $product_desc</p>
                  <p class='card-text'>Price:- $product_price /- inr</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                  <a name='ViewMore' href='productdetails.php?product_id=$product_id' class='btn btn-dark'>View more</a>
                  </div>
                </div>
                </div>";   } 

} 
      if($num==0){
        echo "<script> alert('no product found')</script>";
        echo "<h1 CLASS='TEXT-DANGER TEXT-CENTER MT-2'>NO PRODUCT FOUND</h1>";
}}}};



  /*function to get the ip address*/

   function getIpAddress(){
    //echo "<script> alert('your category has been inerted succeffuly.')</script>";
    //to know the ip address of user 
    //echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
     {  
      $ip = $_SERVER['HTTP_CLIENT_IP'];  
     }
     //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
     {  
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     } 
     //whether ip is from the remote address  
    else{  
      $ip = $_SERVER['REMOTE_ADDR'];  
      } 
      return $ip; 
    
   }

  /*cart function */
  function add_to_cart(){
    global $con;
    //echo"<script>alert('add_to_cart function is activated')</script>";
    //checking get varibale add_to_cart is set or not 
    if(isset($_GET['add_to_cart'])){
      //"<script>alert('add_to_cart get variable is set')</script>";
      $ip = getIpAddress();
      $get_product_id=$_GET['add_to_cart'];
      //echo"<script>alert('ip address is $ip and product id selected is $get_product_id')</script>";
      //select data from table cart_details where ip address is $ip and product id selected is $get_product_id
       $select_query_cart="SELECT * FROM `cart_` where product_id=$get_product_id and ip_address='$ip'";
       $result_select_query_cart=mysqli_query($con,$select_query_cart);
       if($result_select_query_cart){
      //fetching the data from table category from database
      $row_data_cart = mysqli_fetch_assoc($result_select_query_cart);
 
      //getting no of rows matching the keyword
       $num_cart = mysqli_num_rows($result_select_query_cart);
      
       if($num_cart>0){
        //echo "<script> alert('$num_cart number of rows')</script>";
        //echo "<script> alert('selected item is already present in your cart')</script>";
        


        echo "<script>window.open('index.php','_self')</script>";

       }else{
        //echo "<script> alert('inserting the selected item in your cart')</script>";
        //insert that data in cart table 
        $insert_query_cart="INSERT INTO `cart_` (`product_id`, `ip_address`, `quantity`) VALUES (' $get_product_id', '$ip', '0')";
        $result_insert_query_cart=mysqli_query($con, $insert_query_cart);
        echo "<script>window.open('index.php','_self')</script>"; 

       }
      
        


       }
       

       
    }
    //displaying total itemsInCart in navbar
    //increasing the itemsincart in navbar
    //echo "<script>
   //* document.getElementById('itemsInCart').innerText='$num_cart';
    
    
   // </script>";
  }


  /*displaytotalitemsincart() function*/ 
  function displaytotalitemsincart(){
    global $con;
    //echo"<script>alert('displaying total items in cart')</script>";
    $ip = getIpAddress(); 
    $select_query_cart="SELECT * FROM `cart_` where ip_address='$ip'";
    $result_select_query_cart=mysqli_query($con,$select_query_cart);
    if($result_select_query_cart){
    //fetching the data from table category from database
    $row_data_cart = mysqli_fetch_assoc($result_select_query_cart);
 
    //getting no of rows matching the keyword
    $num_cart = mysqli_num_rows($result_select_query_cart);
    echo "<script>
    document.getElementById('itemsInCart').innerText='$num_cart';
    </script>";
    }

  }

  /*function to display total price in navbar*/
  function displayTotalPrice(){
    global $con;
    $total_price=0;
    $ip = getIpAddress();
    //select those data from cart table where ip_address is currentipaddress logined
    $select_query_cart="SELECT * FROM `cart_` where ip_address='$ip'";
    $result_select_query_cart=mysqli_query($con,$select_query_cart);
    if($result_select_query_cart){
      //fetching the data from table category from database
      while( $row_data_cart = mysqli_fetch_assoc($result_select_query_cart)){
        $product_id=$row_data_cart['product_id'];
        $product_Qty=$row_data_cart['quantity'];
        //echo "<script> alert('$product_id')</script>";
        /*for those product_id which are in cart table for a particular ip address
        ,those we will get the price in product table */
        $select_query_product="SELECT * FROM `products` where product_id=$product_id";
        $result_select_query_product=mysqli_query($con,$select_query_product);
        if($result_select_query_product){
          while( $row_data_product = mysqli_fetch_assoc($result_select_query_product))
         {
          $product_price_product = $row_data_product['product_price'];
          $total_price = $total_price + $product_price_product*$product_Qty;
          $product_id_product = $row_data_product['product_id'];
          //echo "<script> alert('productid is $product_id_product and productprice is $product_price_product and totalcartprice=$total_price')</script>";
          echo "<script>
                  document.getElementById('totalPrice').innerText='$total_price/-INR';
                </script>";
         }
        
        }else{
          //echo "<script> alert('no data from products table selected some error plz check ')</script>";

        }}}

      }      
      

      /*function to showTotalPriceInCartPage(); */

      function showTotalPriceInCartPage(){
        global $con;
        
       // echo "<script> alert('showTotalPriceInCartPage function is activated')</script>";
        $total_price=0;
        $ip = getIpAddress();
        //select those data from cart table where ip_address is currentipaddress logined
        $select_query_cart="SELECT * FROM `cart_` where ip_address='$ip'";
        $result_select_query_cart=mysqli_query($con,$select_query_cart);
        if($result_select_query_cart){
          //fetching the data from table category from database
          while( $row_data_cart = mysqli_fetch_assoc($result_select_query_cart)){
            $product_id=$row_data_cart['product_id'];
            $product_qty=$row_data_cart['quantity'];
           // echo "<script> alert('$product_id and $product_qty')</script>";
            /*for those product_id which are in cart table for a particular ip address
            ,those we will get the price in product table */
            $select_query_product="SELECT * FROM `products` where product_id=$product_id";
            $result_select_query_product=mysqli_query($con,$select_query_product);
            if($result_select_query_product){
              while( $row_data_product = mysqli_fetch_assoc($result_select_query_product))
             {
              $singleproduct_price_product = $row_data_product['product_price'];
              $product_price_product = $singleproduct_price_product*$product_qty;
              $total_price = $total_price + $product_price_product;
              $product_id_product = $row_data_product['product_id'];
              //echo "<script> alert('productid is $product_id_product and productprice is $product_price_product and totalcartprice=$total_price')</script>";
              echo "<script>
                      document.getElementById('totalCartPrice').innerText='SubTotal:$total_price/-INR';
                    </script>";
             }
            
            }else{
              //echo "<script> alert('no data from products table selected some error plz check ')</script>";
    
            }}}
       
        
      }


      /*function to show the data in cart.php*/
      global $pr_id;

      function displayProductInCartPage(){
       // echo "<script> alert('displayProductInCartPage function is activated')</script>";
        global $con;
    $total_price=0;
    $ip = getIpAddress();
    //select those data from cart table where ip_address is currentipaddress logined
    $select_query_cart="SELECT * FROM `cart_` where ip_address='$ip'";
    $result_select_query_cart=mysqli_query($con,$select_query_cart);
    if($result_select_query_cart){
      //getting no of rows 
      $num_cart = mysqli_num_rows($result_select_query_cart);
      if($num_cart==0){
        echo "<script> alert('cart is empty')</script>";
        echo"<h1 class='text-center text-danger fs-1' id='EmptyCartMessage'>The cart is emtpty</h1>";
        $varible='none';
        echo"<script>
        let Heading_section=document.getElementById('Heading_section');
        Heading_section.style.display='none';
        </script>";
       
        
      }
      //fetching the data from table category from database
      while( $row_data_cart = mysqli_fetch_assoc($result_select_query_cart)){
         
        $product_id=$row_data_cart['product_id'];
        $product_qty=$row_data_cart['quantity'];
        //echo "<script> alert('$product_id')</script>";
        /*for those product_id which are in cart table for a particular ip address
        ,those we will get the price in product table */
        $select_query_product="SELECT * FROM `products` where product_id=$product_id";
        $result_select_query_product=mysqli_query($con,$select_query_product);
        if($result_select_query_product){


          while( $row_data_product = mysqli_fetch_assoc($result_select_query_product))
         {
          $product_title = $row_data_product['product_title'];
          $product_image1 = $row_data_product['product_image1'];
          $product_price_product = $row_data_product['product_price'];
          
          $product_id_product = $row_data_product['product_id'];
          $pr_id=$product_id_product;
          $total_product_price=$product_price_product*$product_qty;
          $total_price = $total_price + $total_product_price;
          
          
          //echo "<script> alert('productid is $product_id_product and productprice is $product_price_product and totalcartprice=$total_price')</script>";
          echo "
          <div class='row productSection'>
          <div class='col-2 border d-flex justify-content-center align-items-center text-center'>$product_title</div>
          <div class='col-2 border d-flex justify-content-center align-items-center pt-2 pb-2'>
            <img src='./adminArea/product_images/$product_image1' class='img-fluid'>
          </div>
          <div class='col-2 border d-flex justify-content-center align-items-center'>
          <div class='input-group' >
          <form action='' method='POST'>
          <input type='number' name='quantityInput' aria-label='First name' class='form-control'>
          <span>$product_qty</span>
          
          

              
              
              
          </div>
          </div>
          <div class='col-2 border d-flex justify-content-center align-items-center'>$total_product_price</div>
          <div class='col-2 border d-flex justify-content-center align-items-center'>
          <div class='form-check'>
             <input class='form-check-input' type='checkbox'   id='flexCheckIndeterminate'>
             
           </div>
          </div>
          <div class='col-2 border d-flex align-items-center justify-content-center'>
            
            
              
              <div  class='m-0 d-flex flex-column justify-content-center align-items-center' style='min-height:100%; min-width:100%;'>
              <input class=' form-control btn btn-primary btn-sm ms-1 me-1 mb-3 text-nowrap ' name='updateCart' type='submit' value='Update Cart' style=' border:2px solid #0d6efd; color:white; border-radius:5px;' ></input>
              <input class=' form-control btn btn-primary btn-sm ms-1 me-1 mb-3 text-nowrap ' name='removeItem' type='submit' value='Remove Item' style=' border:2px solid #0d6efd; color:white; border-radius:5px;' ></input>
              </div>
              </form>
              
              
            
          </div>
        </div>
                ";
                
                
         }
        
         
        
        }
        else{
         // echo "<script> alert('no data from products table selected some error plz check ')</script>";

        }}}
      
      
      }


/*function to for operatin btn and remove item in cart  */      
 function operationBtn(){
  global $con;
  
  
 
  $ip = getIpAddress( );
  //checiing that the updatebtn is clicked
  if(isset($_POST['updateCart'])){
    //checking tthat qunatity is input
    if(isset($_POST['quantityInput'])){

    }
    
      
        echo "<script> alert('updating the cart')</script>";
        $quantityInput=$_POST['quantityInput'];
        echo "<script> alert('$quantityInput  to be inputed for product id  $product_id')</script>";
        $update_cart="UPDATE `cart_` SET `quantity`='$quantityInput' WHERE ip_address='$ip'  ";
        $result_update_cart=mysqli_query($con,$update_cart);
        echo"<script>window.open('cart.php','_self')</script>";

       
  

    

  }else if(isset($_POST['removeItem'])){
    echo "<script> alert('removing the item from cart')</script>";

  }}
 

      

  


   
  







 



 
  
  
  
  
  
 

  
  
  



       ?>