<?php
include 'db_connect.php'; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deliver Medicine </title>
    <link rel="stylesheet" href="css/style2.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">


    <style>
    .logo {
      width: 3%;
      height: auto;
    }

    .navbar .nav-link {
      color: rgb(250, 251, 251) !important;;
    }

    .bg-secondary {
      background-color:rgb(99, 102, 105) !important;
    }

    .nav-item .text-light {
      color: #fff !important;
    }

    .card-img-top {
      height: 180px;
      object-fit: cover;
    }
  </style>




</head>
<body>

<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(12, 100, 189);">


    <div class="container-fluid">
      <img src="./images/logo.jpg" alt="" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="medicine.php">Medicines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donation.php">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col-md-10">
      <!-- Products -->
      <div class="row">
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/napa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Napa</h5>
              <p class="card-text">Tablet Paracetamol</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/molom.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pevetin</h5>
              <p class="card-text">Cream Econazole Nitrate + Triamcinolone Acetonide</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/peracitamol.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Peracitamol</h5>
              <p class="card-text">For pain and fever relief.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/moov.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Moov</h5>
              <p class="card-text">Pain relief ointment.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/montair.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Montair</h5>
              <p class="card-text">For allergies and asthma.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/cough.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Serup</h5>
              <p class="card-text">Cough syrup</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/gas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gas-x</h5>
              <p class="card-text">Relieves gas and bloating.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/dermasol.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dermasol</h5>
              <p class="card-text">For skin conditions</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/napaserup.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Napa-serup</h5>
              <p class="card-text">Pain and fever relief</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/selain.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ORS</h5>
              <p class="card-text">Used to prevent or treat dehydration caused by diarrhea, vomiting, or excessive sweating.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/vitaminc.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Vitamin C</h5>
              <p class="card-text">Boosts immunity and supports skin health.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./images/bernol.jpg" class="card-img-top" alt="Vitamin C">
            <div class="card-body">
              <h5 class="card-title">Vitamin C</h5>
              <p class="card-text">Boosts immunity and supports skin health.</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar with Delivery Branch -->
    <div class="col-md-2 bg-secondary">
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>Delivery Areas</h4></a>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Dhanmondi</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Gulshan</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Banani</a>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Uttara</a>
        </li>

        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Mirpur</a>
        </li>


        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Mohammadpur</a>
        </li>
     


        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Motijheel</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Sylhet</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Chittagong</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Mohammadpur</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Khulna</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Rajshahi</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Barisal</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Rangpur</a>
        </li>
     

        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Shantinagar</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Farmgate</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Banasree</a>
        </li>
<li class="nav-item ">
          <a href="#" class="nav-link text-light">Jatrabari</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Kallyanpur</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Narayanganj</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Cumilla</a>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link text-light">Cox's Bazar</a>
        </li>



      </ul>

    </div>
  </div>

  <div class="bg-info p-3 text-center">
    <p class="mb-0">Support us and donate to others</p>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsD6mJpsgFEXF1u9eF1ro6/1d3v0sY5f5RRA6B" crossorigin="anonymous"></script>

</body>
</html>






