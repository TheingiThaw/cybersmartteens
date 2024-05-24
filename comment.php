<?php
    include 'dbconfig.php';

    $response = array('comment_submitted' => false);

    if(isset($_POST['comment'])){
        $comment = $_POST['comment'];
        $sql = "INSERT INTO comment(comment) VALUES ('$comment')";

        if(mysqli_query($conn, $sql)){
            $response['comment_submitted'] = true;
            echo json_encode($response);
            exit();
        }
        else{
            error_log("Error encounter" . mysqli_error($conn));
        }
    }
    echo json_encode($response);
?>