<?php
require('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userID = $_POST["user_id"];
    $service_id = $_POST["service_id"];
    
    $stmt = $db->query("SELECT * FROM 'order' WHERE user_id = '$userID'");
    
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        
        $service_ids = $row["service_id"];
        $service_ids = explode(",",$service_ids);
    
        array_push($service_ids, $service_id);
        array_unique($service_ids);
        
        $final$service_ids = implode(",", $service_ids);
    
        $query = "UPDATE 'order' SET $service_id = :$service_id WHERE user_id = '$userID'";

        try {
            $stmt2 = $db->prepare($query);
            $stmt2->bindparam(":service_id", $finalservice_ids);
            $stmt2->execute();
        
            echo json_encode(array("message" => "College successfully updated!"));
        }
        catch (PDOException $ex) {
            echo json_encode(array("message" => $ex->getMessage()));
        }
    
    } else {
        $query = "INSERT INTO 'order'(user_id, service_id) VALUES (:user_id, :userId)";
    
        $query_params = array(
            ':user_id' => $userID,
            ':service_id' => $service_id
        );
    
        try {
            $stmt2 = $db->prepare($query);
            $result = $stmt2->execute($query_params);
        
            echo json_encode(array("message" => "College successfully updated!"));
        }
        catch (PDOException $ex) {
            echo json_encode(array("message" => $ex->getMessage()));
        }
    }
}
