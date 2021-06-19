<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <!-- Bootstrap CSS -->

  <title>nunzistore</title>
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
                    <div class="collapse navbar-collapse" id="navbarNav">
                    
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="registrati.php">Registrati</a>
                                
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
<h3 id="groups" >Login</h3>
</center>
<div id="component">
<br>
                    <form>
                        <div class="form-row mx-3">
                            <div class="col-md-12 form-group text-center">
                                <input class="form-control" type="text" id="telefono" placeholder="telefono">
                            </div>
                        </div>
                        <div class="form-row mx-3">
                            <div class="col-md-12 form-group text-center">
                                <input class="form-control" type="password" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row mx-3">
                            <div class="col-md-12 form-group text-center">
                                <button type="button" class="btn btn-primary" id="loginBtn">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
           
                <br>
                <center>
                <p>per accedere alla vetrina fare login.</p>
                <p>non hai un account? <a href="registrati.php">registrati</a></p>
                </center>

<script src="resources/js/homepage.js"></script>
</body>
</html>