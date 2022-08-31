 <?php

session_start();
if(!isset($_SESSION["username"]))

  header("location:login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<?php 
$con = mysqli_connect("localhost", 'root', '', 'homis');
if(!$con){
    die("Please check your connection");
}
 if (isset($_SESSION['username'])) 
{
    $a=$_SESSION['username'];
    $sql = "INSERT INTO order (username) SELECT username FROM users WHERE username='$a'";

    
    if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
      echo "0 results";
    }
} 
mysqli_close($con);
?>
</body>
</html>
 