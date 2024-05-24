<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About CyberSmartTeens</title>
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
        <section class="intro">
              <div class="row introbody">
                  <div class="col-sm-6 ps-5 center text-center">
                      <div>
                        <p>Social Media Campaings Ltd.</p>
                        <h3 class="about-header-text"><span class="about-websitename">CyberSmartTeens</span> Journey</h3>
                        <p class="mt-4">
                          Empowering teens for a safer online journey – Cybersmartteens, your digital ally in fostering a secure and positive online presence.
                        </p>
                        <a href="signup.php" class="btn about-signup cyan-anchor">Sign Up</a>
                      </div>
                  </div>
                  <div class="col-sm-6 center">
                    <img src="../cybersmartteens/photos/3d-casual-life-chatgpt-robot-with-speech-bubble.png" class="img-fluid introimg" alt="...">
                  </div>
              </div>
        </section>

        <section class="aboutus">
           <div class="row g-0 mb-inline">
              <div class="col-4 bgcolor">
                <div>
                  <img src="../cybersmartteens/photos/At the office-amico.png" class="img-fluid aboutimg" alt="...">
                </div>
              </div>
              <div class="col-3"></div>
              <div class="col-4 aboutbody">
                <div class="card-body">
                  <h3 class="card-title mb-textcenter mobile-font4">About Us</h3>
                  <p class="card-text mt-4 mb-textcenter mb-textmt">   
                    "Welcome to Social Media Campaigns Ltd. (SMC), your dedicated ally in promoting a safe and positive online 
                    experience for teenagers. At SMC, we are committed to empowering young
                    minds with knowledge and support to navigate the digital world securely, fostering a community where online safety is paramount 
                  </p>
                </div>
              </div>
           </div>
        </section>

        <section class="about-welcome-section">
          <div class="row">
            <div class="col-sm-10">
              <h1 class="about-text1 mobile-font2">
                Welcome to the internet's playground! Dive into the enlivening world 
                of <span class="intext-webname">CyberSmartTeens</span>.
              </h1>
            </div>
          </div>
        </section>

        <section class="teamsection auto">
            <h2 class="teamsection-h2 mobile-font3">Meet the Team</h2>
            <div class="card-group">
              <div class="card about-team-div">
                  <img src="../cybersmartteens/photos/3d-casual-life-happy-smiling-man-points-with-finger-to-left-side.png" class="card-img-top teamimg" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title mobile-font2">Kim Mingyu</h5>
                    <p class="card-text mt-3">
                      A seasoned cybersecurity analyst, brings years of experience in safeguarding digital landscapes, offering practical insights to fortify your online presence.
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
                      An influential advocate for digital well-being, combines her expertise in psychology with a passion for empowering teens, ensuring a holistic approach to online safety education.
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

        <section class="about-defend-section">
          <div class="d-flex center">
              <img src="photos/network-scammer-icon.png" class="about-defend-img" alt="">
              <h6 class="about-text2">
                Buckle Up, Teens!
                It's wild!
              </h6>
          </div>
        </section>

        <section class="center about-service-section">
          <div>
            <div class="row about-service-row center">
              <div class="d-flex">
                <i class="bi bi-check2-all center quote"></i>
                <h2 class="about-text3">Safe Surfing</h2>
              </div>
            </div>
            <div class="row about-service-row center">
              <div class="d-flex">
                <i class="bi bi-check2-all center quote"></i>
                <h2 class="about-text3">Member Privileges</h2>
              </div>
            </div>
            <div class="row about-service-row center">
              <div class="d-flex">
                <i class="bi bi-check2-all center quote"></i>
                <h2 class="about-text3">Live Training</h2>
              </div>
            </div>
          </div>
        </section>
        
        <div class="center about-program">
          <div>
            <h2 class="font-9 center red">200</h2>
            <h6 class="mt-4">Programs streamed live each year!</h6>
          </div>
        </div>

        <section class="services">
          <div class="row">
            <div class="col-6 mobile-center">
              <img src="../cybersmartteens/photos/casual-life-3d-man-chatting-on-dating-site.png" class="service-img" alt="">
            </div>
            <div class="col-sm-6 text-center">
              <div class="card-body">
                <h3 class="about-header-text">Education Hub:</h3>
                <p class="mt-4 mb-textmt">Empowering teens through informative resources, tutorials, and workshops to enhance their digital literacy and foster responsible online behavior.</p>
              </div>
            </div>
          </div>
          <div class="row service-mt">
            <div class="col-sm-6 text-center">
              <div class="card-body">
                <h3 class="about-header-text">Interactive Community:</h3>
                <p class="mt-4 mb-textmt">Cultivating a supportive online space where teenagers can connect, share experiences, and engage in discussions about staying safe in the digital landscape.</p>
              </div>
            </div>
            <div class="col-6 center">
              <img src="../cybersmartteens/photos/3d-casual-life-monitor-safe.png" class="service-img" alt="">
            </div>
          </div>
          <div class="row service-mt">
            <div class="col-6">
              <img src="../cybersmartteens/photos/3d-casual-life-secure-document.png" class="service-img" alt="">
            </div>
            <div class="col-sm-6 text-center">
              <div class="card-body">
                <h3 class="about-header-text">Monthly Insights Newsletter</h3>
                <p class="mt-4">Providing valuable updates, expert tips, and the latest trends in online safety through our monthly newsletter, keeping teens and their parents informed and empowered.</p>
              </div>
            </div>
          </div>
        </section>

        <section class="mailing">
          <div class="row">
            <div class="askAnything">
              <h4 class="mobile-font1">About<span class="mail-websitename">CyberSmartTeens</span></h4>
              <h2 class="mobile-font2 mb-textmt">Creating Safe Online Society For All Youngsters Globally</h2>
              <p class="mb-textmt">Ask anything especially about teenagers'cyber security here</p>
            </div>
          </div>

          <div class="about-mailimg">
            <img src="../cybersmartteens/photos/3d-casual-life-smiling-man-with-laptop-raising-his-index-finger.png" class="" alt="">
          </div>

          <!-- mail form from validation bootstrap is-valid or is-invalid -->
          <form class="row g-3 mail aboutusMail border-opacity-75 auto">
            <div class="col-md-6">
              <label for="validationServer01" class="form-label">Name</label>
              <input type="text" class="form-control" id="contactName" value="">
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
              <div id="contactmail-feedback" class="invalid-feedback"></div>
            </div>
            <div class="col-md-12">
              <label for="validationServer05" class="form-label">Leave a message</label>
              <input type="text" class="form-control" id="message" aria-describedby="validationServer05Feedback">
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