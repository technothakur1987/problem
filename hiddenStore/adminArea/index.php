<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--fontawsome cdn link-->
     <script src="https://kit.fontawesome.com/e357c704ca.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>Hidden Store:Right place to get the best Deals Online</title>
    <!--custom css-->
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
   <!--navbar-->
   <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="../assets/images/logo.webp" class=" d-inline-block align-text-top"  width="180" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end" style="width:100%;">
        <li class="nav-item">
          <a class="nav-link active text-light " aria-current="page" href="#">Welcome Guest</a>
        </li>
       
        
      </ul>
      
    </div>
  </div>
</nav>

<!--manage details-admin-->
<div class="container-fluid pt-3  ">
  <h3 class="text-center">
    Manage Details
  </h3>
</div>

<!--admin panel-->
<div class="container-fluid bg-secondary admin-panel">
  <div class="row">
    <div class="col-2 admin-pic-name d-flex flex-column justify-content-center align-items-center">
      <img src="../assets/images/mangojuice1.webp" class="img-fluid adminimg mt-3 ">
      <p class="admin-name ">Admin Name</p>
    </div>
    <div class="col-10 admin-buttons">
    <div class="row h-100 pt-1 pb-1 ps-1 pe-1">
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="index.php?insert_products" class="btn text-decoration-none border bg-primary text-white ">Insert Products</a>
      </div>
      <div class="col-2 border bg-white  pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="#" class="btn text-decoration-none border bg-primary text-white ">View Products</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="index.php?insert_categories" class="btn text-decoration-none border bg-primary text-white">Insert Categories</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="#" class="btn text-decoration-none border bg-primary text-white">View Categories</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="index.php?insert_brands" class="btn text-decoration-none border bg-primary text-white">Insert Brands</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="#" class="btn text-decoration-none border bg-primary text-white">View Brands</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="#" class="btn text-decoration-none border  bg-primary text-white">All Orders</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="#" class="btn text-decoration-none border bg-primary text-white">All Payments</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="#" class="btn text-decoration-none border bg-primary text-white">List Users</a>
      </div>
      <div class="col-2 border bg-white pt-2 pb-2 flex-fill mt-2 mb-2 d-flex justify-content-center align-items-center">
        <a href="#" class="btn text-decoration-none border bg-primary text-white">Log Out</a>
      </div>
      
    </div>

    </div>
  </div>

  
</div>

<?php
/*checking that the get variable insert_categories is set or not ,, if 
set include the insertcategories.php*/

if(isset($_GET['insert_categories'])){
  include('insertCategories.php');

}elseif(isset($_GET['insert_brands'])){
  include('insertBrands.php');

}elseif(isset($_GET['insert_products'])){
  include('insertProducts.php');

}



?>








<!--Footer-->
<div class="container-fluid bg-primary fixed-bottom pt-3 pb-3">
  <h5 class="text-center text-light">All Rights Reserved &#169; HiddenStores</h5>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>