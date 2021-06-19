<?php
 session_start();
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
  <title>pagina admin</title>
  <link rel="stylesheet" href="resources/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/css/stylesheet.css">
    <script src="resources/Jquery/jquery-3.5.1.js"></script>
    <script src="resources/Bootstrap/js/bootstrap.min.js"></script>
    <script src="resources/js/sweetalert.min.js"></script>
</head>

<body>

<div id="headerSection" class="sticky-top">
    <div class="container" >
        <div class="row">
            <div class="col-md-12 text-center py-2">
                <a class="navbar-brand" id="brand" href="#">pagina admin</a>
            </div>
        </div>
    </div>
</div>

<div id="bodySection">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <h3 id="groups">Admin Login</h3><br>
                <div id="adminSection" class="text-center p-5">
                    <form>
                        <div class="form-row py-1">
                            <div class="form-group col-md-12 px-4">
                            <input type="text" id="id" class="form-control" placeholder="Admin ID">
                            </div>
                        </div>
                        <div class="form-row py-1">
                            <div class="form-group col-md-12 px-4">
                            <input id="pass" type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
              
                        <div class="form-row py-1">
                            <div class="form-group col-md-12 px-4">
                            <input type="button" onclick="loginFun()" id="loginbtn" class="form-control btn btn-success" value="Login">
                            </div>
                        </div>
                        <div class="form-row py-1">
                            <div class="form-group col-md-12 px-5">
                            <a href="index.php" class="form-control btn btn-primary">vai al login</a>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row py-1" id="pArea">
        </div>
    </div>
</div>

<script src="resources/js/admin-login.js"></script>

</body>

</html>