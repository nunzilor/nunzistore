<?php
 session_start();

 if(!isset($_SESSION['admin_id'])){
     header('location:../');
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
  <title>pannello admin</title>
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
            <div class="col-sm-10 text-center pt-3">
                <p id="brand">nunzistore</p>
            </div>
            <div class="col-sm-2 text-center pt-3">
                <h5><a style="color:white; text-decoration:none" href="logout.php">Logout <i class="fa fa-user-circle"></i></a></h5>
            </div>
        </div>
    </div>
</div>

<div id="bodySection">
    <div class="container">
        <div class="row py-3">
               
                <div class="col-md-12 text-center">
                    <div id="loginSection" class="p-4">
                    <h3 id="groups">aggiungi prodotti</h3><br>
                    <div id="products">
                        <form id="addProduct" enctype="multipart/form-data">
                            <div class="form-row py-1">
                                <div class="form-group col-md-3">
                                    <input name="name" type="text" id="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input name="price" type="text" id="price" class="form-control" placeholder="prezzo" required>
                                </div>
                                <div class="form-group col-md-4 text-left">
                                    <div class="input-group mb-3" id="imageBox">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="pimage" required>
                                            <label class="custom-file-label" for="pimage">aggiungi immagine</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="submit" class="form-control btn btn-success" name="submitBtn" value="Add+">
                                    </div>
                                </div>
                            </div>
                        
                        </form>
                        <div id="productList"></div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<script src="../resources/js/dashboard.js"></script>

</body>

</html>