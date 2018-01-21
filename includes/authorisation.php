<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 <?php
ob_start();
require('settings/core.php');
$userquery= "select * from users where username='$_SESSION[username]'";
$userquery=$sp->query($userquery) or die($sp->error);
$info=$userquery->fetch_object();
?>    
