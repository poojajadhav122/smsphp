<?php
   session_start();
   session_regenerate_id(true);
   unset($_SESSION['name']) ;
  unset($_SESSION['mobile']);
    unset($_SESSION['uid']) ;
    unset($_SESSION['email']) ;
  unset($_SESSION['sms']);
  session_destroy();
  header("location:login.php");


?>