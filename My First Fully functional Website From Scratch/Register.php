<?php
include 'DB_Connect.php';
echo '<script src="Script.js">> </script>';
if (isset($_POST['register'])) {
  if (isset($_POST['LA'])) {
    $username = $_POST['username'];
    $AddressLine1 = $_POST['a1'];
    $AddressLine2 = $_POST['a2'];
    $Province = $_POST['p'];
    $Postal = $_POST['pc'];
    $Password = $_POST['password'];
    $Password2 = $_POST['confirm_password'];
    $sql2 = "SELECT cEmail FROM customer WHERE cEmail ='$username '";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
    $temp = $row2['cEmail'];
    if ($username == $temp)
    {
      echo "<script type='text/javascript'>alert('That email is already in use!'); 
      window.location.href = 'Home.php';
      </script>";
    }
    else {
      if ($Password == $Password2) {
      $sql = "INSERT INTO customer ( cEmail, cAddressLine1, cAddressLine2, cProvince, cPostalCode, cPassword)
        VALUES ('$username','$AddressLine1','$AddressLine2','$Province','$Postal','$Password')";
      $result = mysqli_query($conn, $sql);
       if ($result)
        {
          $_SESSION['LoggedIn'] = True;
      echo "<script type='text/javascript'>alert('You have been registered sussecfully.'); 
      
      window.location.href = 'Home.php';
      </script>";
        }
        else
        {
    
      echo "<script type='text/javascript'>alert('ERROR!'); 
      window.location.href = 'Home.php';
      </script>";
        }
        
     } else {

      echo '<script type="text/JavaScript"> alert("Your passwords do not match");     window.location.href = "Home.php";</script>';
      echo '<script type="text/JavaScript"> showSignup() </script>';
     }
    }
  }
     else {
    echo '<script type="text/JavaScript"> alert("You need to accept the aggreement");     window.location.href = "Home.php";</script>';
    echo '<script type="text/JavaScript">showSignup() </script>';
     }
  }
?>