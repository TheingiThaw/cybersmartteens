<?php

include 'dbconfig.php';

$response = array('deleteAcc_success' => false);

session_start();
if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    $sql = "DELETE FROM user WHERE userid = '$id'";
    if($conn->query($sql)){
        $response['deleteAcc_success'] = true;
        session_destroy();
        echo json_encode($response);
        exit();
    }
    else{
        echo json_encode($response);
        exit();
    }
}
echo json_encode($response);
?>