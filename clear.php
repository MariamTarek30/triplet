<?php
 unset($_COOKIE['username']); 
//  setcookie('username', null, -1, '/');

 setcookie("username", "", time() - 3600);
 setcookie("email", "", time() - 3600);
 header('location:index.php');
//  session_destroy();
// echo '<script>console.log("'.$_COOKIE['username'].'")</script>';
  
?>