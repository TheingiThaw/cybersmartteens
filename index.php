<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSmartTeens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mobileres.css">
    <link rel="stylesheet" href="css/animation.css">
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

  
  <main id="searchContainer">
      <!-- section1 -->
    <section class="index-section">
      <div class="row">
        <div class="col-sm-6">
          <img src="../cybersmartteens/photos/16812-removebg-preview.png" class="index-s1-img" alt="">
        </div>
        <div class="col-sm-6 center">
          <div class="">
            <p class="index-websitename">CyberSmartTeens</p>
            <h1 class="index-s1-text text-center">We prioritise Teenagers' Safety Online</h1>
            <div class="center">
              <nav class="navbar">
                <div class="">
                  <form class="d-flex mt-4" role="search">
                    <input id="searchInput" class="form-control me-2 info-searchbar" type="search" 
                    placeholder="Search" aria-label="Search">
                    <button class="btn index-btn" type="submit">Search</button>
                  </form>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <script>
      $(document).ready(function () {
        // Function to highlight the keyword
        function highlightKeyword(containerId, keyword) {
          var container = $("#" + containerId);
          var content = container.html(); // Use .html() instead of .text() to keep the HTML tags
          var highlightedContent = content.replace(new RegExp(keyword, 'gi'), function (match) {
            return '<span class="highlight">' + match + '</span>';
          });
          container.html(highlightedContent);
        }

        // Event handler for the search form submission
        $("form[role='search']").submit(function (event) {
          event.preventDefault();
          var keyword = $("#searchInput").val();
          highlightKeyword("searchContainer", keyword);
        });
      });
    </script>

    <section class="index-section2">
      <div class="row">
        <div class="col-sm-6 center">
          <div>
            <h2 class="mobile-font2 mb-textcenter">
              Highlighting the Importance of Online Safety with Recent Statics and Facts
            </h2>
            <p class="mt-5 mb-textcenter">
              Discover the alarming statics and facts about online safety that every teen should know. 
            </p>
            <div class="row mt-5 mobile-center">
              <div class="col-sm-6">
                <h5 class="mobile-font2 mb-textcenter">Stay Informed</h5>
                <p class="mt-4 mb-textcenter">Learn about the risks and best practices for staying safe online.</p>
              </div>
              <div class="col-sm-6 mb-textmt">
                <h5 class="mobile-font2 mb-textcenter">Take Action</h5>
                <p class="mt-4 mb-textcenter">Join our community and empower yourself with the knowledge to navigate the digital world.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mobile-center">
          <img src="../cybersmartteens/photos/16813-removebg-preview.png" class="index-s2-img1" alt="">
        </div>
      </div>
    </section>

    <!-- how to stay safe -->
    <section class="socialmedia-section">
      <div>
        <h2 class="text-center mb-5 mobile-font2">Social Media and Teenagers Awareness</h2>
        <div class="row mt-5">
          <div class="col-3 center">
            <a class="btn fb sm-tag center" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
              <div>
                <i class="bi bi-meta sm-bi"></i>
                <h6>Facebook</h6>
              </div>
            </a>
          </div>
          <div class="col-3 center">
            <button class="btn insta sm-tag center" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
              <div>
                <i class="bi bi-instagram sm-bi"></i>
                <h6>Instagram</h6>
              </div>
            </button>
          </div>
          <div class="col-3 center">
            <button class="btn snapchat sm-tag center" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
              <div>
                <i class="bi bi-snapchat sm-bi"></i>
                <h6>SnapChat</h6>
              </div>
            </button>
          </div>
          <div class="col-3 center">
            <button class="btn youtube sm-tag center" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample4">
              <div>
                <i class="bi bi-youtube sm-bi"></i>
                <h6>Youtube</h6>
              </div>  
            </button>
          </div>

          <div class="row">
            <div class="col-3 mobile-sm-tag">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                  <p>
                    <span>Risk</span>: <br>
                    Privacy concerns due to the sharing of personal information.
                  </p>
                  <p>
                    <span>Tips</span>: <br>
                    Adjust privacy settings, be cautious about what is shared publicly, and regularly review friend lists.
                  </p>
                </div>
              </div>
            </div>
            <div class="mobile-sm-tag col-3">
              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                  <p>
                    <span>Risk:</span><br>
                    Cyberbullying and exposure to inappropriate content.
                  </p>
                  <p>
                    <span>Tips:</span><br>
                    Set a private account, report and block inappropriate users, and encourage positive online behavior.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-3 mobile-sm-tag">
              <div class="collapse multi-collapse" id="multiCollapseExample3">
                <div class="card card-body">
                  <p>
                    <span>Risk:</span><br>
                    Potential for the sharing of explicit content.
                  </p>
                  <p>
                    <span>Tips:</span><br>
                    Use privacy settings, be cautious about accepting friend requests, and report any inappropriate behavior.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-3 mobile-sm-tag">
              <div class="collapse multi-collapse" id="multiCollapseExample8">
                <div class="card card-body">
                  <p>
                    <span>Risks:</span><br>
                    Exposure to inappropriate content and potential privacy concerns.
                  </p>
                  <p>
                    <span>Tips:</span><br>
                    Use Restricted Mode, report inappropriate videos, and be cautious about sharing personal information.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="row mt-5">
          <div class="col-3 center">
            <button class="btn pinterest sm-tag center" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample2">
              <div>
                <i class="bi bi-pinterest sm-bi"></i>
                <h6>Pinterest</h6>
              </div>
            </button>
          </div>
          <div class="col-3 center">
            <a class="btn tiktok sm-tag center" data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
              <div>
                <i class="bi bi-tiktok sm-bi"></i>
                <h6>TikTok</h6>
              </div>
            </a>
          </div>
          <div class="col-3 center">
            <button class="btn reddit sm-tag center" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample3">
              <div>
                <i class="bi bi-reddit sm-bi"></i>
                <h6>Reddit</h6>
              </div>
            </button>
          </div>
          <div class="col-3 center">
            <button class="btn twitter sm-tag center" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
              <div>
                <i class="bi bi-twitter-x sm-bi"></i>
                <h6>Twitter</h6>
              </div>
            </button>
          </div>
          

          <div class="row">
            <div class="col-3 mobile-sm-tag">
              <div class="collapse multi-collapse" id="multiCollapseExample6">
                <div class="card card-body">
                  <p>
                    <span>Risks:</span><br>
                    Exposure to inappropriate or misleading content.
                  </p>
                  <p>
                    <span>Tips:</span><br>
                    Use the "report" feature, curate boards carefully, and be mindful of the content you save.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-3 mobile-sm-tag">
              <div class="collapse multi-collapse" id="multiCollapseExample5">
                <div class="card card-body">
                  <p>
                    <span>Risk:</span><br>
                    Exposure to inappropriate content and potential privacy issues.
                  </p>
                  <p>
                    <span>Tips:</span><br>
                    Use private accounts, be cautious about sharing personal information, and report any inappropriate content.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-3 mobile-sm-tag">
              <div class="collapse multi-collapse" id="multiCollapseExample7">
                <div class="card card-body">
                  <p>
                    <span>Risks:</span><br>
                    Exposure to inappropriate or harmful discussions.
  
                  </p>
                  <p>
                    <span>Tips:</span><br>
                    Be cautious when participating in discussions, report inappropriate content, and follow subreddit guidelines.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-3 mobile-sm-tag">
              <div class="collapse multi-collapse" id="multiCollapseExample4">
                <div class="card card-body">
                  <p>
                    <span>Risk:</span><br>
                    Exposure to cyberbullying and inappropriate content.
                  </p>
                  <p>
                    <span>Tips:</span><br>
                    Adjust privacy settings, report and block abusive accounts, and think before posting.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section3 workshop-->
    <section>
      <div class="card borderless mb-3 index-s3-div">
        <div class="row g-0">
          <div class="col-sm-6 center">
            <img src="../cybersmartteens/photos/dazzle-line-online-language-learning.gif" class="index-s3-img" alt="...">
          </div>
          <div class="col-sm-6 center">
            <div class="card-body center">
              <div>
                <h2 class="card-title mobile-font3 navy-blue">Online Safety Workshop</h2>
                <p class="card-text mobile-center mt-4">
                    To be 
                      <h4 class="index-s3-header"><span class="index-s3-text">S</span>mart</h4>
                      <h4 class="index-s3-header"><span class="index-s3-text">M</span>eeting</h4>
                      <h4 class="index-s3-header"><span class="index-s3-text">A</span>ccepting</h4>
                      <h4 class="index-s3-header"><span class="index-s3-text">R</span>eliable</h4>
                      <h4 class="index-s3-header"><span class="index-s3-text">T</span>ell</h4>
                    <p class="mb-textcenter">on the internet. It is <span class="indego">Free to Join!!</span></p>
                </p>
                <a href="information.php" class="btn s3-anchor center pink-anchor">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <!--  -->
    <section class="index-s5 center auto">
      <div class="row index-s5-div">
        <div class="col-md-4">
          <div>
            <i class="bi bi-info-circle-fill center sm-bi"></i>
            <h4 class="text-center mt-4 mobile-font2">Empowering Teens to Stay Safe Online</h4>
            <p class="text-center mt-4">
              SMC CyberSmartTeens provides valuable information on cyberbullying, privacy settings, and safe browsing to help teens navigate the digital world.
            </p>
            <div class="center mt-5">
              <div class="d-inline">
                <a href="information.php" class="btn index-s5-a1 indego-anchor">Learn More</a>
                <a href="signup.php" class="btn index-s5-a2 pink-anchor2">Sign Up <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-margintop">
          <div>
            <i class="bi bi-intersect sm-bi center"></i>
            <h4 class="text-center mt-4 mobile-font2">Interactive Wrokshops and Live Streaming</h4>
            <p class="text-center mt-4">
              Join our free online workshops and live streaming sessions to learn practical tips and strategies for staying safe online.
            </p>
            <div class="center mt-5">
              <div class="d-inline">
                <a href="livestream.php" class="btn index-s5-a1 indego-anchor">Learn More</a>
                <a href="signup.php" class="btn index-s5-a2 pink-anchor2">Sign Up <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-margintop">
          <div>
            <i class="bi bi-newspaper sm-bi center"></i>
            <h4 class="text-center mt-4 mobile-font2">Membership Benefits and Newsletters</h4>
            <p class="text-center mt-4">
              Become a member to gain access to exclusive benefits, receive our informative newsletters, and connect with a community of like-minded individuals.
            </p>
            <div class="center mt-5">
              <div class="d-inline">
                <a href="information.php" class="btn index-s5-a1 indego-anchor">Learn More</a>
                <a href="signup.php" class="btn index-s5-a2 pink-anchor2">Sign Up <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- section3 newsletter-->
    <section class="index-s4">
      <div class="index-s4-div">
        <div class="row g-0">
          <div class="col-md-8 center">
            <div class="card-body mobile-center">
              <div>
                <h5 class="card-title font-2 mb-textcenter">Boost awareness: The chameleon effect of social media!</h5>
                <p class="card-text mt-4 mb-textcenter">We spill all the beans on the pulse-pounding risks that lurk behind every like, share, and comment.</p>
                <div class="mobile-center mb-textcenter">
                  <a href="information.html" class="btn index-btn1 indego-anchor">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 center">
            <img src="../cybersmartteens/photos/coworking-crypto-safety-and-cybersecurity-for-cryptocurrency.gif" class="index-s4-img" alt="...">
          </div>
        </div>
      </div>
    </section>

    <!-- mom and dad -->
    <section class="index-p-s auto">
      <div class="row">
        <div class="col-md-6">
          <div class="mobile-center">
            <img src="../cybersmartteens/photos/3d-business-man-and-child-sitting-at-the-table.png" class="" alt="">
          </div>
          <h5 class="mt-3 mb-textcenter mobile-font2">Mom's Know-How</h5>
          <p class="mt-3 mb-textcenter">Terrified about your teen's TikTok run?Confused by Clubhouse?
            We spill the beans on all the popular social apps.
          </p>
        </div>
        <div class="col-md-6">
          <div class="mobile-center">
            <img src="../cybersmartteens/photos/3d-business-man-and-child-sitting-at-the-table.png" alt="">
          </div>
          <h5 class="mt-3 mb-textcenter mobile-font2">Dad's Guide to Gaming</h5>
          <p class="mt-3 mb-margintop mb-textcenter">From Minecraft's mines to Fortnite's fights, understand the pros and cons 
            of all big online games your teen might be diving into.
          </p>
        </div>
      </div>
    </section>

    <!-- Subscribe newsletter -->
    <section class="subscription-section">
      <div class="subscription auto">
        <div>
          <h2 class="text-center mobile-font2">Subscribe to our newsletters to get all the updates and news about staying safe online</h2>
          <div class="mb-3 subscribe-div auto">
            <div>
              <label for="formGroupExampleInput" class="form-label mt-4">Enter your email here *</label>
              <div class="d-flex justify-content-between">
                <input type="text" class="form-control mb-input" id="subscribe-email" placeholder="">
                <button id="newsletter-submitbtn" class="btn index-btn1 indego-anchor">Subscribe</button>
                <p id="emailFeedback"></p>
              </div>
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
      
      <!-- Membership ADS -->
       <!-- price -->
    <section class="pricingPlan">
        <p class="text-center">Social Media Campaigns</p>
        <h2 class="">Pricing Plan</h2>
        <p class="text-center mt-2 mb-textmt">Upgrade to get the benefits of CyberSmartTeens' Newsletters and Live Streaming</p>
        <div id="carouselExampleAutoplaying" class="carousel slide mt-4" data-bs-interval="3000">
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
                <h6 class="text-center navy-blue font-2 mobile-font3">$19/mo</h6>
                <ul>
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signup.php" class="btn center ls-ci-a pink-anchor">Subscribe</a>
                </div>
              </div>
            </div>
            <div class="carousel-item ls-ci-div auto">
              <div>
                <p class="text-center">3 Times Plan</p>
                <h6 class="text-center navy-blue font-2 mobile-font3">$17.9/mo</h6>
                <ul>
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signup.php" class="btn center ls-ci-a pink-anchor">Subscribe</a>
                </div>
              </div>
            </div>
            <div class="carousel-item ls-ci-div auto">
              <div>
                <p class="text-center">Twice Plan</p>
                <h6 class="text-center navy-blue font-2 mobile-font3">$15/mo</h6>
                <ul>
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signup.php" class="btn nav-a center ls-ci-a pink-anchor">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>

    <section class="auto index-blog">
      <p class="text-center index-websitename">CyberSmartTeens</p>
      <h2 class="text-center mt-2 font-3">Blogs</h2>
      <p class="text-center mt-3">Read and Learn from Online articles</p>
      <div class="index-blog-div">
        <div class="index-s2-card card borderless">
          <img src="../cybersmartteens/photos/cubes-man-on-a-surfboard-conquers-social-media.gif" class="card-img-top index-s2-img" alt="...">
           <div class="card-body">
            <span class="small-text">5 mins read</span>
            <h5 class="card-title mt-2">Popular Social Media Hubs among Teenagers</h5>
            <p class="card-text mb-textmt">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="center mobile-center">
              <a href="#" class="btn index-btn1 pink-anchor">Read More <i class="bi bi-arrow-right-circle"></i></a>
            </div>
          </div>
        </div>
        <div class="index-s2-card card borderless">
          <img src="../cybersmartteens/photos/juicy-girl-working-at-home.gif" class="card-img-top index-s2-img" alt="...">
          <div class="card-body">
            <span class="small-text">5 mins read</span>
            <h5 class="card-title mt-2">Educational Websites</h5>
            <p class="card-text mb-textmt">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="center mobile-center">
              <a href="#" class="btn index-btn1 pink-anchor">Read More <i class="bi bi-arrow-right-circle"></i></a>
            </div>
          </div>
        </div>
        <div class="index-s2-card card borderless">
          <img src="../cybersmartteens/photos/florid-hands-holding-mobile-game-controller.gif" class="card-img-top index-s2-img" alt="...">
          <div class="card-body">
            <span class="small-text">5 mins read</span>
            <h5 class="card-title mt-2">Popular Games</h5>
            <p class="card-text mb-textmt">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="center mobile-center">
              <a href="#" class="btn index-btn1 pink-anchor">Read More <i class="bi bi-arrow-right-circle"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row center mt-4">
        <a href="#" class="btn index-btn2 indego-anchor">More Contents</a>
      </div>
    </section>

    <section class="index-ls-s auto center">
      <div class="row">
        <div class="col-sm-7">
          <h2 class="font-3 navy-blue mobile-font4">Live Stream Love</h2>
          <p class="mt-5 mb-textmt">Say bye-bye to live stream laments. Our mentors will teach 
            you to minus the dangers tied to internet exposure.
          </p>
          <p class="mt-4">
            Master Twitch, understand live podcasts, and maintain composure during lives.
            We're committed to ensuring a safe and enjoyable online environment!
          </p>
          <p class="mt-4">
            Our subscription service delivers weekly briefings, exclusive materials, helpful advice, bonus insights,
            and plenty more besides.
          </p>
        </div>
        <div class="col-sm-5 center">
          <img src="../cybersmartteens/photos/lounge-online-meeting.gif" class="index-ls-img" alt="">
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="index-FAQ-section">
      <div class="auto index-FAQ">
        <h2 class="text-center font-3 mobile-font4">FAQs</h2>
        <p class="text-center mt-4">
          Find answer to commonly asked questions about online safety and SMC and CyberSmartTeens's initiatives.
        </p>
        <br>
        <hr>
        <div class="index-FAQ">
          <div>
              <h6 class="mobile-font1">How can I stay safe online?</h6>
              <p class="mt-4 justifytext">
                To stay safe online, make sure use strong and unique passwords, be cautious when sharing personal 
                information, and regularly update your devices and software.
              </p>
              <hr>
          </div>
          <div>
              <h6 class="mobile-font1">What is cyberbullying?</h6>
              <p class="mt-4 justifytext">
                Cyberbullying refers to the use of technology to harass, initimidate, or 
                harm others. It can occur through social media, messaging apps, or online forums.
              </p>
              <hr>
          </div>
          <div>
              <h6 class="mobile-font1">How can I protect my privacy?</h6>
              <p class="mt-4 justifytext">
                To protect your privacy online, be cautious about the information you share, adjust 
                your privacy settings on social media platforms, and use secure and encrypted communication channels.
              </p>
              <hr>
          </div>
          <div>
              <h6 class="mobile-font1">What is phishing?</h6>
              <p class="mt-4 justifytext">
                Phishing is a fraudulent practice where cybercriminals attempt to trick individuals into revealing 
                sensitive information, such as passwords or credit card details, by posing as a trustworthy entity.
              </p>
              <hr>
          </div>
          <div>
              <h6 class="mobile-font1">How can I report online abuse?</h6>
              <p class="mt-4 justifytext">
                If you encounter online abuse, such as cyberbullying or harassment, report it to the relevant platform or website. 
                You can also seek help from trusted adults or organizations that specialize in online safety.
              </p>
              <hr>
          </div>
          <br>
          <h3 class="text-center mt-5 font-3">Still have questions?</h3>
          <p class="text-center mt-4">Contact us for further assistance.</p>
          <a href="contact.php" class="btn index-FAQ-a indego-anchor mb-textmt">Contact</a>
        </div>
      </div>
    </section>

    <section class="calendar">
      <div class="row">
        <div class="col-sm-6">
          <iframe src="https://calendar.google.com/calendar/embed?height=300&wkst=1&bgcolor=%23f9f5b4&ctz=Asia%2FYangon&showTabs=1&showNav=1&showCalendars=0&src=ZW4ubW0jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%230B8043" 
            class="calendar-iframe" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.6759135156!2d95.85190884071181!3d16.83887949381721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1705853910861!5m2!1sen!2smm" 
            class="google-map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </main>

  <?php
    include 'footer.php';
  ?>
</body>
</html>