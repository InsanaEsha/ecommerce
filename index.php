<?php
include('includes/connect.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce website</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- external css -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- navbar -->
  <div class="container-fluid p-0">
      <!-- first child -->
      <nav class="navbar navbar-expand-lg bg-info text-white">
  <div class="container-fluid">
   <img src="./img/logo.jpg" alt="not found" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price : 100/=</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg nav-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>
<!-- third child -->
<div class="bg-light text-center p-3">
  <h1>OUR PRODUCT</h1>
  <p> Find what you are looking for!</p>
</div>
<!-- fourth child -->
<div class="container">
  <div class="row mt-2 mb-2">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      <div class="col-md-4 mb-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/honey.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more..</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/honey.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more..</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/honey.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more..</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/honey.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more..</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="./img/honey.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Honey</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- sidenav -->
    <ul class="navbar-nav me-auto text-center">
      <!-- display brands -->
      <li class="nav-item bg-info">
            <a class="nav-link text-white " href="#">Delivery Brands</a>
      </li>
      <?php
          
        $select_brands="Select * from `brands`";
        $result_brands=mysqli_query($con, $select_brands);
        // $row_data=mysqli_fetch_assoc($result_brands);
        // echo $row_data['brand_title'];
        while($row_data=mysqli_fetch_assoc($result_brands)){
          $brand_title=$row_data['brand_title'];
          $brand_id=$row_data['brand_id'];
          echo "<li class='nav-item'>
                  <a class='nav-link text-white' href='index.php?brand=$brand_id'>$brand_title</a>
                </li>";
        }
      ?>

    </ul>
    <ul class="navbar-nav me-auto text-center">
      <!-- display catagories -->
      <li class="nav-item bg-info">
            <a class="nav-link text-white " href="#">Catagories</a>
      </li>
      <?php
      $select_catagory="Select * from `catagories`";
      $result_catagory=mysqli_query($con, $select_catagory);
      while($row_data=mysqli_fetch_assoc($result_catagory)){
          $catagory_title=$row_data['catagory_name'];
          $catagory_id=$row_data['catagory_id'];
          echo "<li class='nav-item'>
                  <a class='nav-link text-white' href='index.php?catagory=$catagory_id'>$catagory_title</a>
                </li>";
        }
      ?>

    </ul>
  </div>
</div>
</div>

<!-- last child -->

<div class="bg-info text-center p-3">
  <p>All rights goes to ecommerce website</p>
</div>
</div>
   <!--  bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>