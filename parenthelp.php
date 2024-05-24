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
    <header class="mb-fullwidth">
      <div class="row auto parenthelp-header">
          <div class="col-sm-6 center">
            <div>
              <h2 class="ph-header">Empower Your Teen's Socials</h2>
              <p class="mt-5 navy-blue">If you're a parent concerned about your teenager's online safety, 
                we can offer practical advice on implementing effective parental controls, 
                educating your teens about online risks, and fostering open communication.
                 Together, we can create a strategy to ensure a safer and more secure online experience for your teenagers</p>
            </div>
          </div>
          <div class="col-sm-6 center">
            <img src="../cybersmartteens/photos/8529967-removebg.png" class="parenthelp-header-img" alt="">
          </div>
      </div>
    </header>

    <main>
      <!-- parent's list -->
      <section class="ph-s1-section auto center">
        <div>
          <div class="d-flex socialmedia-gp row spacearound">
            <!-- First collapsible element -->
            <div class="col-sm-4">
              <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <div>
                  <div class="row center">
                    <img src="../cybersmartteens/photos/3d-fluency-multiple-devices.png" class="help-img" alt="">
                  </div>
                  <div class="row left">
                    <h5 class="mt-3 mobile-font1 cyan">Device Specific Parental Control</h5>
                    <p class="mt-2">For setting up Screen Time controls, app restrictions, and content filters</p>
                    <small class="red">Click this content for more!</small>
                  </div>
                </div>
              </a>
            </div>
        
            <!-- Second collapsible element -->
            <div class="col-sm-4">
              <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                <div class="row center">
                  <img src="../cybersmartteens/photos/casual-life-3d-smartphone-lamp-plant-and-clock.png" class="help-img" alt="">
                </div>
                <div class="row left">
                  <h5 class="mt-3 mobile-font1 cyan">Social Media Specific Control</h5>
                  <p class="mt-2">Built-in safety features on privacy settings, comment filters, screen time, and reporting tools.</p>
                  <small class="red">Click this content for more!</small>
                </div>
              </button>
            </div>
  
            <!-- Third collapsible element -->
            <div class="col-sm-4">
              <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
                <div>
                  <div class="row center">
                    <img src="../cybersmartteens/photos/casual-life-3d-young-man-in-headset-using-computer.png" class="help-img" alt="">
                  </div>
                  <div class="row left">
                    <h4 class="mt-3 mobile-font1 cyan">Game Consoles</h4>
                    <p class="mt-2">Parental control settings on gaming consoles, covering restrictions on game content, communication features, and screen time.</p>
                    <small class="red">Click this content for more!</small>
                  </div>
                </div>
              </button>
            </div>
          </div>
        
          <!-- Collapsible content for each element -->
          <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                  Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                  Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample3">
                <div class="card card-body">
                  Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- infopage reference -->
      <section class="inforef-section center">
        <div class="inforef-div">
          <div class="center">
            <img src="../cybersmartteens/photos/3d-casual-life-colleagues-discussing-team-project.png" class="ph-inforef-img" alt="">
          </div>
          <div class="center">
            <div>
              <h2 class="ph-inforef-header text-center">What does CyberSmartTeens do for the youngsters</h2>
              <div class="center">
                <a href="information.php" class="btn parenthelp-btn center pink-anchor">Show Me</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- newsletter -->
      <section class="ph-news-section auto center">
        <div class="row">
          <div class="col-sm-6 center">
            <div>
              <img src="../cybersmartteens/photos/techny-email-marketing-and-newsletter.gif" class="ph-news-img" alt="">
            </div>
          </div>
          <div class="col-sm-6 center">
            <div class="mb-textcenter">
              <p class="navy-blue">Workshops</p>
              <h2 class="font-3 indego">
                Attend our online workshops and uncover social-media secrets for teens,
              </h2>
            </div>
          </div>
        </div>
      </section>
      
      <!-- campaigns -->
      <section class="campaign-section center">
        <div class="campaign-div">
          <div class="row">
            <h2 class="mobile-font3 mb-textcenter red">Let's Enroll our Upcoming Campaigns</h2>
            <p class="mt-3">We provide Our Expert Services Around The World</p>
          </div>
          <div id="carouselExampleAutoplaying" class="carousel ph-campaigns mt-2" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
              <div class="carousel-item ph-campaign active">
                <div class="row">
                  <div class="col-sm-6">
                    <h5>ParentsTogether Online Campaign</h5>
                    <div class="row center">
                      <div class="col-sm-6">
                        <p>We help you to give powerful insight of online security</p>
                      </div>
                      <div class="col-sm-6 center">
                        <img src="../cybersmartteens/photos/juicy-girl-and-boy-searching-for-the-right-files.gif" class="campaign-img" alt="">
                      </div>
                    </div>
                   <div class="mb-3 center">
                    <a href="#" class="btn ph-btn">Read More <i class="bi bi-arrow-right"></i></a>
                   </div>
                  </div>
                  <div class="col-sm-6">
                    <h5>Tell Congress: Hold Big Tech Accountable</h5>
                    <div class="row center">
                      <div class="col-sm-6">
                        <p>The House Judiciary Committee advanced a series of bills intended to constrain the monopolistic powers of Big Tech companies</p>
                      </div>
                      <div class="col-sm-6 center">
                        <img src="../cybersmartteens/photos/glow-robo-hands-laptop-and-digital-marketing.gif" class="campaign-img" alt="">
                      </div>
                    </div>
                    <div class="mb-3 center">
                      <a href="#" class="btn ph-btn">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ph-campaign">
                <div class="row">
                  <div class="col-sm-6">
                    <h5>No Facial Recognition in School</h5>
                    <div class="row center">
                      <div class="col-sm-6">
                        <p>We help you to give powerful insight of online security</p>
                      </div>
                      <div class="col-sm-6 center">
                        <img src="../cybersmartteens/photos/pablita-face-id.gif" class="campaign-img" alt="">
                      </div>
                    </div>
                    <div class="mb-3 center">
                      <a href="#" class="btn ph-btn">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <h5>How to stop addicting YouTube</h5>
                    <div class="row center">
                      <div class="col-sm-6">
                        <p>We help you to give powerful insight of online security</p>
                      </div>
                      <div class="col-sm-6 center">
                        <img src="../cybersmartteens/photos/florid-remote-workflow-1.png" class="campaign-img" alt="">
                      </div>
                    </div>
                    <div class="mb-3 center">
                      <a href="#" class="btn ph-btn">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ph-campaign">
                <div class="row center">
                  <div class="col-sm-6">
                    <h5>How to talk to your child about Online Safety</h5>
                    <div class="row center">
                      <div class="col-sm-6">
                        <p>We help you to give powerful insight of online security</p>
                      </div>
                      <div class="col-sm-6 center">
                        <img src="../cybersmartteens/photos/3d-business-man-and-child-sitting-at-the-table.png" class="campaign-img" alt="">
                      </div>
                    </div>
                    <div class="mb-3 center">
                      <a href="#" class="btn ph-btn">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <h5>How to stop addicting YouTube</h5>
                    <div class="row center">
                      <div class="col-sm-6">
                        <p>We help you to give powerful insight of online security</p>
                      </div>
                      <div class="col-sm-6 center">
                        <img src="../cybersmartteens/photos/pablo-prohibited-content.png" class="campaign-img" alt="">
                      </div>
                    </div>
                    <div class="mb-3 center">
                      <a href="#" class="btn ph-btn">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- newsletter -->
      <section class="ph-news-section auto center">
        <div class="row">
          <div class="col-sm-6 center">
            <div>
              <p class="mb-textcenter navy-blue">Newsletter</p>
              <h2 class="font-3 mb-textcenter indego">
                Enrich your insight about teen-related social engagements with our 
                weekly newsletter,
              </h2>
            </div>
          </div>
          <div class="col-sm-6 center">
            <div>
              <img src="../cybersmartteens/photos/techny-email-marketing-and-newsletter.gif" class="ph-news-img" alt="">
            </div>
          </div>
        </div>
      </section>

      <!-- Subscribe newsletter -->
      <section class="ph-subscription center">
        <div class="ph-subscription-div">
          <h2 class="text-center mobile-font2">Subscribe to our newsletters to get all the updates and news about staying safe online</h2>
          <div class="mt-4 subscribe-div auto">
            <label for="formGroupExampleInput" class="form-label">Enter your email here *</label>
            <div class="between mt-2">
              <input type="text" class="form-control" id="subscribe-email" placeholder="">
              <button class="btn ph-btn1 indego-anchor" id="newsletter-submitbtn">Subscribe</button>
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

       <!-- price -->
       <section  class="ph-price-section pricingPlan">
        <p class="text-center">Social Media Campaigns</p>
        <h2 class="text-center font-3 mobile-font4">Pricing Plan</h2>
        <p class="text-center mt-4">Upgrade to get the benefits of CyberSmartTeens' Newsletters and Live Streaming</p>
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
                <h6 class="text-center navy-blue font-2">$19/mo</h6>
                <ul>
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signin.php" class="btn nav-a center ls-ci-a">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ls-ci-div auto">
              <div>
                <p class="text-center">3 Times Plan</p>
                <h6 class="text-center navy-blue font-2">$17.9/mo</h6>
                <ul>
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signin.php" class="btn nav-a center ls-ci-a">Subscribe</a>
                </div>
              </div>
          </div>
          <div class="carousel-item ls-ci-div auto">
              <div>
                <p class="text-center">Twice Plan</p>
                <h6 class="text-center navy-blue font-2">$15/mo</h6>
                <ul>
                  <li>Exclusive LiveStream Access</li>
                  <li>Ad-Free Experience</li>
                  <li>Early Access to New Content</li>
                  <li>Members-Only Community</li>
                  <li>Discounts on Additional Services</li>
                </ul>
                <div class="center">
                  <a href="signin.php" class="btn nav-a center ls-ci-a">Subscribe</a>
                </div>
              </div>
          </div>
        </div>

      </section>

      <!-- how to handle negotiable -->

      <!-- how child can benefit -->
      <section class="benefit-section center auto">
        <div class="row">
          <div class="col-sm-6 center">
            <img src="../cybersmartteens/photos/florid-support-service.gif" class="ph-benefit-img" alt="">
          </div>
          <div class="col-sm-6 center">
            <div>
              <h2 class="ph-benefit-header">Teenagers Benefit Beyond Imaginations</h2>
              <p class="mt-4 mb-textcenter">What can we expect from those campaigns and newletters</p>
              <div class="mobile-center">
                <a href="information.php" class="btn ph-btn">Read Here</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- blogs -->
      <section class="ph-blog-section">
        <h5 class="mobile-font1">Resources</h5>
        <h2 class="mt-4 mobile-font2">The Information From Internet</h2>
        <div class="card-group blogs-div auto">
          <div class="card ph-blog">
            <div class="mobile-center">
              <img src="../cybersmartteens/photos/business-3d-happy-woman-applauding-to-the-done-work.png" class="card-img-top ph-blog-img" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">How can I help my teenager stay safe online?</h5>
              <p class="card-text mt-3">Help your teen stay safe</p>
            </div>
            <div class="ph-blog-a">
              <a href="https://parents.actionforchildren.org.uk/mental-health-wellbeing/online-safety-wellbeing/keep-teenager-safe-online/#:~:text=Help%20your%20teen%20stay%20safe&text=Instead%20of%20just%20making%20rules,to%20block%20and%20report%20someone." class="btn ph-btn">
                Read More
              </a>
            </div>
          </div>
          <div class="card ph-blog">
            <div class="mobile-center">
              <img src="../cybersmartteens/photos/cherry-670.png" class="card-img-top ph-blog-img" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Online safety tips for parents of teenagers 14+ Year Olds</h5>
              <p class="card-text mt-3">Include facts alongside with CheckLists</p>
            </div>
            <div class="ph-blog-a">
              <a href="chrome-extension://efaidnbmnnnibpcajpcglclefindmkaj/https://www.internetmatters.org/wp-content/uploads/2021/02/Internet-Matters-online-safety-Age-Guide-14plus.pdf" class="btn ph-btn">
                Read More
              </a>
            </div>
          </div>
          <div class="card ph-blog">
            <div class="mobile-center">
              <img src="../cybersmartteens/photos/3d-business-man-and-child-sitting-at-the-table.png" class="card-img-top ph-blog-img" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Helping young people stay safe and happy online</h5>
              <p class="card-text mt-3">To encourage and help keep teenagers safe and well on social media</p>
            </div>
            <div class="ph-blog-a">
              <a href="https://www.unicef.org/rosa/blog/keeping-young-people-stay-safe-online%E2%80%AF%E2%80%AF" class="btn ph-btn">
                Read More
              </a>
            </div>
          </div>
        </div>

        <div class="center mt-5">
          <a href="socialmediaapps.php" class="btn ph-btn1">
            For more Blogs <i class="bi bi-search"></i>
          </a>
        </div>
      </section>

      <!-- open communication -->
      <section class="comment-section center auto">
        <div class="comment-div">
          <h2 class="text-center ph-comment-header">Comment Below</h2>
          <p class="text-center mt-4">Drop your ideas, thoughts, or concerns- we'd love to hear!</p>
          <div class="row center auto ph-comment-div">
            <div class="mobile-block">
              <input type="text" class="comment ph-comment-input" placeholder="Write your comment...">
              <button type="submit" id="commentBtn" class="comment-submit-button ph-btn btn" value="">Send</button>
              <p id="comment-feedback"></p>
            </div>
          </div>
        </div>
      </section>

      <script>
        $(document).ready(function(){
          $('#commentBtn').click(function(){
            var comment = $('.comment').val();
            $.ajax({
              url: comment.php,
              type: 'POST',
              data: {comment: comment},
              success: function(response){
                var data = JSON.parse(response);

                if(data.comment_submitted){
                  $('#comment-feedback').html("Thanks for your comment").css("color","green");
                  console.log("Comment Submitted");
                }
                else{
                  console.log("ERROR");
                  alert("Can't submit a comment");
                }
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error encountered in comment.php:", textStatus, errorThrown);
                alert("Error encountered in comment");
              }
            });
          });
        });
      </script>
    </main> 

    <?php
      include 'footer.php';
    ?>
</body>
</html>