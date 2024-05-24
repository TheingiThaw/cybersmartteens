<?php
      session_start();
      include 'dbconfig.php';
      $id = "";
      $firstname = "";
      $surname = "";
      $email = "";
      $oldpassword = "";
      $userPassword = ""; 

      $response = array(
        'oldPassword_incorrect' =>false,
        'updateName_exists' => false,
        'updateEmail_exists' => false,
        'updatePassword_exists' => false,
        'update_success' => false,
      );

      if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $firstname = $_POST["updateFname"];
        $surname = $_POST["updateSname"];
        $email = $_POST["updateEmail"];
        $oldpassword = $_POST["oldpassword"];
        $userPassword = password_hash($_POST["updatePassword"], PASSWORD_DEFAULT);

        $sql = "SELECT * FROM user WHERE userid = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        if($firstname === $row['firstname'] || $surname === $row['surname']){
          $response['updateName_exists'] = true;
        }
        if($email === $row['email']){
          $response['updateEmail_exists'] = true;
        }
        if (!password_verify($oldpassword, $row['userpassword'])) {
          $response['oldPassword_incorrect'] = true;
        }
        if($userpassword === $row['userpassword']){
          $response['updatePassword_exists'] = true;
        }
        
        else{
          $sql = "UPDATE user SET firstname='$firstname', surname = '$surname', email = '$email', userpassword = '$userPassword'
          WHERE id = '$id'";
          if($conn->query($sql)===TRUE)
          {
            $response['update_success'] = true;
            session_unset();
            echo json_encode($response);
            exit();
          }
          else{
            echo "Error updating record" . $conn->error;
          }
        }
        echo json_encode($response);
      }
      $conn->close();
    ?>