
<?php
session_start();
include 'DB_Connect.php';
echo '<script src="Script.js">> </script>';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $Password = $_POST['password'];
     $sql = "SELECT cEmail,cPassword FROM customer Where cEmail ='$username' AND cPassword='$Password' "; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $row_num= $result->num_rows;

     if ($row_num ==1) {
       
        $_SESSION['LoggedIn'] = True;
        $_SESSION['user']= $username ;
  
           header('Location: index.php');
    
    }

    else{
        echo '<script> alert("Your Username/Password is incorrect");  
          
        window.location.href = "Home.php";
      
        </script>';
    }
}
?>
