<?php
include 'DB_Connect.php';
session_start();
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
echo '<script src="Script.js">> </script>';
    if (isset($_POST['send'])) {
        $Email = $_POST['email'];
        $Name = $_POST['name'];
        $Message = $_POST['message'];

        $sql = "INSERT INTO Contact_Us ( cuName, cuEmail, cuMessage)
        VALUES ('$Name','$Email','$Message')";

        $result = mysqli_query($conn, $sql);
        if ($result)
        {
        echo "<script type='text/javascript'>alert('Message Recieved'); window.location.href = 'Contact Us.php';</script>";
        }
        else
        {
        echo "<script type='text/javascript'>alert('ERROR!'); window.location.href = 'Contact Us.php';</script>";
        }
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Just4Design-Contact Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body style="background-color: #ffffff;background-image: url(&quot;assets/img/2312673.jpg&quot;);"><img src="assets/img/Picture12.png" style="height: 152px;margin-left: 15px;margin-top: 10px;">
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
    <div  id="contact" class="contact-clean" style="background-color: rgba(241,247,252,0);">
        <form  action= "Contact Us.php" name ="contact" method="post" style="background-color: rgba(255,255,255,0.6);">
        <div class="form-container">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name">
            </div>
            <div class="form-group"><input class="form-control " type="email" name="email" placeholder="Email"></div>

            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-block" name="send"  type="submit" style="background-color: #585858;color: rgb(255,255,255);">Send </button>
            </div>
            </div>
        </form>
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
    <script src="Script.js"></script>
    
</body>

</html>