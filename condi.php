<?php
$con=mysqli_connect("localhost","root","","homis");

if(!$con){
	die("connection faild: ".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$service = $_POST('service');
	$json = array();

	$stmt = $db->query("SELECT *FROM service_provider WHERE service = $service");
}
while ($row = mysqli_stmt_fetch($stmt)) {
        array_push($json, $row);
    }
    
    echo json_encode($json);
mysqli_close($con);

?>