<?php
    error_reporting(E_ALL);

    error_log("Received POST data: " . print_r($_POST, true));
    session_start();
    include 'dbconfig.php';
    if (isset($_SESSION['lockout_time']) && time() - $_SESSION['lockout_time'] < 600) {
        $response['login_lock'] = true;
        echo json_encode($response);
        exit();
    }
    $response = array(
        'email_exists' => false,
        'password_exists' => false,
        'login_lock' => false,
        'login_attempts' => 0
    );

    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $userpassword = $_POST["password"];
    
        // Debugging
        error_log("Received email: " . $email);
        error_log("Received password: " . $userpassword);
    
    
        $sql = "SELECT * FROM user WHERE LOWER(email) = LOWER(?)";
        $stmt = mysqli_prepare($conn, $sql);
    
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
    
            // Debugging
            error_log("SQL Query: " . $sql);
    
            if ($row = mysqli_fetch_assoc($result)) {
                $response['email_exists'] = true;
                $storedPassword = $row['userpassword'];
            
                if (password_verify($userpassword, $storedPassword)) {
                    error_log("Password verified successfully");
                    $response['password_exists'] = true;
                    $_SESSION['user_id'] = $row['userid'];
                    $_SESSION['login_attempts'] = 0;
                    unset($_SESSION['lockout_time']);
                    echo json_encode($response);
                    exit();
                } else {
                    error_log("Password verification failed");
                }
            } else {
                // Email not found
                $response['email_exists'] = false;
                error_log("Email not found");
            }
            
            // Increment login attempts only if email exists

            $_SESSION['login_attempts']++;
            
            if ($_SESSION['login_attempts'] >= 3) {
                $_SESSION['lockout_time'] = time();
                $response['login_attempts'] = $_SESSION['login_attempts'];
                echo json_encode($response);
                exit();
            }
                
            } else {
                error_log("Database query preparation failed");
            }
        }
    


echo json_encode($response);
?>
