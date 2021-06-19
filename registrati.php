<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrati</title>
</head>
<body>
    <!-- Bootstrap CSS -->

  <title>My Store</title>
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
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" id="brand" href="index.php">nunzistore</a>
                    <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="registrati.php">registrati</a>
                                
                            </li>                         
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php">Area Riservata</a>
                                
                            </li>                         
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                                
                            </li>                         
                        </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<br>
<center>
<h3 id="groups">Registrati</h3>
</center>
<div id="component">
                   <br>
                    <form>
                        <div class="form-row mx-3">
                            <div class="col-md-12 form-group text-center">
                                <input class="form-control" type="text" id="name" placeholder="Nome">
                            </div>
                        </div>
                        <div class="form-row mx-3">
                            <div class="col-md-12 form-group text-center">
                                <input class="form-control" type="text" id="telefono" placeholder="telefono">
                            </div>
                        </div>
                        <div class="form-row mx-3">
                            <div class="col-md-12 form-group text-center">
                                <input class="form-control" type="password" id="pass" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row mx-3">
                            <div class="col-md-12 form-group text-center">
                                <button type="button" class="btn btn-success" id="registerBtn">Registrati</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
                <center>
                
                <p>hai gia un account? <a href="login.php">effettua il login</a></p>
                </center>

<script src="resources/js/homepage.js"></script>
</body>
</html>