<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'dbconfig.php';

$response = array(
    'newrecord_input' => false
);

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_REQUEST["firstname"]) && isset($_REQUEST["surname"]) && 
isset($_REQUEST["email"]) && isset($_REQUEST["password"])){
    $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
    $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $userpassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($email === false) {
        $response['error'] = true;
        $response['error_message'] = 'Invalid email address';
        echo json_encode($response);
        exit();
    }
    $hash = password_hash($userpassword, PASSWORD_DEFAULT);
    $sql = "Insert into user(firstname, surname, email, userpassword)
    VALUES ('$firstname', '$surname', '$email', '$hash')";

    $result = $conn->query($sql);

    if($result){
        $_SESSION['id'] = $conn->insert_id;
        $response['newrecord_input'] = true;
        echo json_encode($response);
        exit();
    }                                           
    else{
        error_log("Error: " . $sql . "<br>" . $conn->error);
        echo json_encode($response);
    }
    echo json_encode($response);
    }
    $conn->close();
 ?>