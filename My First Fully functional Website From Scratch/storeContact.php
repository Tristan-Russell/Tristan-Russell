<?php

if (isset($_REQUEST['contact'])) {
    $Email= $_REQUEST['email'];
    $Name = $_REQUEST['name'];
    $Message = $_REQUEST['message'];

     $sql = "INSERT INTO contact_us ( cuName,cuEmail, ,cuMessage)
        VALUES ('$Email','$Name','$Message')";
        
      $result = mysqli_query($conn, $sql);
      echo '<script> alert("We have recieved your message.")</script>';
      header('Location: index.php');
         /* info@just4design.co.za*/
    } 
?>