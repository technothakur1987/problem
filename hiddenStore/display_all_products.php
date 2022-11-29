<?php
include("./include/connect.php");
include("./commonFunctions/functions.php");
?>


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
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="./assets/images/logo.webp" class=" d-inline-block align-text-top"  width="180" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="display_all_products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup id="itemsInCart">0</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Total Price :<span id="totalPrice">000/-Inr</span></a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input name="searchInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <input  name="searchBtn" type=submit value="Search" class="btn btn-outline-light" ></input>
      </form>
    </div>
  </div>
</nav>

<!--login alert-->
<div class="container-fluid loginAlert text-white pt-3  ">
  <ul class="list-unstyled d-flex align-items-center">
    <li>Welcome User</li>
    <li class="ms-3">login</li>
  </ul>
</div>

<!--mainpage starts here-->
<div class="container-fluid bg-light mt-0 mb-0">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">Communication is the heart of ecommerce and community.</p>
</div>

<!--product and sidenav-->
<div class="container-fluid">
  <div class="row">
    <div class="col-10 mb-5">
      <div class="row mb-5 productSection">

     <?php
     displayAllProducts();
     displayProductWhenCatIsSet();
     displayProductWhenBrandIsSet();
     displaytotalitemsincart();
     displayTotalPrice();
      ?>
        
        
      </div>
    </div>
    <div class="col-2 cateories-brand-section ps-0 pe-0">
      <div class="card bg-dark text-white " style="height: 50%; " >
        
        <div class="card-body ps-0 pe-0 text-center">
          <h5 class="card-title bg-primary pt-2 pb-2 "> <a href="#" class="text-white text-decoration-none"> BRANDS  </a></h5>
          <?php
          displayBrandsSideNav();
          
          ?>
        </div>
      </div>
      <div class="card bg-dark text-white  " style="height: 50%;" >
        
        <div class="card-body ps-0 pe-0 pb-5 mb-5 text-center">
          <h5 class="card-title bg-primary pt-2 pb-2  "><a href="#" class="text-white text-decoration-none">CATEGORIES</a></h5>
          <?php
            displayCategorySideNav();
           ?>
          
        </div>
      </div>
    </div>
  </div>
</div>


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