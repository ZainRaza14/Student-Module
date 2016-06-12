<?php
session_start();
if(isset($_SESSION['views']))
{
  unset($_SESSION['views']);
  unset($_SESSION['username']);

session_destroy();

}
header('location:index.php');
?>