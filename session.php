<?php
   $con = mysqli_connect("localhost", 'root', '', 'homis');
if(!$con){
    die("Please check your connection");
}
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query("SELECT username FROM users WHERE username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>