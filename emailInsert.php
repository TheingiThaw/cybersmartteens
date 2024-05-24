<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    include 'dbconfig.php';

    $response = array('insert_success' => false);

    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && 
        isset($_POST["message"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            $subIDQuery = "SELECT subID FROM subject WHERE subjectName = '$subject'";
            $subIDResult = $conn->query($subIDQuery);
            if($subIDResult){
                $subIDRow = mysqli_fetch_assoc($subIDResult);
                $subID = $subIDRow['subID'];
                $sql = "INSERT INTO contact(contactName, contactEmail, message, subID) 
                    VALUES ('$name', '$email', '$message', '$subID')";

                $result = $conn->query($sql);
                if($result){
                    $response['insert_success'] = true;
                    echo json_encode($response);
                    exit();
                }
                else {
                    echo "Error encountered";
                    echo json_encode($response);
                }
            }
            else {
                echo "Error retrieving subID";
                echo json_encode($response);
            }
        }
        $conn->close();
?>