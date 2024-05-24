<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mobileres.css">
</head>
<body onload="updateComboBox()">
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

    <main>
      <section class="guidance-header">
        <div class="w-75 auto">
          <div class="row">
            <div class="col-sm-5 center auto">
              <div class="">
                <p class="text-center navy-blue">Social Media Campaigns</p>
                <h2 class="text-center guidance-header-text mobile-font6">Privacy & Data Policy</h2>
                <p class="text-center mt-5 navy-blue">
                  At <span class="guidance-websitename">CyberSmartTeens</span>, we take data privacy versy seriously. We want to be
                  completely transparent about the information that we store, how we use it and how we keep it secure.
                </p>
              </div>
            </div>
            <div class="col-sm-7">
              <img src="../cybersmartteens/photos/119118-OPR1T5-114.jpg" class="guide-header-img" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="guidance-info-section">
        <div class="row guidance-info center auto">
          <div class="col-sm-6 center">
            <img src="../cybersmartteens/photos/simplistic-online-registration-and-sign-up-on-computer.png" class="guidance-header-img" alt="">
          </div>
          <div class="col-sm-6">
            <div>
              <h4 class="mobile-font3 navy-blue">Privacy & Data Policy</h4>
              <p class="mt-4">
                CyberSmartTeens does not share any personal data with any third party except information
                required to function correctly. Users might visit our site anonymously, however for billing,
                security and accounting reasons users may be requested to enter their email, name, address, company details 
                and credit card information as needed. This will only be collected from users when registering an account and only
                if the user enters the data voluntarily. We do not store any personal information about your visits that are not entered
                voluntarily.
              </p>
            </div>
          </div>
        </div>

        <div class="guidance-bg">
          <div class="row guidance-info auto">
            <div class="col-sm-6 center auto">
              <div>
                <h4 class="mobile-font2 navy-blue">How we protect your data?</h4>
                <p class="mt-4">
                  We make great effort to ensure the security of your data using the latest encryption methods
                  and never storing information such as your passwords in plain text. We also use encrypted traffic and 
                  communication in all critical parts of our system to ensure the safety of your data. For security reasons,
                  your credit card details are never stored on our servers. Instead we use one of the most secure
                  payment providers called BrainTree to process and store your billing information in a secure manner.
                </p>
              </div>
            </div>
            <div class="col-sm-6 center">
              <img src="../cybersmartteens/photos/florid-data-security-and-financial-data-protection.png" class="guidance-header-img" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="mobile-center mb-fullwidth">
        <div>
          <div class="guidance-div">
            <p class="font-2 text-center">
              Can't find your way in the social media labyrinth? Relax! Guides to the rescue. 
              Get all the information without the panic by simply clicking on the wide-buttoned tabs below
              <i class="bi bi-arrow-down-circle"></i>
            </p>
          </div>
          <div class="auto">
            <div class="row center">
              <div class="d-flex">
                <a href="#" class="btn guidance-btn">Best Practice Guidances</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="guidance-bg1">
        <div class="guidance-info1">
          <div class="row">
            <h1 class="text-center white mobile-font3">
              Anonymous Non-personal Data Policy
            </h1>
            <p class="text-center mt-4 white">
              In order to improve users with the best website experience, we may collect some 
              anonymous information about users visiting and interacting with our visit such as
              the name of their browser, pages visited and points of interest on the website based on 
              mouse heatmap technology as outlined below using a completely anonymous service called Matoma. 
            </p>
  
            <div class="col-sm-4 mt-5">
              <h5 class="white mobile-font1">
                <i class="bi bi-person-rolodex"></i> Non-Personal Data Only
              </h5>
              <p class="mt-3 white">
                We use a service called Matoma, that strictly only tracks 
                non-personal data that does not include any user identifiable information.
              </p>
            </div>
            <div class="col-sm-4 mt-5">
              <h5 class="white mobile-font1">
                <i class="bi bi-person-fill"></i> 100% Anonymous
              </h5>
              <p class="mt-3 white">
                The data collected is not tied to any account or user and is 100% anonymous
                and used strictly for statistical reasons and improving user experience.
              </p>
            </div>
            <div class="col-sm-4 mt-5">
              <h5 class="white mobile-font1">
                <i class="bi bi-file-lock-fill"></i>Not Shared
              </h5>
              <p class="mt-3 white">
                All anonymous data is kept by us, so there are no chances of a third party typing your 
                unique ID and behaviour to any personal profile.
              </p>
            </div>
          </div>
        </div>
      </section>
   
      <section class="row guidance-info2">
        <div class="row col-md-6">
          <div class="col-4 mobile-center">
            <img src="../cybersmartteens/photos/techny-receiving-a-letter-or-email.gif" class="cookie-img" alt="">
          </div>
          <div class="col-8 center">
            <p>
              Our website might use cookies in order to operate normally, allowing you
              to log into the dashboard and to provide us with anonymous statistic about
              your visit to help us enhance the user experience of our website.
            </p>
          </div>
        </div>
        <div class="row col-md-6">
          <div class="col-4 center">
            <img src="../cybersmartteens/photos/techny-project-management-teamwork-and-integration.gif" class="cookie-img" alt="">
          </div>
          <div class="col-8 center">
            <p>
              We have carefully designed and overviewed our cookie usuage in order to make sure 
              we never store any kind of personal information or information that would allow anyone 
              to identify you.
            </p>
          </div>
        </div>
      </section>

      <section class="guidance-div1">
        <div>
          <h2 class="text-center font-3 mobile-font4 navy-blue">
            Sharing Your Personal Data 
          </h2>
          <p class="text-center capitalize mt-5">
            Built For Performance, Optimized For Perfection
          </p>
          <div class=" row w-75 auto mt-5">
            <div class="col-sm-4">
              <div class="row center">
                <img src="../cybersmartteens/photos/9_jCmCs6_400x400-removebg-preview.png" class="guidance-img" alt="">
              </div>
              <div class="row">
                <h5 class="text-center navy-blue mobile-font1">MaxMind</h5>
              </div>
              <div class="row mt-3">
                <p class="text-center">
                  During signup, we might share your current IP, browser user agent, browser language and 
                  email address provided during signup to a third party service MaxMind that we use to detect 
                  and prevent credit card fraud.
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="row center">
                <img src="../cybersmartteens/photos/Conify-XL-removebg-preview.png" class="guidance-img" alt="">
              </div>
              <div class="row">
                <h5 class="text-center navy-blue mobile-font1">Coinify</h5>
              </div>
              <div class="row mt-3">
                <p class="text-center">
                  During a payment process, we might pass your billing information such as IP and email address to a service
                  called Coinify that will then use this for secure payment processing on our behalf.
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="row center">
                <img src="../cybersmartteens/photos/Disqus_d_icon_(blue).svg.png" class="guidance-img" alt="">
              </div>
              <div class="row">
                <h5 class="text-center navy-blue mobile-font1">Disqus</h5>
              </div>
              <div class="row mt-3">
                <p class="text-center">
                  When posting a comment on our blog or knowledge base, your provided information is shared with a service called
                  Disqus that we use to provide users the ability to leave comments.
                </p>
              </div>
            </div>
          </div>
          <div class="auto mt-5">
            <p class="text-center">
              This privacy policy is subject to change without prior notice.<br>
              It was last updated on 3/1/2024. If you require more information or have
              any questions, feel free to contact us at: <strong>support@cybersmartteens.com</strong>
            </p>
          </div>
        </div>
      </section>

      <!-- change it into reporting section -->
      <section class="guidance-mailing">
        <div class="row">
          <div class="askAnything">
            <h4>About <span class="mail-websitename">CyberSmartTeens</span></h4>
            <h2 class="mobile-font2 mb-textmt red">Creating Safe Online Society For All Youngsters Globally</h2>
            <p class="mb-textmt">Ask anything especially about teenagers'cyber security here</p>
          </div>
        </div>

        <div class="guidance-mailimg">
          <img src="../cybersmartteens/photos/3d-casual-life-smiling-man-with-laptop-raising-his-index-finger.png" class="" alt="">
        </div>

        <!-- mail form from validation bootstrap is-valid or is-invalid -->
        <form class="row g-3 mail guidance-Mail border-opacity-75 auto">
          <div class="col-md-6">
            <label for="validationServer01" class="form-label">Name</label>
            <input type="text" class="form-control" id="contactName" value="" required>
          </div>
          <div class="col-md-6">
            <label for="validationServer02" class="form-label">Email</label>
            <input type="text" class="form-control" id="contactEmail" value="" required>
            <div class="contactmail-feedback"></div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">Subject</label>
            <select class="form-select" id="subject" aria-describedby="validationServer04Feedback" required>
              <option selected disabled value="">Choose...</option>
            </select>
            <div id="validationServer04Feedback" class="invalid-feedback"></div>
          </div>
          <div class="col-md-12">
            <label for="validationServer05" class="form-label">Leave a message</label>
            <input type="text" class="form-control" id="message" aria-describedby="validationServer05Feedback" required>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
              <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
              </label>
              <div id="invalidCheck3Feedback" class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn mail-btn pink-anchor" id="emailSubmitBtn" type="submit">Submit form</button>
          </div>
          <div class="col-12" id="mail-overallfeedback"></div>
        </form>

        <script>
            function updateComboBox() {
                var url = "getSubject.php";
                var request;
        
                if (window.XMLHttpRequest) {
                    request = new XMLHttpRequest();
                } else {
                    request = new ActiveXObject("Microsoft.XMLHTTP");
                }
        
                request.onreadystatechange = function () {
                    if (request.readyState == 4 && request.status == 200) {
                        var text = this.responseText;
                        var parser = new DOMParser();
                        var xmlDoc = parser.parseFromString(text, "text/xml");
                        var elements = xmlDoc.getElementsByTagName("thing");
                        var options = "";
        
                        for (var i = 0; i < elements.length; i++) {
                            var subjectName = elements[i].getElementsByTagName("subjectName")[0].childNodes[0].nodeValue;
                            options += "<option>" + subjectName + "</option>";
                        }
        
                        document.getElementById("subject").innerHTML = options;
                    }
                };
        
                request.open("GET", url, true);
                request.send();
            }
        </script>
        
        <script>
            $(document).ready(function(){
              document.getElementById("emailSubmitBtn").addEventListener("click", function (event){
                var name = $('#contactName').val();
                var email = $('#contactEmail').val();
                var subject = $('#subject').val();
                var message = $('#message').val();

                if (name === '' || email === '' || subject === '') {
                  $('#contactmail-feedback').html("Please make sure to fill in these places").css("color", "red");
                  event.preventDefault();
                }
                else{
                  $.ajax({
                    url: 'emailInsert.php',
                    method: 'POST',
                    data : {
                      name : name,
                      email: email,
                      subject: subject,
                      message: message
                    },
                    success: function(response){
                      console.log("ajax success");
                      var data = JSON.parse(response);

                      if(data.insert_success){
                        $('#mail-overallfeedback').html("Thanks for contacting us").css("color", "green");
                        console.log("insert success");
                      }
                      else{
                        $('#mail-overallfeedback').html("Error Encountered").css("color", "red");
                        alert("error encountered");
                      }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                      console.error("Error encountered in emailInsert.php:", textStatus, errorThrown);
                      alert("Error encountered in emailInsert.php");
                    }
                  });
                }
              });
            });
        </script>
      </section>
    </main>

    <?php
      include 'footer.php';
    ?>
</body>
</html>