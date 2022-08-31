<?php
require("config.php");
if (isset($_GET['service'])) {
    $service=$_GET["service"];
    $json=array();

$sql = "SELECT *FROM service_provider WHERE service='$service'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
