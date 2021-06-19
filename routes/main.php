<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location:logout.php');
    }
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <title>principale</title>
  <link rel="stylesheet" href="../resources/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/css/stylesheet.css">
    <script src="../resources/Jquery/jquery-3.5.1.js"></script>
    <script src="../resources/Bootstrap/js/bootstrap.min.js"></script>
    <script src="../resources/js/sweetalert.min.js"></script>
    </head>

<body>

<div id="headerSection" class="sticky-top">
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" id="brand" href="#">nunzistore</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="main.php">Vetrina Prodotti</a>
                            </li>                         
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Carrello <span class="badge badge-danger badge-pill" id="count" style="font-size:15px"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"> Logout <i class="fa fa-user-circle"></i></a>
                            </li>                         
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div id="bodySection">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-12 text-center">
                <div id="component">
                    <div id="productArea"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../resources/js/main.js"></script>

</body>

</html>