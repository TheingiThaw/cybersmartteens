<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Billing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
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

    <section class="pricingPlan mt-5 slideInDown">
        <p class="text-center">Social Media Campaigns</p>
        <h2 class="text-center font-3 mobile-font4">Pricing Plan</h2>
        <p class="text-center mt-2 mb-textmt">Upgrade to get the benefits of CyberSmartTeens' Newsletters and Live Streaming</p>
        <div id="carouselExampleAutoplaying" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators center">
            <div class="">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active ls-ci-btn" aria-current="true" aria-label="Slide 1" value="monthly"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2" class="ls-ci-btn" value="3Times"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3" class="ls-ci-btn" value="2Times"></button>
            </div>
        </div>
        <div class="carousel-inner center">
            <div class="carousel-item ls-ci-div active auto">
            <div>
            <p class="text-center">Basic Plan</p>
                <h6 class="text-center font-2 navy-blue mobile-font4">$19/mo</h6>
                <ul>
                    <li>Exclusive LiveStream Access</li>
                    <li>Ad-Free Experience</li>
                    <li>Early Access to New Content</li>
                    <li>Members-Only Community</li>
                    <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                    <a id="billing1" class="btn center ls-ci-a pink-anchor">Subscribe</a>
                </div>
                </div>
                </div>
                <div class="carousel-item ls-ci-div auto">
                <div>
                <p class="text-center">3 Times Plan</p>
                <h6 class="text-center font-2 navy-blue mobile-font4">$17.9/mo</h6>
                <ul>
                    <li>Exclusive LiveStream Access</li>
                    <li>Ad-Free Experience</li>
                    <li>Early Access to New Content</li>
                    <li>Members-Only Community</li>
                    <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                    <a id="billing2" class="btn center ls-ci-a pink-anchor">Subscribe</a>
                </div>
                </div>
                </div>
                <div class="carousel-item ls-ci-div auto">
                    <div>
                        <p class="text-center">Twice Plan</p>
                        <h6 class="text-center font-2 navy-blue mobile-font4">$15/mo</h6>
                        <ul>
                            <li>Exclusive LiveStream Access</li>
                            <li>Ad-Free Experience</li>
                            <li>Early Access to New Content</li>
                            <li>Members-Only Community</li>
                            <li>Discounts on Additional Services</li>
                        </ul>
                        <div class="center">
                        <a id="billing3" class="btn center ls-ci-a pink-anchor">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script>
    $(document).ready(function(){
        $("#billing1").click(function(){ 
            $(".subscription-price").html("$19");
            $("#price").html("$19"); 
        });
        $("#billing2").click(function(){ 
            $(".subscription-price").html("$17.9");
            $("#price").html("$71.6"); 
        });
        $("#billing3").click(function(){ 
            $(".subscription-price").html("$15");
            $("#price").html("$90"); 
        });
    });
    </script>


    <section class="billing-section">
        <div>
            <h1 class="mb-textcenter text-center indego">Billing Info</h1>
            <p class="mb-textcenter text-center">Choose a payment option below and fill out the appropriate information</p>
            <div class="billing-img-div">
                <button><img src="photos/download (1).png" class="billing-img" alt=""></button>
                <button><img src="photos/download (2).png" class="billing-img" alt=""></button>
            </div>
            <div class="row billing-divs">
                <div class="col-md-6">
                    <div>
                        <small class="mb-textcenter">Subscribe to</small>
                        <h5 class="mb-textcenter red"><span class="signup-webname2">CyberSmartTeens</span> Membership</h5>
                        <div class="billing-div">
                            <p>Subscription</p>
                            <p class="subscription-price">$--</p>
                        </div>
                        <hr>
                        <div class="billing-div">
                            <h4>Total</h4>
                            <h3 id="price">$--</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <h5><i class="bi bi-info-square"></i> Credit Card Info</h5>
                        <form action="billing.php" method="POST">
                            <div class="form-group ">
                                <label for="">Name On CARD</label>
                                <input type="text" name="cardHolderName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Card Number</label>
                                <input type="number" name="cardNumber" class="form-control" placeholder="">
                            </div>
                            <div class="between">
                                <div class="form-group">
                                    <label for="">Expiry Date</label>
                                    <input type="date" name="expiredDate" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Security Code</label>
                                    <input type="number" name="securityCode" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="number" name="billAmount" class="form-control" placeholder="">
                            </div>
                            <div class="center">
                                <button class="pink-anchor subscribe-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>

    <?php
        include 'dbconfig.php';
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $cardHolderName = $_POST["cardHolderName"];
            $cardNumber = $_POST["cardNumber"];
            $expiredDate = $_POST["expiredDate"];
            $securityCode = $_POST["securityCode"];
            $billAmount = $_POST["billAmount"];
            $userid = $_SESSION["user_id"];

            $sql = "INSERT INTO billinginfo (cardHolderName, cardNumber, expiredDate, securityCode, billAmount, userid) 
                    VALUES ('$cardHolderName', '$cardNumber', '$expiredDate', '$securityCode', '$billAmount', '$userid')";

            if (mysqli_query($conn, $sql)){
                echo "<script>alert('Subscription Successful. Thanks for Subscribing Cybersmartteens.')</script>";
            }
            else{
                error_log(mysqli_error($conn));
                echo "<script>alert('Error Encountered. Please Try Again.')</script>";
            }
        }
    ?>
</body>
</html>