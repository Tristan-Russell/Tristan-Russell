<?php
 include('DB_Connect.php'); 
include('Login.php');
$_SESSION['cart']=array();
$_SESSION['cart2']=array();
$isEmpty= sizeof($_SESSION['cart']);
$_SESSION['LoggedIn']= FALSE;
$_SESSION['user']= "User" ;

if(isset($_POST['btnCart'])){
    if($isEmpty < 1){
       echo '<script>
      alert("Nothing in cart");
      window.location.href="http://localhost/ITEC%20Dev2/Home.php";
      </script>';
    }
    else{
        header("Location: Cart.php ");
    }
  }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no ,user-scalable=0">
    <title>Just4Design-Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body onload="hideElements()" style="background-color: #ffffff;background-image: url(&quot;assets/img/2312673.jpg&quot;);">

    <img src="assets/img/Picture12.png" style="height: 156px;margin-left: 15px;margin-top: 10px;" onclick="goHome()">
    <form method="POST" >
    <nav class="navbar navbar-light navbar-expand-md navigation-button" style="margin-right: 20px;margin-left: 250px;margin-top: -125px;background-color: rgba(255,255,255,0.49);height: 49px;width: 910px;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="margin-right: 0px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width: 764px;margin-right: 10px;">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation" style="width: 547px;"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <a href="http://localhost/ITEC%20Dev2/Cart.php" target="_self"> <button name="btnCart" method= "POST" type="submit" style="margin-right: 22px;margin-top: -0;margin-left: -75px;">Cart(<?php echo $isEmpty;  ?>)</button></a> 
                <a > <button id="registerBtn" type="button" style="margin-right: 15px;margin-top: -0;" onclick="showSignUp()">Sign Up</button></a>
                <a > <button id="loginBtn"type="button" style="margin-right: 55px;margin-top: -0;" onclick="showLogin()">Log In</button></a>
               
                <div class="dropdown"><a class="dropdown-toggle border rounded-0" data-toggle="dropdown" aria-expanded="false" href="#" style="padding: 7px;padding-top: 0px;padding-right: 9px;color: #ffffff;padding-left: -25px;background-color: #585858;margin-left:
                         0px;margin-right: -13px;margin-top: 0px;padding-bottom: 4px;">Menu&nbsp;</a>
                    <div class="dropdown-menu" role="menu" style="margin-left: -83px;">
                        <a class="dropdown-item" role="presentation" href="http://localhost/ITEC%20Dev2/Home.php">Store</a>
                        <a class="dropdown-item" role="presentation" href="http://localhost/ITEC%20Dev2/Contact Us.php">Contact
                            Us</a>
                        <a class="dropdown-item" role="presentation" href="http://localhost/ITEC%20Dev2/About Us.php">About
                            Us</a>
                    </div>
                </div><span class="navbar-text actions"> </span>
            </div>
        </div>
    </nav>
    </form>

    <div id="register" class="register-photo" style="background-color: rgba(241,247,252,0);">
        <div class="form-container">
            <form action ="register.php" method="POST" style="background-color: #dddddd;">

                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <input class="form-control" name="a1" type="text" placeholder="Address Line 1" style="margin-bottom: 15px;">
                <input class="form-control" name="a2" type="text" placeholder="Address Line 2" style="margin-bottom: 15px;">
                <input class="form-control" name="p" type="text" placeholder="Province" style="margin-bottom: 15px;">
                <input class="form-control" name="pc" type="text" style="width: 50%;margin-bottom: 10px;" placeholder="Postal Code">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username/Email">

                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control " placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input name="LA" class="form-check-input" type="checkbox">I agree to the <a href="Terms.html">license terms.</a></label></div>
                </div>
                <div class="form-group"><button name="register" class="btn btn-primary" type="submit" style="background-color: rgba(255,0,199,0.49);color: rgb(255,255,255);">Sign Up</button>

                </div>
            </form>
        </div>
    </div>

    <div id="login" class="login" style="background-color: rgba(241,247,252,0); ">
        <form action ="Login.php" method="post" style="background-color: rgb(221,221,221);">
            <h3 class="text-center" style="margin-bottom: 15px;">Log In</h3>
            <div class="form-group"><input class="form-control" type="email" name="username" placeholder="Email">
            </div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group"> <button name ="login" class="btn btn-block" type="submit" style="background-color: rgba(255,0,199,0.49);color: rgb(255,255,255);">Log In</button>
            </div>
        </form>
    </div>

    <div id="products" class="row" style="margin-top: 100px;height:800px;margin-right: 10px;margin-left: 100px;">
        <div class="col-xl-4 offset-xl-0" style="height: 198px;width: 355px;">
            <h2 style="font-family: Aclonica, sans-serif;">T-Shirts</h2>
            <img name="mShirts" class="border rounded-0 border-dark" src="assets/img/Picture5.jpg" style="height: 150px;margin: 0px;margin-right: 10px;" onclick="imageClick(this.name)">
            <img name="wShirts" class="border rounded-0 border-dark" src="assets/img/Picture6.jpg" style="height: 150px;margin-left: 10px;" onclick="imageClick(this.name)">
        </div>
        <div class="col-xl-4" style="height: 198px;padding-right: 15px;margin-right: 0px;">
            <h2 style="font-family: Aclonica, sans-serif;">Hoodies</h2>
            <img name="mHoodies"class="border rounded-0 border-dark" src="assets/img/Picture10.jpg" style="height: 150px;margin-right: 10px;" onclick="imageClick(this.name)">
            <img name="wHoodies"class="border rounded-0 border-dark" src="assets/img/Picture7.jpg" style="height: 150px;margin-left: 10px;" onclick="imageClick(this.name)">
        </div>
        <div class="col-xl-4" style="height: 198px;">
            <h2 style="font-family: Aclonica, sans-serif;">Mugs</h2>
            <img name="Mugs"class="border rounded-0 border-dark" src="assets/img/Picture9.jpg" style="height: 150px;" onclick="imageClick(this.name)">
        </div>
        <div class="col-xl-4">
            <h2 style="font-family: Aclonica, sans-serif;">Buffs</h2>
            <img name="Buffs"class="border rounded-0 border-dark" src="assets/img/Picture2.jpg" style="height: 150px;" onclick="imageClick(this.name)">
        </div>
        <div class="col-xl-4">
            <h2 style="font-family: Aclonica, sans-serif;">Masks</h2>
            <img name="Masks"class="border rounded-0 border-dark" src="assets/img/Picture8.jpg" style="height: 150px;" onclick="imageClick(this.name)">
        </div>
        <div class="col-xl-4">
            <h2 style="font-family: Aclonica, sans-serif;">Keychains</h2>
            <img name="Keychains"class="border rounded-0 border-dark" src="assets/img/Picture3.jpg" style="height: 150px;" onclick="imageClick(this.name)">
        </div>
    </div>
    <div class="footer-basic" style="height: 120px;">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="http://localhost/ITEC%20Dev2/Home.php">Home</a>
                </li>
                <li class=" list-inline-item"><a href="http://localhost/ITEC%20Dev2/Contact Us.php">Contact</a>
                </li>
                <li class="list-inline-item"><a href="http://localhost/ITEC%20Dev2/About Us.php">About</a>
                </li>
            </ul>
            <p class="copyright">Just4Design © 2020</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="Script.js"></script>

</body>

</html>