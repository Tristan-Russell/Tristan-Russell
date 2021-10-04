<?php
include('DB_Connect.php');
include('AddToCart.php');
$isEmpty = sizeof($_SESSION['cart']);
$username = $_SESSION['user'];
$Login = $_SESSION['LoggedIn'];
if (!$Login) {
    echo '<script>
        alert("You Are not Logged In please Login");
        window.location.href="http://localhost/ITEC%20Dev2/Home.php";
        </script>';
}
if (isset($_POST['btnCart'])) {
    if ($isEmpty < 1) {
        echo '<script>
      alert("Nothing in cart");
      window.location.href="http://localhost/ITEC%20Dev2/Index.php";
      </script>';
    } else {
        header("Location: Cart.php ");
    }
}

$prodName = $_GET['name'];
$_SESSION['prodName'] = $prodName;

$sql = "SELECT prodDescription, prodValue From product WHERE  prodName='$prodName' ";
$result = mysqli_query($conn, $sql);
$row  =  mysqli_fetch_array($result);
$Description = $row['prodDescription'];
$prodValue = $row['prodValue'];
switch ($prodName) {
    case "mShirts":
        $imgSrc = 'assets/img/Picture5.jpg';
        break;

    case "wShirts":
        $imgSrc =  'assets/img/Picture6.jpg';
        break;

    case "mHoodies":
        $imgSrc =  'assets/img/Picture10.jpg';
        break;

    case "wHoodies":
        $imgSrc = 'assets/img/Picture7.jpg';
        break;

    case "Buffs":
        $imgSrc = 'assets/img/Picture2.jpg"';
        break;

    case "Masks":
        $imgSrc =  'assets/img/Picture8.jpg';
        break;

    case "Keychains":
        $imgSrc =  'assets/img/Picture3.jpg';
        break;

    case "Mugs":
        $imgSrc = 'assets/img/Picture9.jpg';
        break;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Just4Design-Product</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/css/Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="Script.js"></script>
</head>

<body style="background-color: #ffffff;background-image: url(&quot;assets/img/2312673.jpg&quot;);"><img src="assets/img/Picture12.png" style="height: 152px;margin-left: 15px;margin-top: 10px;" onclick=" window.location.href='index.php' ">

    </div>
    <h1 style="margin-left: 100px;">Product Name</h1>
    <form method="POST">
        <nav class="navbar navbar-light navbar-expand-md navigation-button" style="margin-right: 20px;margin-left: 250px;margin-top: -125px;background-color: rgba(255,255,255,0.49);height: 49px;width: 910px;">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="margin-right: 0px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="width: 764px;margin-right: 10px;">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation" style="width: 547px;"></li>
                        <li class="nav-item" role="presentation"></li>
                    </ul>
                    <a href="http://localhost/ITEC%20Dev2/Cart.php" target="_self"> <button name="btnCart" method="POST" type="submit" style="margin-right: 22px;margin-top: -0;margin-left: -75px;">Cart(<?php echo $isEmpty;  ?>)</button></a>
                    <a> <strong id="User" style="margin-right: 15px;margin-top: -0;"><?php echo $username ?></Strong></a>


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
    <div class="contact" style="background-color: rgba(241,247,252,0);height: 800px;">

        <img class="border rounded-0 border-dark" id="prodImg" src="<?php echo $imgSrc ?>" style="height: 300px; width: 300px;margin: 0px;margin-left: 100px">

        <form action="AddToCart.php" method="POST" style="margin-left: 100px;margin-top: 32px;height: 375px;width: 302px;padding-top: 20px;background-color: rgba(255,255,255,0.46);">
            <strong>
                <p style="width: 600px;margin-top: -160px;margin-left: 420px;height: 150px;"><?php echo  $Description; ?><br />
                    Price: R<?php echo  $prodValue; ?></p>
            </strong>



            <select class="form-control" name="colour1" style="margin-bottom: 10px;">
                <optgroup label="Choose your primary colour">
                    <option value="Black" selected="">Black</option>
                    <option value="Blue">Blue</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                </optgroup>
            </select>

            <select class="form-control" name="colour2" style="margin-bottom: 10px;">
                <optgroup label="Choose your secondary colour">
                    <option value="Black" selected="">Black</option>
                    <option value="Blue">Blue</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                </optgroup>
            </select>

            <select class="form-control" name="size" style="margin-bottom: 10px;">
                <optgroup label="Choose your size">
                    <option value="SS" selected="">SS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXXL">XXXL</option>
                </optgroup>
            </select>

            <h5>Upload Design</h5><input type="file" style="margin-bottom: 15px;">
            <div class="form-group"><button name="btnAdd" class="btn border rounded-0" type="submit" style="background-color: #585858;color: rgb(255,255,255);">Add to cart</button></div>
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

</body>

</html>