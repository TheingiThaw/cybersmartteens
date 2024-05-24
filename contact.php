<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact CyberSmartTeens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/mobileres.css" rel="stylesheet">
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
    
    <section class="contact">
      <main class="maincontact">
        <section class="">
          <h6 class="text-center p-font mobile-font1 cyan">Social Media Campaigns Ltd.</h6>
          <h1 class="text-center contact-websitename mt-3">
            CyberSmartTeens
          </h1>
          <p class="text-center mt-5 contact-p auto">
            Welcome to CyberSmartTeens! We are an innovative service that embraces the wild, 
            weird and sometimes wacky world of social media safety for our beloved teens. Get set 
            to experience teenage online freedom with the security of a bodyguard!
          </p>
          <div class="center">
            <a href="signup.php" class="btn contact-btn1 cyan-anchor">Get Started Now</a>
          </div>
        </section>

        <section class="mt-5 center mb-contact">
          <div class="contact-form d-flex">
            <div class="cf-div">
              <form class="row c-form">
                  <div class="row">
                      <div class="col-md-6">
                          <label for="validationServer01" class="form-label">Name</label>
                          <input type="text" class="form-control" id="contactName" value="">
                        </div>
                        <div class="col-md-6">
                          <label for="validationServer02" class="form-label">Email</label>
                          <input type="text" class="form-control" id="contactEmail" value="" required>
                          <div class="contactmail-feedback"></div>
                        </div>
                  </div>
                  <div class="row mt-4">
                      <div class="col-md-12">
                          <label for="validationServer03" class="form-label">Subject</label>
                          <select class="form-select" id="subject" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Choose...</option>
                          </select>
                          <div id="validationServer04Feedback" class="invalid-feedback"></div>
                        </div>
                  </div>
                  <div class="row mt-4">
                      <div class="col-md-12">
                          <label for="validationServer05" class="form-label">Leave a message</label>
                          <textarea class="form-control" id="message" rows="3"></textarea>
                      </div>
                  </div>
                  <div class="col-12 mt-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                      <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                      </label>
                      <div id="invalidCheck3Feedback" class="invalid-feedback">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-3">
                    <button class="btn contact-btn2 cyan-anchor" id="emailSubmitBtn" type="submit">Submit form</button>
                  </div>
                  <div class="col-12" id="mail-overallfeedback"></div>
              </form>
            </div>
            <div class="address">
              <h2>Our Address</h2>
              <p>
                At CyberSmartTeens Solutions, our team of expert analysts is dedicated to delivering the latest insights and 
                trends in cybersecurity to keep your digital assets secure.
              </p>
              <p>Email - <strong class="white">contact@cybersmartteens.com</strong></p>
              <p>Phone - <strong class="white">+1 (555) 123-4567</strong></p>
              <p>Address - <strong class="white">123 Cyber Street
                Secure City, Cyberland
                Zip Code: 54321
                Country: Cyberland</strong></p>
            </div>
          </div>
        </section>

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

        <section class="auto contact-safety-section">
          <h2 class="font-3 mobile-font2 mb-textcenter">Dissecting Social Media Safety</h2>
          <div class="contact-safety-div">
            <div class="row">
              <div class="col-sm-4">
                <h5 class="mobile-font1">Cautious Connectivity</h5>
                <p class="mt-3">
                  We enable safe online connections without snooping on your personal conversations.
                </p>
              </div>
              <div class="col-sm-4 mb-textmt">
                <h5 class="mobile-font1">Sturdy Shield</h5>
                <p class="mt-3">
                  Offering a robust shield to safeguard from cyber bullies and online predators.
                </p>
              </div>
              <div class="col-sm-4 mb-textmt">
                <h5 class="mobile-font1">Cyber Smarts</h5>
                <p class="mt-3">
                  Educational resources to enhance your child's internet literacy and digital etiquette.
                </p>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-sm-4">
                <h5 class="mobile-font1">Unveiling Online Transparency</h5>
                <p class="mt-3">
                  Promote digital transparency while celebrating the independence of your teenager.
                </p>
              </div>
              <div class="col-sm-4 mb-textmt">
                <h5 class="mobile-font1">Trustful Tutorials</h5>
                <p class="mt-3">
                  Interactive and engaging tutorials showing how to navigate social media responsibly.
                </p>
              </div>
              <div class="col-sm-4 mb-textmt">
                <h5 class="mobile-font1">Reliable Rescue</h5>
                <p class="mt-3">
                  Emergency rescue features for immediate assistance during online threats.
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- meet the team -->
        <section class="teamsection auto">
          <h2 class="teamsection-h2 mobile-font3">Meet the Team</h2>
          <div class="card-group">
            <div class="card about-team-div">
                <img src="../cybersmartteens/photos/3d-casual-life-happy-smiling-man-points-with-finger-to-left-side.png" class="card-img-top teamimg" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mobile-font2">Kim Mingyu</h5>
                  <p class="card-text mt-3">
                    A seasoned cybersecurity analyst, brings years of experience in safeguarding digital landscapes, offering 
                    practical insights to fortify your online presence.
                  </p>
                  <p class="card-text mt-4">
                    <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi linkedin"></i></a>
                    <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                    <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi facebook"></i></a>
                  </p>
                </div>
            </div>
            <div class="card about-team-div">
                <img src="../cybersmartteens/photos/3d-casual-life-woman-holding-phone-with-white-screen.png" class="card-img-top teamimg" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mobile-font2">Na Na</h5>
                  <p class="card-text mt-3">
                    An influential advocate for digital well-being, combines her expertise in psychology with a passion for empowering teens, 
                    ensuring a holistic approach to online safety education.
                  </p>
                  <p class="card-text mt-4">
                    <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi linkedin"></i></a>
                    <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                    <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi facebook"></i></a>
                  </p>
                </div>
            </div>
            <div class="card about-team-div">
                <img src="../cybersmartteens/photos/3d-casual-life-young-man-holding-laptop-and-pointing-up.png" class="card-img-top teamimg" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title mobile-font2">Boo SeungKwan</h5>
                  <p class="card-text mt-3">
                    As a tech enthusiast and ethical hacker, SeungKwan not only demystifies the complexities of the digital world but also equips you with the skills needed to navigate it securely, making him your go-to guide for a safer online experience
                  </p>
                  <p class="card-text mt-4">
                    <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi linkedin"></i></a>
                    <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                    <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi facebook"></i></a>
                  </p>
                </div>
            </div>
          </div>
        </section>

        <section class="workopp center">
          <div class="row center">
            <div class="">
              <p class="center">Work at <span class="contact-websitename1">CyberSmartTeens</span></p>
              <h2 class="center mt-3 mobile-font3 font-3">Let's Protect <span class="contact-websitename1">Abdolecent</span></h2>
              <h4 class="center mt-3 mobile-font1">Explore our Available Opportunities</h4>
              <a class="btn center workopp-a indego-anchor" type="submit" href="#">See Openings</a>
            </div>  
          </div>
        </section>

        <section class="help center">
          <div>
            <div class="row help-header">
              <div class="col-md-12">
                <h3 class="font-45 mobile-font6">Contact Us</h3>
                <h6 class="mt-4 mb-textmt mobile-font1">Have any questions?We'd love to hear from you.</h6>
              </div>
            </div>
            <div class="row helpcardgp">
              <div class="card helpcard">
                  <div class="card-body">
                    <h5 class="card-title mobile-font2">Press</h5>
                    <p class="card-text mt-4">Are you interested in our latest news or working on a CyberSmartTeens story and need to get in touch?</p>
                    <a href="#" class="card-link btn contact-btn3">Visit Press Page</a>
                  </div>
              </div>
              <div class="card helpcard">
                  <div class="card-body">
                    <h5 class="card-title mobile-font2">Help & Support</h5>
                    <p class="card-text mt-4">Our support team is spread across the globe to give you answers fast.</p>
                    <a href="#" class="card-link btn contact-btn3">Visit Support Page</a>
                  </div>
              </div>
              <div class="card helpcard">
                  <div class="card-body">
                    <h5 class="card-title mobile-font2">Customer Care</h5>
                    <p class="card-text mt-4">Our support team is spread all over the world to give you fast response.</p>
                    <a href="#" class="card-link btn contact-btn3">Submit a Resquest</a>
                  </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <h1 class="font-9 text-center mobile-font6 cyan">
            Get Started
          </h1>
          <p class="text-center mt-5 contact-p1 auto">
            Ready to come on board? We bet you won't regret it! Sign up now and 
            let us provide you with a world of online freedom mixed with a dash of sass and 
            a huge pinch of safety.
          </p>
          <div class="mobile-center center">
            <a href="guidance.php" class="contact-guidance-ref pink-anchor btn">For Privacy Policy</a>
          </div>
        </section>

      </main>

      <?php
        include 'footer.php';
      ?>
    </section>
</body>
</html>