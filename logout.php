<?php
   session_start();
   session_destroy();
   // session_unset($_SESSION['username']);
   // session_unset($_SESSION['role']);
   // session_unset($_SESSION['ID']);
   header("Location:login.php");
   die();
?>