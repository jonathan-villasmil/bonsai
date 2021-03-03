<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/bonsai.css">
    <link rel="icon" href="dev/img/logobons.svg">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
</head>
<body>
   
    <div class="container-fluid containertop mb-5">
        <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark col-12 ">
                    <a class="navbar-brand col-2 logo-cont text-dark" href="#"> <img src="dev/img/icon.png" class ="img-fluid p-2 w-75"alt="">Bonsai Co.&reg; </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav w-75 mx-auto nav-justified">
                            <li class="nav-item">
                                <a class="nav-link text-dark nav-fill" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark nav-fill" href="#">Our mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark nav-fill" href="#">Catalogue </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark nav-fill"  href="#">Contact</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-dark nav-fill" href="signup.php">LogIn/SignUp</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>
        
        <div class="row ">
            <div class="col-md-3 mx-auto mb-5 mt-5">
                <div class="card border border-success">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Log In</h4>
                        <p>or <a href="signup.php">Sign Up</a></p>
                    </div>
                    <div class="card-body">
                        <?php include("formlogin.php")?>       
                    </div>
                </div>
                       
            </div>
        </div>
    </div>

    <div class="container-fluid container-bottom">
        
        <!--footer-->
        <?php
            include("footer.php")
        ?>
    </div>
       
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
<script src="public/js/flick.js"></script>
</body>
</html>