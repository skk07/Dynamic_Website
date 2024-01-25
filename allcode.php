<?php 
session_start();
include('config/dbcon.php');

if(isset($_POST['logout_btn']))
{
  // session destroy();

  unset($_SESSION['auth']);
  unset($_SESSION['auth_role']);
  unset($_SESSION['auth_user']);

  $_SESSION['message'] = "You Logged out Successfully! Thank You!";
  header("Location: login.php");
  exit();

}


?>