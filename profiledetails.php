<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/mobileres.css" rel="stylesheet">
</head>
<body>
    <?php
      session_start();
      include 'header.php';
    ?>

    <script>
        $(document).ready(function(){
            $(".profile-link").show(); 
            $(".after-link").hide();  

            var isUserSignedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;

            if (isUserSignedIn) {
                $(".profile-link").hide();
                $(".after-link").show();
            }
            $(".profile-link").click(function(e){

                $(".profile-link").hide();
                $(".after-link").show();

                window.location.href = $(this).attr("href");
            });
        });
    </script>

    <main class="mb-fullwidth">
        <div class="productdetails-main auto">
          <section class="row">
            <section class="col-3 pd-nav-ls">
                <nav class="nav flex-column">
                    <a class="nav-link nav-a active" aria-current="page" href="#edit-profile">Edit Profile</a>
                    <a class="nav-link nav-a" href="#">Notificatiom</a>
                    <a class="nav-link nav-a" href="#">Choose Plan</a>
                    <a class="nav-link nav-a" href="#">Password & Security</a>
                    <a class="nav-link nav-a" href="">Get Help <i class="bi bi-info-circle-fill"></i></a>
                    <a class="nav-link nav-a blue" href="index.php">Sign Out</a>
                    <!-- Button trigger modal -->
                    <button type="button" id="delete-acc" class="nav-link nav-a" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Delete Account
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Entire Account</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure deleting the entire account?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" id="sure_deAcc" class="btn btn-primary">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </nav>
            </section>
            <section class="col-7" id="edit-profile">
                <h1 class="mobile-font3">Edit Profile</h1>
                <div class="center mt-5">
                    <img src="photos/casual-life-3d-young-man-in-headset-using-computer.png" class="pd-edit-img" alt="">
                </div>
                <div class="mb-3">
                    <input type="file" value="">
                </div>

                <?php
                  include 'dbconfig.php';
                  $id = $_SESSION['user_id'];
                  $sql = "SELECT * FROM user WHERE userid = '$id'";
                  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_assoc($result);

                  if($result){
                    $firstName = $row['firstname'];
                    $surName = $row['surname'];
                    $email = $row['email'];
                  }
        
                ?>
                <form class="row g-3 mt-3" action="profiledetails.php" method="POST">
                    <div class="col-md-5">
                      <label for="validationServer01" class="form-label">First Name</label>
                      <input type="text" class="form-control" name="updateFName" id="updateFName" value="<?php echo $firstName?>" required>
                      <div class="update-Nfeedback"></div>
                    </div>
                    <div class="col-md-5">
                      <label for="validationServer01" class="form-label">Sur Name</label>
                      <input type="text" class="form-control" name="updateSName" id="updateSName" value="<?php echo $surName?>" required>
                      <div class="update-Nfeedback"></div>
                    </div>
                    <div class="col-md-10">
                      <label for="validationServerUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control" name="updateEmail" id="updateEmail" value="<?php echo $email?>" 
                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                      </div>
                      <p class="update-Efeedback"></p>
                    </div>
                    <div class="col-md-10">
                        <label for="validationServer03" class="form-label">Old Password</label>
                        <input type="text" class="form-control" name="oldpassword" id="oldpassword" value="" 
                        aria-describedby="validationServer03Feedback" required>
                        <div id="validationServer03Feedback" class="update-Pfeedback1"></div>
                    </div>
                    <div class="col-md-10">
                        <label for="validationServer03" class="form-label">New Password</label>
                        <input type="text" class="form-control" name="updatePassword" id="updatePassword" aria-describedby="validationServer03Feedback" required>
                        <div id="validationServer03Feedback" class="update-Pfeedback2"></div>
                    </div>
                    <div class="col-md-10">
                      <label for="validationServer04" class="form-label">Password Confirmation</label>
                      <input type="text" class="form-control" id="passwordConfirm" aria-describedby="validationServer03Feedback" required>
                      <div id="password-feedback" class="invalid-feedback"></div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                        <label class="form-check-label" for="invalidCheck3">
                          Agree to terms and conditions
                        </label>
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn pd-join-anchor pink-anchor" id="updateButton" type="submit">Save</button>
                    </div>

                </form>
            </section>
            <script type="text/javascript" language="javascript">
              $(document).ready(function(){
                $('#updateButton').click(function(event){
                  var password1 = $('#updatePassword').val();
                  var password2 = $('#passwordConfirm').val();

                  if(password1 != password2){
                    $('#password-feedback').html("Password did not match").css("color", "red");
                  }
                  else{
                    $.ajax({
                      url: 'profileupdate.php',
                      method: 'post', 
                      data: {
                        updateFname: $('#updateFName').val(),
                        updateSname: $('#updateSName').val(),
                        updateEmail: $('#updateEmail').val(),
                        updatePassword: $('#updatePassword').val(),
                        oldpassword: $('#oldpassword').val()
                      },
                      success: function(response){
                        var data = JSON.parse($response);

                        if(data.updateName_exists){
                          $('.update-Nfeedback').html("Name already exists").css("color", "red");
                        }
                        else if(data.updateEmail_exists){
                          $('.update-Efeedback').html("Email already exists").css("color", "red");
                        }
                        else if(data.oldPassword_incorrect){
                          $('.update-Pfeedback1').html("Old Password Is Incorrect").css("color", "red");
                        }
                        else if(data.updatePassword_exists){
                          $('.update-Pfeedback2').html("Password already exists").css("color", "red");
                        }
                        else{
                          alert("Profile Updated");
                          window.location.href = "index.html";
                          exit();
                        }
                      },
                      error: function(){
                        alert("Error Encountered in data update!");
                      }
                    });                   
                  }
                });
                $('#delete-acc').click(function(){
                  $('#sure_deAcc').click(function(){
                    $.ajax({
                      type: 'post',
                      url: 'delete_acc.php',
                      success: function(response){
                        var data = JSON.parse(response);

                        if(data.deleteAcc_success){
                          alert("Account has Successfully Deleted");
                        }
                        else{
                          alert("Error encountered during deletion of account");
                        }
                      }
                    });
                  });
                });
              });
            </script>
          </section>

          <section class="pd-join center">
            <div>
                <h1 class="font-45 mobile-font4">
                    Step Up
                </h1>
                <p class="text-center mt-5">
                    Don't be a wallflower, be a firework! Enrol in our memberships for 
                    special features. Start streaming your reality, your way, your rules.
                </p>
                <a href="" class="btn pd-join-anchor center pink-anchor">Join Now</a>
            </div>
          </section>

          <section class="pd-connectivity auto center">
            <div>
                <h1 class="font-45 mobile-font4">
                    Connectivity
                </h1>
                <p class="mt-4">
                    Since we know you've got places to be, we've carefully curated 
                    this list to keep you connected!
                </p>
                <h5 class="mt-4 mobile-font1">Sites</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item mt-2"><a href="https://www.facebook.com/" class="nav-a">Facebook</a></li>
                    <li class="list-group-item mt-2"><a href="https://www.twitter.com/" class="nav-a">Twitter X</a></li>
                    <li class="list-group-item mt-2"><a href="https://www.instagram.com/" class="nav-a">Instagram</a></li>
                    <li class="list-group-item mt-2"><a href="https://www.youtube.com/" class="nav-a">Youtube</a></li>
                </ul>
            </div>
          </section>
        </div>
    </main>

    <?php
      include 'footer.php';
    ?>
</body>
</html>