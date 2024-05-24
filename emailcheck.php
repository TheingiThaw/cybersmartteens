<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
include 'dbconfig.php';

$response = array (
    'email_exists' => false,
    'newemail_added' => false,
);

if(isset($_REQUEST['email'])){
    $email = $_POST['email'];

    $sql = "SELECT * FROM newsemail WHERE useremail = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        $response['error'] = "Query failed: " . mysqli_error($conn);
    } 
    else {
        if (mysqli_num_rows($result) > 0) {
            $response['email_exists'] = true;
        } 
        else {
            $useremail = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

            if($useremail !== false){
                $sql = "INSERT INTO newsemail(useremail) VALUES ('$useremail')";
                $result = $conn->query($sql);

                if($result === true){
                    $response['newemail_added'] = true;
                }
                else {
                    $response['error'] = "Error executing query: " . $conn->error;
                }
            } else {
                $response['error'] = "Invalid email format";
            }
        }
    }
}

echo json_encode($response);
?>
