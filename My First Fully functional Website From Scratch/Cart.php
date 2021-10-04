<?php
include('DB_Connect.php');
session_start();
$isEmpty = sizeof($_SESSION['cart']);
$username = $_SESSION['user'];
$sql = "SELECT * FROM customer WHERE cEmail='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$userID = $row['cID'];
$AddressLine1 = $row['cAddressLine1'];
$AddressLine2 = $row['cAddressLine2'];
$Province = $row['cProvince'];
$Postal = $row['cPostalCode'];

$Login = $_SESSION['LoggedIn'];
if (!$Login) {
    echo '<script>
    alert("You Are not Logged In please Login");
    window.location.href="http://localhost/ITEC%20Dev2/Index.php";
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


if (isset($_POST['btnCheckout'])) {
    $username = $_SESSION['user'];
    $sql2 = " SELECT cID From customer WHERE cEmail ='$username' ";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $userID = $row2['cID'];
    $Total = $_SESSION['Total'];
    $allProduct = $_SESSION['allProducts'];
    $allDetail = $_SESSION['allDetails'];
    $sql4 = "INSERT INTO cart (cEmail, cID, prodName, prodDetails ,ordTotal, ordDate)
          VALUES ('$username','$userID','$allProduct','$allDetail','$Total',now())";
    $result4 = mysqli_query($conn, $sql4);

    $sql5 = " SELECT * FROM cart WHERE ordNumber =(SELECT max(ordNumber) FROM cart)";
    $result5 = mysqli_query($conn, $sql5);
    $row5 = mysqli_fetch_array($result5);
    $ordNum = $row5['ordNumber'];

    echo "<script type='text/javascript'>alert('Your order number is: $ordNum'); 
                window.location.href = 'Home.php';
                </script>";

    session_unset();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Just4Design-Cart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/css/Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: #ffffff;background-image: url(&quot;assets/img/2312673.jpg&quot;);"><img src="assets/img/Picture12.png" style="height: 152px;margin-left: 15px;margin-top: 10px;">
    <form method="POST">
        <nav class="navbar navbar-light navbar-expand-md navigation-button" style="margin-right: 20px;margin-left: 250px;margin-top: -125px;background-color: rgba(255,255,255,0.49);height: 49px;width: 910px;">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="margin-right: 0px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="width: 764px;margin-right: 10px;">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation" style="width: 547px;"></li>
                        <li class="nav-item" role="presentation"></li>
                    </ul>
                    <a href="http://localhost/ITEC%20Dev2/Cart.php" target="_self"> <button name="btnCart" method="POST" type="submit" style="margin-right: 22px;margin-top: -0;margin-left: -75px;">Cart(<?php echo $isEmpty;  ?>)</button></a>
                    <a><strong id="User" style="margin-right: 15px;margin-top: -0;"><?php echo $username ?></Strong></a>

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
    <div class="contact" style="background-color: rgba(241,247,252,0);height: 500px;">
        <h2 class="text-left" style="margin-left: 40px;margin-top: 75px">Your Cart</h2>
        <p style=" margin-left: 25px;width: 400px;height: 350px;  ">
            <?php
            $Total = 0;
            $cart = $_SESSION['cart'];
            $cart2 = $_SESSION['cart2'];
            $allDetails = "";
            $allProducts = "";
            foreach (($cart) as $key => $prodName) {
                $sql3 = "SELECT * FROM product WHERE prodName ='$prodName'";
                $result3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_array($result3);
                $prodValue = $row3['prodValue'];

                $Total = $Total + $prodValue;
                $allProducts .= ", " . $prodName;
                $_SESSION['Total'] = $Total;

                $_SESSION['allProducts'] = $allProducts;
                echo " {$prodName} R{$prodValue}";
                echo "<br/>";
            }
            foreach (($cart2) as $key => $prodDetails) {
                $allDetails .= ": " . $prodDetails;
                $_SESSION['allDetails'] = $allDetails;
            }
            ?>
        </p>
        <h1 style="margin-left: 25px;margin-top: -10px;">Total: R<?php echo $Total; ?></h1>
        <form method="POST" style="margin-top: -490px;margin-left: 450px;width: 350px;background-color: rgba(255,255,255,0.4);padding-top: 18px;">
            <h5>Contact Details</h5>
            <input class="form-control" type="text" style="margin-bottom: 10px;" value="<?php echo $username; ?>" inputmode="email">
            <h5>Billing Address</h5>
            <input class="form-control" type="text" style="margin-bottom: 10px;" value="<?php echo $AddressLine1; ?>">
            <input class="form-control" type="text" style="margin-bottom: 10px;" value="<?php echo $AddressLine2; ?>">
            <input class="form-control" type="text" style="margin-bottom: 10px;" value="<?php echo $Province; ?>">
            <input class="form-control" type="text" value="<?php echo $Postal; ?>" style="width: 150px;margin-bottom: 15px;">
            <button name="btnCheckout" class="btn" type="submit" style="background-color: #585858;color: rgb(255,255,255);">Place Order</button>
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
    <script src="D:\XAMPP\htdocs\ITEC Dev2\Index\Script.js"></script>
</body>

</html>