<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
   /* include('db_connection.php');
   session_start();
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   } */
   ?> 