<?php
require('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_id = $_POST["clgID"];
    $user_id = $_POST["userID"];
    
    $query = "INSERT INTO `order`(service_id,user_id) VALUES (:service_id, :user_id)";
    
    $query_params = array(
        ':service_id' => $service_id,
        ':user_id' => $user_id,
    );
    
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        
        echo "New record created successfully";
    }
    catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}