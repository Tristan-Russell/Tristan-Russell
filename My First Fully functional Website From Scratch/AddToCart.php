<?php
include 'DB_Connect.php';
session_start();

if (isset($_POST['btnAdd'])) {
  

 
    $select1 =$_POST['colour1'];
    $select2 =$_POST['colour2'];
    $select3 =$_POST['size'];
   
    $prodDetails=  $select1.", ". $select2. ", ".$select3;
  
   
    $prodID= $_SESSION['prodName'];
 
    array_push( $_SESSION['cart'], $prodID);
    array_push( $_SESSION['cart2'], $prodDetails);
   
   



header('Location: index.php');
}
