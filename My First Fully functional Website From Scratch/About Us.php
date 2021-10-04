<?php session_start();
$isEmpty= sizeof($_SESSION['cart']);
$username=$_SESSION['user'];
if(isset($_POST['btnCart'])){
    if($isEmpty < 1){
       echo '<script>
      alert("Nothing in cart");
      window.location.href="http://localhost/ITEC%20Dev2/Index.php";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Just4Design-About Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/css/Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: #ffffff;background-image: url(&quot;assets/img/2312673.jpg&quot;);"><img
        src="assets/img/Picture12.png" style="height: 152px;margin-left: 15px;margin-top: 10px;">
        <form method="POST" >
    <nav class="navbar navbar-light navbar-expand-md navigation-button" style="margin-right: 20px;margin-left: 250px;margin-top: -125px;background-color: rgba(255,255,255,0.49);height: 49px;width: 910px;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="margin-right: 0px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width: 764px;margin-right: 10px;">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation" style="width: 547px;"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <a href="http://localhost/ITEC%20Dev2/Cart.php" target="_self"> <button name="btnCart" method= "POST" type="submit" style="margin-right: 22px;margin-top: -0;margin-left: -75px;">Cart(<?php echo $isEmpty;  ?>)</button></a> 
                <a><strong id="User"  style="margin-right: 15px;margin-top: -0;" ><?php echo $username ?></Strong></a>
                <div class="dropdown"><a class="dropdown-toggle border rounded-0" data-toggle="dropdown" aria-expanded="false" href="#" style="padding: 7px;padding-top: 0px;padding-right: 9px;color: #ffffff;padding-left: -25px;background-color: #585858;margin-left:
                         0px;margin-right: -13px;margin-top: 0px;padding-bottom: 4px;">Menu&nbsp;</a>
                    <div class="dropdown-menu" role="menu" style="margin-left: -83px;">
                        <a class="dropdown-item" role="presentation" href="http://localhost/ITEC%20Dev2/index.php">Store</a>
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
    <div  class="row" style="margin-top: 100px;height: 500px;margin-right: 100px;margin-left: 100px;">
        <div class="contact" style="background-color: rgba(241,247,252,0);height: 600px;">
            <h1 class="text-left">About Us</h1>
            <p class="text-left" style="height: 150px;">
                Covid 19. Retrenched geen hoop. Gebore uit n masker vir elk in die gesin.<br/>
                Toe besluit ek om vir ander mense te help om ook maskers te kry gratis. <br/>
                Dit is hier waar iemand my omgepraat het om maskers te begin verkoop. <br/>
                Dit is waar alles begin het.<br/>
                 Ons het vir vriende maskers gemaak en toe kom die eerste groot bestelling wat <br/>
                 ons op die bord gesit het ons kon toerusting begin koop om printing te doen. <br/>
                Dit is waar Just 4 Design eers regtig begin het. <br/>
                So huidiglik doen ons grafiese ontwerp, klein sublimation werke, flex printing,<br/>
                 screen printing, maak van klere, herverkope van klere, staalwerk en houtwerk. <br/>
                Ons leuse is: As iemand anders dit kon doen, dan kan ons ook. <br/>
                Niks is onmoontlik.<br/> 
                Wees positief.</p>
        </div>
        <div class="col-xl-4" style="height: 198px;padding-right: 15px;margin-right: 0px;">
            <h2 style="font-family: Aclonica, sans-serif;">CEO And Founder</h2>
            <img class="border rounded-0 border-dark" src="assets/img/Ceo.jpg" style="height: 150px;margin-right: 10px;" onclick="imageClick()">
            <img class="border rounded-0 border-dark" src="assets/img/Founder.jpg" style="height: 150px;margin-left: 10px;" onclick="imageClick()">
        </div>

    </div>

    
    <div class="footer-basic" style="height: 120px;">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="http://localhost/ITEC%20Dev2/index.php">Home</a>
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
    <script src="D:\XAMPP\htdocs\ITEC Dev2\Index\Script.js"></script>
</body>

</html>