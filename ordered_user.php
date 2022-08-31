 <?php

session_start();
if(!isset($_SESSION["username"]))

  header("location:login.php");
?>
<html>
<head><link rel="stylesheet" href="order.css"></li></head>
<body>
  <h1>
   <!--  <span class="blue">&lt;</span>
    
    <span class="blue">&gt;</span> -->
     <span class="yellow">List of Users</span>
     </h1>
<h2>Who wants service <a href="https://github.com/pablorgarcia" target="_blank">Cleaning</a></h2>


<table class="container">
  <thead>
    <tr>
      <th><h1>UserName</h1></th>
      <th><h1>Name</h1></th>
      <th><h1>Contact No</h1></th>
      <th><h1>Gmail Id</h1></th>
      <th><h1>Address</h1></th>
      <th><h1>Pin Code</h1></th>
      <th><h1>Confirm</h1></th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $con = mysqli_connect("localhost", 'root', '', 'homis');
      if(!$con){
        die("Please check your connection");
      }
      if (isset($_SESSION['username'])) 
      {
        $a=$_SESSION['username'];
        $sql = "SELECT username,name,contact,mail,address,pincode FROM users WHERE username='{$a}'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $row["username"];?></td>
      <td><?php echo $row["name"];?></td>
      <td><?php echo $row["contact"];?></td>
      <td><?php echo $row["mail"];?></td>
      <td><?php echo $row["address"];?></td>
      <td><?php echo $row["pincode"]; ?></td>
      <td style="background-color: yellow;color: #ff0000;"><a href=""><span>&#10003;</span></td>
    </tr>
    <?php
         }
        } else {
          echo "0 results";
        }
        }
    ?>
  </tbody>
</table>

</span>
</h1>
</body>
</html>