<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
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

    <main class="mb-fullwidth">
      <div class="row info-header">
        <div class="col-md-5 center">
          <div class="">
            <h2 class="info-header-text mobile-font4">Social Media Campaigns</h2>
            <p class="mt-5">Fostering digital literacy, raising awareness about cyberbullying, 
              and promoting responsible online behavior.  
              Empower teenagers to navigate social media platforms securely 
              and make informed decisions, contributing to a safer online environment 
              for adolescents</p>
          </div>
        </div>
        <div class="col-md-7 center">
          <img src="../cybersmartteens/photos/At the office-amico.png" class="info-header-img" alt="">
        </div>
      </div>

      <section class="info-welcome center">
        <div>
          <h2 class="font-3">
            Welcome to <span class="info-websitename">CyberSmartTeens</span>!
          </h2>
          <div class="row mt-5">
            <div class="col-sm-6 info-welcome-div">
              <p>
                With rampant online threats, securing a teenager's online space has 
                never been so crucial. CyberSmartTeens is here to bring that safety home!
              </p>
            </div>
            <div class="col-sm-6 info-welcome-div">
              <p>
                Through our sophisticated social media campagins, we skyrocket teenager's online 
                safety to exciting new heights!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-fullwidth">
        <div class="info-statistic center">
          <div class="info-statistic-div1 center">
            <div>
              <h2 class="font-35">1000+</h2>
              <p>Campaigns launched</p>
            </div>
          </div>
          <div class="info-statistic-div2 center">
            <div>
              <h2 class="font-35">100+</h2>
              <p>Schools participating</p>
            </div>
          </div>
          <div class="info-statistic-div3 center">
            <div>
              <h2 class="font-3">200,000+</h2>
              <p>Teens reached</p>
            </div>
          </div>
        </div>
      </section>

      <section class="info-ctb-section auto">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="info-s2-h2">Contribution to Teenager Safety on <br><span class="blue">Social</span> <span class="red">Media</span> <span class="indego">Platforms</span></h2>
          </div>
          <div class="col-sm-6">
            <div class="card info-s2-card mb-2">
              <div class="row g-0">
                <h5 class="card-title center mobile-font2">Education as a Shield</h5>
                <div class="col-md-7 mb-textmt">
                  <div class="card-body">
                    <p class="card-text info-s2-text mobile-font1">
                      Provide knowledge and skills needed to navigate social media responsibly and identify potential risks and take proactive measures to protect
                    </p>
                  </div>
                </div>
                <div class="col-md-5 center">
                  <img src="../cybersmartteens/photos/beam-remote-work-from-home.gif" class="img-fluid rounded-start info-s2-img" alt="...">
                </div>   
              </div>
            </div>
            <div class="card mb-2 info-s2-card">
              <div class="row g-0">
                <h5 class="card-title center mobile-font2 mb-textcenter">Supportive Community Mitigates Harm</h5>
                <div class="col-md-7 mb-textmt">
                  <div class="card-body">
                    <p class="card-text info-s2-text mobile-font1">
                      They will mitigate the harm caused by cyberbullying and online threats, 
                      seek help, report incidents, and support their peers in maintaining a positive online experience.
                    </p>
                  </div>
                </div>
                <div class="col-md-5 center">
                  <img src="../cybersmartteens/photos/coworking-crypto-safety-and-cybersecurity-for-cryptocurrency.gif" class="img-fluid rounded-start info-s2-img" alt="...">
                </div>
              </div>
            </div>
            <div class="card mb-2 info-s2-card">
              <div class="row g-0">
                <h5 class="card-title center mobile-font2">Empowered Decision-Making</h5>
                <div class="col-md-7 mb-textmt">
                  <div class="card-body">
                    <p class="card-text info-s2-text mobile-font1">
                      Empower teenagers with knowledge and critical skills to make decisions online. 
                      Envision a positive shift to discern potential risks, recognize digital threats, and make choices of their overall safety
                    </p>
                  </div>
                </div>
                <div class="col-md-5 center">
                  <img src="../cybersmartteens/photos/juicy-team-discussing-the-project.gif" class="img-fluid rounded-start info-s2-img" alt="...">
                </div>
              </div>
            </div>
            <div class="card mb-2 info-s2-card">
              <div class="row g-0">
                <h5 class="card-title center mobile-font2 mb-textcenter">Building a Culture of Empathy and Support</h5>
                <div class="col-md-7 mb-textmt">
                  <div class="card-body">
                    <p class="card-text info-s2-text mobile-font1"> 
                      To build an empathy and support culture digitally where teenagers actively support, 
                      share positive experiences, and stand against cyber harmful behaviors, navigating the online complexities.
                    </p>
                  </div>
                </div>
                <div class="col-md-5 center">
                  <img src="../cybersmartteens/photos/dazzle-line-online-language-learning.gif" class="img-fluid rounded-start info-s2-img" alt="...">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Trust partnerships -->
      <section class="partnership-section center">
        <div>
          <div class="partner-text auto text-center">
            <h3 class="capitalize font-2 cyan">Become A <span class="info-websitename1 indego">CyberSmartTeens
            </span> Partner</h3>
            <p class="mt-5">We are proud to be partners with department of homeland security, stay safe online and several
              school districts. Most partners host interactive events and mentorships, offering 
              students a truly immersive experience.
            </p>
          </div>
          <div id="carouselExampleAutoplaying" class="partnerships auto carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/download.png" class="partnerimg" alt="">
                    </div>
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/download__1_.png" class="partnerimg" alt="">
                    </div>
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/safekidslogo_corp_rgb_pos.png" class="partnerimg" alt="">
                    </div>
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/1631318910442.png" class="partnerimg" alt="">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/download.png" class="partnerimg" alt="">
                    </div>
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/download__1_.png" class="partnerimg" alt="">
                    </div>
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/safekidslogo_corp_rgb_pos.png" class="partnerimg" alt="">
                    </div>
                    <div class="col-3 center">
                      <img src="../cybersmartteens/photos/1631318910442.png" class="partnerimg" alt="">
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>

      <!-- Social-media campaigns -->
      <section class="mb-fullwidth">
        <h2 class="text-center mobile-font3 red">
          Discover Exciting Wrokshops for Teens
        </h2>
        <p class="text-center mt-3">
          Explore our collection of free online workshops for teens.
        </p>
        <div class="row campaigngp auto">
          <div class="col-md-6">
            <div class="campaign">
              <div class="row">
                <div class="col-md-6 center">
                  <div>
                    <h5 class="mobile-font1">Digital Safety Tips for Teens</h5>
                    <p class="mb-textmt">
                      Learn about Online Safety Measures for Teens
                    </p>
                    <div class="row mb-textmt">
                      <a href="#" class="btn info-oc-a pink-anchor">Register</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../cybersmartteens/photos/coworking-crypto-safety-and-cybersecurity-for-cryptocurrency.gif" class="campaignimg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="campaign">
              <div class="row">
                <div class="col-md-6 center">
                  <div>
                    <h5 class="mobile-font1">Cyberbullying: Recognition & Prevention</h5>
                    <p class="mb-textmt">
                      Master the Art of Social Media Privacy Settings
                    </p>
                    <div class="row mb-textmt">
                      <a href="#" class="btn info-oc-a pink-anchor">Register</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../cybersmartteens/photos/bubble-gum-digital-security-with-password-protected-email.gif" class="campaignimg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row campaigngp auto">
          <div class="col-md-6">
            <div class="campaign">
              <div class="row">
                <div class="col-md-6 center">
                  <div>
                    <h5 class="mobile-font1">Online Privacy of Personal Information</h5>
                    <p class="mb-textmt">
                      Discover the Dangers of Online Predators
                    </p>
                    <div class="row mb-textmt">
                      <a href="#" class="btn info-oc-a pink-anchor">Register</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../cybersmartteens/photos/juicy-girl-and-boy-searching-for-the-right-files.gif" class="campaignimg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="campaign">
              <div class="row">
                <div class="col-md-6 center">
                  <div>
                    <h5 class="mobile-font1">Password Security Importance</h5>
                    <p class="mb-textmt">
                      Learn How to Spot Fake News and Online Scams
                    </p>
                    <div class="row mb-textmt">
                      <a href="#" class="btn info-oc-a pink-anchor">Register</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../cybersmartteens/photos/dazzle-line-online-language-learning.gif" class="campaignimg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row center mt-4">
          <a href="#" class="btn info-oc-a1 indego-anchor">View All</a>
        </div>
      </section>

      <!-- Subscribe newsletter -->
      <section class="w-100 subscription-section">
        <div class="subscription auto">
          <div>
            <h2 class="text-center mobile-font2">Subscribe to our newsletters to get all the updates and news about staying safe online</h2>
            <div class="mb-3 subscribe-div auto mb-textmt">
              <label for="formGroupExampleInput" class="form-label">Enter your email here *</label>
              <div class="between mb-textmt">
                <input type="text" class="form-control" id="subscribe-email" placeholder="">
                <button class="btn info-sub-btn indego-anchor" id="newsletter-submitbtn">Subscribe</button>
                <p id="emailFeedback"></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>
        $(document).ready(function(){
          $('#newsletter-submitbtn').click(function(){
            var email = $('#subscribe-email').val();

            $.ajax({
              url: 'emailcheck.php',
              method: 'post',
              data: {email: email},
              dataType: 'json',
              success: function(response){
                if(response.email_exists){
                  $('#emailFeedback').html("Email already exists. Thanks for subscribing").css("color", "green");
                }
                if(response.newemail_added){
                  $('#emailFeedback').html("Thanks for subscribing").css("color", "green");
                }
              },
              error: function(response){
                alert("Error Processing");
              }
            });
          });
        });
      </script>
    
       <!-- price -->
       <section class="pricingPlan">
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
                  <a href="signin.php" class="btn center ls-ci-a pink-anchor">Subscribe</a>
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
                  <a href="signin.php" class="btn center ls-ci-a pink-anchor">Subscribe</a>
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
                  <a href="signin.php" class="btn center ls-ci-a pink-anchor">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- testimonials -->
      <section class="testimonials-section">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-interval="4000" data-bs-ride="carousel">
          <div class="carousel-inner testimonials auto">
            <div class="carousel-item active">
              <div class="row center">
                <div class="col-sm-6 mobile-center">
                  <img src="../cybersmartteens/photos/3d-casual-life-woman-holding-phone-with-white-screen.png" alt="">
                </div>
                <div class="col-sm-6">
                  <div class="row quote">
                    <i class="bi bi-quote"></i>
                  </div>
                  <div class="row stars">
                    <div class="col-sm-6">
                      <h6 class="mobile-font3">Becky G</h6>
                    </div>
                    <div class="col-sm-6">
                      <ul>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                      </ul>
                    </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis fuga amet veritatis dolorem dignissimos aliquid libero quo iusto voluptas accusamus quaerat porro similique minima aspernatur, eum maxime. Sunt, dolorem.</p>
                  </div>
                  <div class="row requote">
                    <i class="bi bi-quote"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row center">
                <div class="col-sm-6 mobile-center">
                  <img src="../cybersmartteens/photos/3d-casual-life-woman-holding-phone-with-white-screen.png" alt="">
                </div>
                <div class="col-sm-6">
                  <div class="row quote">
                    <i class="bi bi-quote"></i>
                  </div>
                  <div class="row stars">
                    <div class="col-sm-6">
                      <h6 class="mobile-font3">Becky G</h6>
                    </div>
                    <div class="col-sm-6">
                      <ul>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                      </ul>
                    </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis fuga amet veritatis dolorem dignissimos aliquid libero quo iusto voluptas accusamus quaerat porro similique minima aspernatur, eum maxime. Sunt, dolorem.</p>
                  </div>
                  <div class="row requote">
                    <i class="bi bi-quote"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row center">
                <div class="col-sm-6 mobile-center">
                  <img src="../cybersmartteens/photos/3d-casual-life-woman-holding-phone-with-white-screen.png" alt="">
                </div>
                <div class="col-sm-6">
                  <div class="row quote">
                    <i class="bi bi-quote"></i>
                  </div>
                  <div class="row stars">
                    <div class="col-sm-6">
                      <h6 class="mobile-font3">Becky G</h6>
                    </div>
                    <div class="col-sm-6">
                      <ul>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                        <li class="star"><i class="bi bi-star-fill"></i></li>
                      </ul>
                    </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat corporis fuga amet veritatis dolorem dignissimos aliquid libero quo iusto voluptas accusamus quaerat porro similique minima aspernatur, eum maxime. Sunt, dolorem.</p>
                  </div>
                  <div class="row requote">
                    <i class="bi bi-quote"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

      <section class="info-mailing">
        <div class="row">
          <div class="askAnything">
            <h4>About<span class="info-websitename cyan">CyberSmartTeens</span></h4>
            <h2 class="mt-2 mobile-font2 mb-textmt">Creating Safe Online Society For All Youngsters Globally</h2>
            <p class="mt-2 mb-textmt">Ask anything especially about teenagers'cyber security here</p>
          </div>
        </div>

        <div class="info-mailimg">
          <img src="../cybersmartteens/photos/3d-casual-life-smiling-man-with-laptop-raising-his-index-finger.png" class="" alt="">
        </div>

        <!-- mail form from validation bootstrap is-valid or is-invalid -->
        <form class="row g-3 info-Mail border-opacity-75 auto">
          <div class="col-md-6">
            <label for="validationServer01" class="form-label">Name</label>
            <input type="text" class="form-control" id="contactName" value="" required>
            <div class="valid-feedback"></div>
          </div>
          <div class="col-md-6">
            <label for="validationServer02" class="form-label">Email</label>
            <input type="text" class="form-control" id="contactEmail" value="" required>
            <div class="valid-feedback"></div>
          </div>
          <div class="col-md-12">
            <label for="validationServer04" class="form-label">Subject</label>
            <select class="form-select" id="subject" aria-describedby="validationServer04Feedback" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
            <div id="validationServer04Feedback" class="invalid-feedback"></div>
          </div>
          <div class="col-md-12">
            <label for="validationServer05" class="form-label">Leave a message</label>
            <input type="text" class="form-control" id="message" aria-describedby="validationServer05Feedback" required>
            <div id="validationServer05Feedback" class="invalid-feedback">
              
            </div>
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