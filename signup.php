<?php
    include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="signup-body">
    <main>
        <div class="signup-main">
            <div class="row signup-div">
                <div class="col-md-6">
                    <img src="photos/casual-life-3d-young-people-in-the-worker-jumpsuits-with-gadgets.png" alt="">
                </div>
                <div class="col-md-6">
                    <h4 class="mt-3">Welcome to <span class="website-name">CyberSmartTeens</span></h4>
                    <p class="mt-2">Create an account to get more access.</p>
                    <form action="signup.php" method="post">
                        <div class="mb-3">
                            <label for="signupName" class="form-label"></label>
                            <input type="text" class="form-control" id="signupFName" name="firstname" placeholder="Your First Name">
                            <p class="userFname-feedback"></p>
                        </div>
                        <div class="mb-3">
                            <label for="signupName" class="form-label"></label>
                            <input type="text" class="form-control" id="signupLName" name="surname" placeholder="Your Sur Name">
                            <p class="userLname-feedback"></p>
                        </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label"></label>
                            <input type="text" class="form-control" id="signupEmail" name="email" placeholder="Your Email">
                            <p class="email-feedback"></p>
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label"></label>
                            <input type="text" class="form-control" id="signupPassword" name="password" placeholder="Password">
                            <p class="password-feedback"></p>
                        </div>
                        <div class="mb-3">
                            <label for="passwordConfirmation" class="form-label"></label>
                            <input type="text" class="form-control" id="passwordConfirmation" name="passwordConfirmation" placeholder="Re-enter password">
                            <p class="password-feedback"></p>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Remember me
                            </label>
                            </div>
                        </div>

                        <div class="col-6">
                            <button type="submit" class="btn signup-btn mt-3">Sign in</button>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('form').submit(function(event){
                                    var firstname = $('#signupFName').val();
                                    var surname = $('#signupLName').val();
                                    var email = $('#signupEmail').val();
                                    var firstpw = $('#signupPassword').val();
                                    var pwconfirm = $('#passwordConfirmation').val();

                                    <?php
                                        $sql1 = "SELECT * FROM user";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row = mysqli_fetch_row($result1);
                                    ?>
                                    if (firstname === '') {
                                        $('.userFname-feedback').html("First Name should be included").css("color", "red");
                                        event.preventDefault();
                                    }
                                    else {
                                        $('.userFname-feedback').hide();
                                    }
                                    for (i = 0; i<$row.length; i++){
                                        if (firstname === $row[i]['firstname']){
                                            $('.userFname-feedback').html("First Name already exists").css("color", "red");
                                        }
                                    }
                                    if (surname === '') {
                                        $('.userLname-feedback').html("Last Name should be included").css("color", "red");
                                        event.preventDefault();
                                    }
                                    else{
                                        $('.userLname-feedback').hide();
                                    }
                                    for (i = 0; i<$row.length; i++){
                                        if (surname === $row[i]['surname']){
                                            $('.userLname-feedback').html("Sur Name already exists").css("color", "red");
                                        }
                                    }
                                    if (email === '') {
                                        $('.email-feedback').html("Email should be added").css("color", "red");
                                        event.preventDefault();
                                    }
                                    else{
                                        $('.email-feedback').hide();
                                    }
                                    for (i = 0; i<$row.length; i++){
                                        if (email === $row[i][email]){
                                            $('.email-feedback').html("email already exists").css("color", "red");
                                        }
                                    }
                                    if(firstpw === '' || pwconfirm === '') {
                                        $('.password-feedback').html("Password should be included").css("color", "red");
                                        event.preventDefault();
                                    }
                                    else if (firstpw !== pwconfirm) {
                                        $('.password-feedback').html("Password is not the same").css("color", "red");
                                        event.preventDefault();
                                    }
                                    else{
                                        $('.password-feedback').hide();
                                    }

                                    if(firstname !== '' && surname !== '' && email !== '' && firstpw !== '' && pwconfirm !== '' && firstpw === pwconfirm) {
                                        <?php
                                            error_reporting(E_ALL);
                                            ini_set('display_errors', 1);
                                        

                                            if (isset($_REQUEST["firstname"]) && isset($_REQUEST["surname"]) && 
                                            isset($_REQUEST["email"]) && isset($_REQUEST["password"])){
                                                $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
                                                $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_SPECIAL_CHARS);
                                                $email    = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                                                $userpassword = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

                                                $hash = password_hash($userpassword, PASSWORD_DEFAULT);

                                                $sql = "Insert into user(firstname, surname, email, userpassword)
                                                        VALUES ('$firstname', '$surname', '$email', '$hash')";

                                                $result = $conn->query($sql);

                                                header("Location: signin.php");
                                                exit();
                                                
                                                if($result===FALSE){
                                                    echo "Error: " . $sql ."<br>" . $conn->error;
                                                }
                                                $conn->close();
                                            }
                                        ?>
                                    }
                                    else{
                                        event.preventDefault();
                                    }
                                });
                            });
                        </script>
                    </form>
    
                    <div class="col-12 mt-3 d-flex">
                        <p>or you can log in with
                            <a href="https://www.facebook.com/"><i class="bi bi-facebook fbicon icon"></i></a>
                            <a href="https://www.twitter.com"><i class="bi bi-twitter-x xicon icon"></i></a>
                            <a href="https://www.google.com"><i class="bi bi-google ggicon icon"></i></a>
                            <span class="span-margin">or</span>
                            <a href="signin.php" class="btn signin-btn">Log In</a>
                            <span class="span-margin">here</span>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

