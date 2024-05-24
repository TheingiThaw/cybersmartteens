<?php
    include 'dbconfig.php';

    $response = array(
        'wholename_exists' => false,
        'email_exists' => false,
        'password_exists' => false
    );

    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["firstname"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $firstname = $_POST["firstname"];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $userpassword = $_POST['password'];

        $sql = "SELECT * FROM user WHERE firstname = '$firstname' AND surname = '$surname'";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $response['wholename_exists'] = true;
        }
    
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $response['email_exists'] = true;
        }
    
        $sql = "SELECT * FROM user WHERE userpassword = '$userpassword'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $response['password_exists'] = true;
        }
        echo json_encode($response);
    }
    $conn->close();

?>