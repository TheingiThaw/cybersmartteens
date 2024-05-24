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
    
    <header>
      <div>
        <div class="livestream-header">
          <div>
            <div class="row">
              <div class="col-sm-5">
                <h1 class="ls-header-h1">LiveStream</h1>
              </div>
              <div class="col-sm-7 blue">
                <p>Welcome to a land of electrifying livestreaming, wrapped up in a safety blanket. We're all about offering exciting, 
                  boundary-pushing content while safeguarding our teen audiences from the hazards of online spaces.</p>
              </div>
            </div>
            <div class="center">
              <img src="../cybersmartteens/photos/3788809.jpg" class="ls-header-img" alt="">
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="mb-fullwidth">
      <!-- upcoming events -->
      <section class="livestream-s1 auto center">
        <div>
          <div class="row">
            <div class="col-sm-6">
              <p>Social Media Campaigns</p>
              <h3 class="info-websitename2 cyan">CyberSmartTeens</h3>
              <h2 class="mb-textmt mobile-font4">Upcoming Events</h2>
            </div>
            <div class="col-sm-6 center mb-textmt">
              <p>Empower yourself with the knowledge to navigate the digital world safely! Join our live streaming sessions on online safety, 
                where we discuss real-world scenarios, share expert tips, and build a community committed to creating a secure online space for teenagers like you.</p>
            </div>
          </div>
  
          <div class="row mt-5 between mobile-block">
            <div class="col-md-3 ls-s1-div">
              <p class="navy-blue">March</p>
              <h5 class="font-35 blue"><strong>3</strong></h5>
              <h6 class="mt-2 mobile-font1">Talking to Teens about online safety is vital to their wellbeing</h6>
              <p class="mt-3">Speaker - <span class="indego">Joshua Hong</span></p>
              <span class="cyan">10:30 a.m. - 12:00 p.m.</span>
              <p>Online</p>
              <a href="signin.php" class="btn ls-s1-a indego-anchor">Register<i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-md-3 ls-s1-div">
              <p class="navy-blue">March</p>
              <h5 class="font-35 blue"><strong>5</strong></h5>
              <h6 class="mt-2 mobile-font1">Protect kids' online safety and youth mental health</h6>
              <p class="mt-3">Speaker - <span class="indego">Xu Ming Hao</span></p>
              <span class="cyan">7:30 p.m. - 9:00 p.m.</span>
              <p>Online</p>
              <a href="signin.php" class="btn ls-s1-a indego-anchor">Register<i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-md-3 ls-s1-div">
              <p class="navy-blue">March</p>
              <h5 class="font-35 blue"><strong>6</strong></h5>
              <h6 class="mt-2 mobile-font1">Digital Literacy on Teenagers</h6>
              <p class="mt-3">Speaker - <span class="indego">Joshua Hong</span></p>
              <span class="cyan">10:30 a.m. - 12:00 p.m.</span>
              <p>Online</p>
              <a href="signin.php" class="btn ls-s1-a indego-anchor">Register<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="row">
            <p class="text-center mt-5">More events will update soon <i class="bi bi-cloud-arrow-up-fill"></i></p>
          </div>
        </div>
      </section>

      <section class="calendar">
        <iframe src="https://calendar.google.com/calendar/embed?height=300&wkst=1&bgcolor=%23f9f5b4&ctz=Asia%2FYangon&showTabs=1&showNav=1&showCalendars=0&src=ZW4ubW0jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%230B8043" class="calendar-iframe" frameborder="0" scrolling="no"></iframe>
      </section>

      <section class="center ls-sp-s1">
        <div>
          <h2 class="text-center mobile-font3">
            Unlock Exclusive Content and Events
          </h2>
          <p class="text-center mt-4">
            Join our membership program to access exclusive content and livestreaming events.
          </p>
          <div class="center mt-4">
            <div class="d-inline">
              <a href="signup.php" class="btn ls-sp-a pink-anchor">Join</a>
              <a href="information.php" class="btn ls-sp-a1 indego-anchor">Learn More</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Videos example -->
      <section class="mt-5 video-div">
        <div>
          <h2 class="text-center">Check Highlight VIDEOS</h2>
          <div class="mobile-center">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/HxySrSbSY7o?si=0wYJAcWjcXJaTAw7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/MB5VDIebMd8?si=FqbVgiBU1Tq8z_cb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/XMa1XKGRae8?si=0kY9PGEMLf6psX3a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- safety features -->
      <section class="ls-sf-section center">
        <div>
          <h2 class="mobile-font2">Spectacular safety features</h2>
          <div class="row mt-5">
            <div class="col-md-6">
              <div>
                <h5 class="navy-blue mobile-font1">Parental Control</h5>
                <p class="mt-3">A fail-safe shield that flexes with your preferences.</p>
              </div>
              <div class="ls-sf-div">
                <h5 class="navy-blue mobile-font1">Screen Time Limits</h5>
                <p class="mt-3">Supplying a watchful timer that treasures your time.</p>
              </div>
              <div class="ls-sf-div">
                <h5 class="navy-blue mobile-font1">Secure Sign-ons</h5>
                <p class="mt-3">Yours for the taking-secure sign-on protocols that don't play with fire.</p>
              </div>
            </div>
            <div class="col-md-6 mb-textmt">
              <div>
                <h5 class="navy-blue mobile-font1">livestream Moderators</h5>
                <p class="mt-3">Keeping the chat chaos in check, for tranquility in the turbulance.</p>
              </div>
              <div class="ls-sf-div">
                <h5 class="navy-blue mobile-font1">Personal Data Shield</h5>
                <p class="mt-3">Say a hearty hello to the shield that makes your private deets delete on sight.</p>
              </div>
              <div class="ls-sf-div">
                <h5 class="navy-blue mobile-font1">Account Recovery</h5>
                <p class="mt-3">Yours for the taking-secure sign-on protocols that don't play with fire.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Membership ADS -->
       <!-- price -->
      <section class="pricingPlan">
        <p class="text-center">Social Media Campaigns</p>
        <h2 class="text-center mobile-font4">Pricing Plan</h2>
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
                <ul class="mb-textmt">
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signin.php" class="btn nav-a center ls-ci-a pink-anchor">Subscribe</a>
                </div>
              </div>
            </div>
            <div class="carousel-item ls-ci-div auto">
              <div>
                <p class="text-center">3 Times Plan</p>
                <h6 class="text-center font-2 navy-blue mobile-font4">$17.9/mo</h6>
                <ul class="mb-textmt">
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signin.php" class="btn nav-a center ls-ci-a pink-anchor">Subscribe</a>
                </div>
              </div>
            </div>
            <div class="carousel-item ls-ci-div auto">
              <div>
                <p class="text-center">Twice Plan</p>
                <h6 class="text-center font-2 navy-blue mobile-font4">$15/mo</h6>
                <ul class="mb-textmt">
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signin.php" class="btn nav-a center ls-ci-a pink-anchor">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Speakers -->
      <section class="speakers">
        <p class="text-center">CyberSmartTeens</p>
        <h2 class="text-center mobile-font4 mb-textmt">Meet the Speakers</h2>
        <div id="carouselExample" class="carousel slide ls-speakers-div row">
          <div class="col-sm-1 center">
            <button class="carousel-control-prev-speakers" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden red">Previous</span>
            </button>
          </div>
          <div class="col-sm-10">
            <div class="carousel-inner auto">
              <div class="carousel-item active">
                <div class="card-group row">
                  <div class="card ls-speaker col-md-4">
                    <div class="mobile-center">
                      <img src="../cybersmartteens/photos/3d-casual-life-happy-smiling-man-points-with-finger-to-left-side.png" class="card-img-top ls-teamimg" alt="...">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title mobile-font2">Kim Mingyu</h5>
                      <p class="card-text mb-textmt">
                        A seasoned cybersecurity analyst, brings years of experience in safeguarding digital landscapes, 
                        offering practical insights to fortify your online presence.
                      </p>
                      <p class="card-text">
                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi"></i></a>
                        <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                        <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi"></i></a>
                      </p>
                    </div>
                  </div>
                  <div class="card ls-speaker col-md-4">
                    <div class="mobile-center">
                      <img src="../cybersmartteens/photos/3d-casual-life-woman-holding-phone-with-white-screen.png" class="card-img-top ls-teamimg" alt="...">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title mobile-font2">NaNa</h5>
                      <p class="card-text mb-textmt">
                        An influential advocate for digital well-being, combines her expertise in psychology with a passion for empowering teens, ensuring a holistic approach to online safety education.
                      </p>
                      <p class="card-text">
                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi"></i></a>
                        <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                        <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi"></i></a>
                      </p>
                    </div>
                  </div>
                  <div class="card ls-speaker col-md-4">
                    <div class="mobile-center">
                      <img src="../cybersmartteens/photos/3d-casual-life-young-man-holding-laptop-and-pointing-up.png" class="card-img-top ls-teamimg" alt="...">
                    </div>
                    <div class="card-body text-center">
                      <h5 class="card-title mobile-font2">John William</h5>
                      <p class="card-text mb-textmt">
                        As a tech enthusiast and ethical hacker, William not only demystifies the complexities of the digital world but also equips you with the skills needed to navigate it securely, making him your go-to guide for a safer online experience
                      </p>
                      <p class="card-text">
                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi"></i></a>
                        <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                        <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi"></i></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card-group row">
                  <div class="card ls-speaker col-md-4">
                    <img src="../cybersmartteens/photos/3d-casual-life-happy-smiling-man-points-with-finger-to-left-side.png" class="card-img-top ls-teamimg" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">Kim Mingyu</h5>
                      <p class="card-text">
                        A seasoned cybersecurity analyst, brings years of experience in safeguarding digital landscapes, offering practical insights to fortify your online presence.
                      </p>
                      <p class="card-text">
                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi"></i></a>
                        <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                        <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi"></i></a>
                      </p>
                    </div>
                  </div>
                  <div class="card ls-speaker col-md-4">
                    <img src="../cybersmartteens/photos/3d-casual-life-woman-holding-phone-with-white-screen.png" class="card-img-top ls-teamimg" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">NaNa</h5>
                      <p class="card-text">
                        An influential advocate for digital well-being, combines her expertise in psychology with a passion for empowering teens, ensuring a holistic approach to online safety education.
                      </p>
                      <p class="card-text">
                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi"></i></a>
                        <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                        <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi"></i></a>
                      </p>
                    </div>
                  </div>
                  <div class="card ls-speaker col-md-4">
                    <img src="../cybersmartteens/photos/3d-casual-life-young-man-holding-laptop-and-pointing-up.png" class="card-img-top ls-teamimg" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title">John William</h5>
                      <p class="card-text">
                        As a tech enthusiast and ethical hacker, William not only demystifies the complexities of the digital world but also equips you with the skills needed to navigate it securely, making him your go-to guide for a safer online experience
                      </p>
                      <p class="card-text">
                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin ls-s1-bi"></i></a>
                        <a href="https://twitter.com/"><i class="bi bi-twitter-x ls-s1-bi x"></i></a>
                        <a href="https://facebook.com/"><i class="bi bi-facebook ls-s1-bi"></i></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1 center">
            <button class="carousel-control-next-speakers" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="row mt-5">
          <div>
            <h2 class="text-center mobile-font3">We're Hiring!</h2>
            <p class="text-center mt-3 mb-textmt">Join our dynamic team where innovation meets impact, and become a key player in shaping the future with us.</p>
            <a href="#" class="btn ls-sp-a center pink-anchor">Open positions</a>
          </div>
        </div>
      </section>

      <!-- Price for newsletters ADS -->
      <!-- Subscribe newsletter -->
      <section class="ls-subscription auto">
        <div class="ls-subscription-div">
          <h2 class="mobile-font2">Subscribe to our newsletters to get all the updates and news about staying safe online</h2>
          <div class="mt-5 subscribe-div auto">
            <label for="formGroupExampleInput" class="form-label">Enter your email here *</label>
            <div class="between mt-2">
              <input type="text" class="form-control" id="subscribe-email" placeholder="">
              <button id="newsletter-submitbtn" class="btn livestream-btn indego-anchor">Subscribe</button>
              <p id="emailFeedback"></p>
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

      <!-- curiosity corner -->
      <section class="ls-cc-section">
        <div>
          <h2 class="ls-cc-header">Curiosity Corner</h2>
          <div class="row ls-cc-div">
            <div class="col-md-6">
              <div>
                <h5 class="mobile-font1 cyan">How does the Parental Control work?</h5>
                <p class="mt-3 mb-textmt">A powerful potion stirred, enabling parents to set all sorts 
                  of controls on viewing duration, content types, and even chat participation.
                </p>
              </div>
              <div class="ls-sf-div">
                <h5 class="mobile-font1 cyan">What is the Personal Data Shield?</h5>
                <p class="mt-3 mb-textmt">An invisible cloak for your private details. Suspicious activity? Here comes the shield!</p>
              </div>
            </div>
            <div class="col-md-6 mb-textmt">
              <div>
                <h5 class="mobile-font1 cyan">Who are the Livestream Moderators?</h5>
                <p class="mt-3 mb-textmt">A squad of watchful guardians who monitor the chatrooms, ensuring everyone's playing nice.</p>
              </div>
              <div class="ls-sf-div">
                <h5 class="mobile-font1 cyan">What is Secure Sign-on?</h5>
                <p class="mt-3 mb-textmt">It's like a beefed-up lock system for your virtual home.
                  No trespassers allowed!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>



    <?php
      include 'footer.php';
    ?>
</body>
</html>