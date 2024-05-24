<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSmartTeens Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/mobileres.css" rel="stylesheet">
</head>
<?php
    include 'dbconfig.php';
    session_start();
?>
<body class="signin-body">
    <main>
        <div class="signin-main">
            <div class="row signin">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                  <img src="photos/casual-life-3d-young-people-in-the-worker-jumpsuits-with-gadgets.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4 class="mt-3">Welcome to <span class="website-name">CyberSmartTeens</span></h4>
                  <div class="mb-3">
                      <label for="email" class="form-label"></label>
                      <input type="text" class="form-control" id="email" placeholder="Your Email">
                      <p class="email-feeback1"></p>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label"></label>
                      <input type="password" class="form-control" id="password" placeholder="Password">
                      <p class="password-feedback1"></p>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Remember me
                        </label>
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <button type="submit" id="signinBtn" class="btn signup-btn">Sign in</button>
                    </div>

                    <script>
                        $(document).ready(function(){
                            $('#signinBtn').click(function(event){
                                var email = $('#email').val();
                                var password = $('#password').val();

                                console.log("AJAX request initiated");
                                $.ajax({
                                    method: 'POST', 
                                    url: 'checklogin.php',
                                    data: {email: email, password: password},
                                    dataType: 'json',
                                    success: function(response){
                                        console.log("Full Response:", response);

                                        if(response && response.email_exists && response.password_exists){
                                            window.location.href = 'index.php';
                                        } else {
                                            if(response && response.login_attempts !== undefined && response.login_attempts >= 3){
                                                alert('Account locked. Try again later.');
                                                $('input').prop("disabled", true);
                                            } else {
                                                alert('Invalid Email or Password');
                                                $('.email-feeback1').html("Email does not exist").css("color", "red");
                                                $('.password-feedback1').html("Password does not exist").css("color", "red");
                                            }
                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        console.error("Error processing:", textStatus, errorThrown);
                                        alert('Error processing: ' + errorThrown);
                                    }
                                });
                            });
                        });
                    </script>
  
                    <div class="col-12 mt-3">
                      <p>or Log in with 
                          <a href="https://www.facebook.com/"><i class="bi bi-facebook fbicon icon"></i></a>
                          <a href="https://www.twitter.com"><i class="bi bi-twitter-x xicon icon"></i></a>
                          <a href="https://www.google.com"><i class="bi bi-google ggicon icon"></i></a>
                      </p>
                    </div>

                    <div class="col-12 mt-3">
                      <a href="signup.php" class="btn signin-btn">Create an Account</a>
                    </div>

                    <div class="col-12 mt-3">
                      <a href="index.php" class="btn nav-a red">Back to home</a>
                    </div>
              </div>
            </div>

        </div>
    </main>
</body>
</html>