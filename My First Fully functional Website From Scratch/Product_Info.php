<?php include('DB_Connect.php'); 
session_start();

?>
<?php
include 'DB_Connect.php';
if(isset($_POST['LoadProduct'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM product Where prodID ='$username' AND cPassword='$Password' "; 
    $prodName = $_POST['username'];
    $prodDescription = $_POST['password'];
    $prodValue =$_POST[''];
     
    $result = mysqli_query($conn, $sql);
}
    
    

?>