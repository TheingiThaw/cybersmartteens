<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Applications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mobileres.css">
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
      <section class="sm-header-section">
          <div class="row smheaderrow auto">
            <div class="col-sm-6 center">
              <div>
                <h2 class="font-3 mb-textcenter mb-textmt">Join our Online Safety Squad!</h2>
              </div>
            </div>
            <div class="col-sm-6 center">
              <img src="../cybersmartteens/photos/9570364.jpg" class="socialmediaimg" alt="">
            </div>
          </div>
      </section>
    </header>

    <main class="mb-fullwidth">
      <section class="searchsection auto">
        <div>
          <div>
            <div class="searchdiv auto">
              <form class="d-flex" role="search">
                <input class="form-control searchbar auto" id="searchInput" type="search" placeholder="Search" aria-label="Search">
                <button class="btn sm-btn1" id="searchButton" type="submit">Search</button>
              </form>
            </div>
            <h4 class="sm-search-header">Search from Online Database</h4>
            <p class="text-center mt-4 red">The search platform you have been looking for</p>
          </div>
          <div id="searchResults" class="mt-4"></div>
        </div>
      </section>

      <script>
        $(document).ready(function(event){
          $('#searchButton').click(function(event){
              event.preventDefault();
              console.log("search button clicked");
              var query = $('#searchInput').val();
              fetchSearchResults(query);
          });

          
        function fetchSearchResults(query) {
            var url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyDGI-o1KZnkWqhJT5vgquy0bn_UOxTdgew&cx=b33f2d267f12d49b6&q=' + query; 
            console.log("search api called");
            console.log(url); 
            $.get(url, function(data){
              var results = data.items;
              var output = '<ul>';
              $.each(results, function(index, result){
                output += '<li><a href="' + result.link + '">' + result.title + '</a></li>';
              });
              output += '</ul>';
              $('#searchResults').html(output);
            });
        }
      });
      </script>
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

      <section class="sm-info-div1-section">
        <div class="sm-info-div1 auto">
          <h2 class="mobile-font2">The Social Media Merry-Go-Round</h2>
          <div class="row mt-5">
            <div class="col-sm-6">
              <p>Strap in for a ride on the Chirper rollercoaster! Amidst the world 
                war of words, lies the potential for a teensy weensy bit of identity theft. 
                So hold onto your personal info!
              </p>
            </div>
            <div class="col-sm-6 mb-textmt">
              <p>Do you need to B-You in Facebook? It's where the world gets smaller and the 
                friend list gets longer. But, did you just add a fabulous faker to your cyber clique?
              </p>
            </div>
          </div>
          <div>
            <div class="row auto">
              <div class="col-sm-4">
                <div class="mobile-center">
                  <img src="../cybersmartteens/photos/bubble-gum-woman-taking-selfie-on-phone.gif" class="sm-info-div1-img" alt="">
                </div>
                <h5 class="cyan text-center">SnapChat</h5>
                <p class="text-center blue">500M Selfies Every Day</p>
              </div>
              <div class="col-sm-4">
                <div class="mobile-center">
                  <img src="../cybersmartteens/photos/juicy-hands-holding-gadgets-with-social-media.gif" class="sm-info-div1-img" alt="">
                </div>
                <h5 class="red text-center">InstaLite</h5>
                <p class="text-center blue">400M Daily Active Users</p>
              </div>
              <div class="col-sm-4">
                <div class="mobile-center">
                  <img src="../cybersmartteens/photos/juicy-girl-sending-messages-from-her-phone.gif" class="sm-info-div1-img" alt="">
                </div>
                <h5 class="cyan text-center">Twitter</h5>
                <p class="text-center blue">350M Tweets Per Day</p>
              </div>
            </div>
          </div>
        </div>

        <div class="sm-info-div2 auto">
          <h2 class="mobile-font3">The Thunderbolt Tour of Social Media</h2>
          <div class="row mt-5">
            <div class="col-sm-6">
              <p>Take a whirl around the whirlwind world of Snapster! It's 
                selfie city where the fun never stops. But be smart, young storm chasers. 
                Each filter is a rabbit hole into the Instagram black hole.
              </p>
            </div>
            <div class="col-sm-6">
              <p>InstaLite is where the cool kids chill with Gen Z swag. But there's a thin line between the influencer and the 
                influenced. Teen brigade, don't merge the virtual with the reality!
              </p>
            </div>
          </div>
        </div>

        <div class="sm-info-div5 auto">
          <h2 class="font-3">Dive right in, or swim away?</h2>
          <p class="mt-5">
            Teenagers face a myraid of mind-boggling scenarios in this technological circus 
            called the 'Social Media World'. The digital-age conundrums are like oysters - they 
            either fetch you pearls or cut you deep! Let's explore how to strut down this digital 
            catwalk with grace and aplomb. 
          </p>
          <div class="between mt-5 mobile-block">
            <div class="mb-textcenter">
              <h2 class="red font-35">300</h2>
              <p class="mt-3 red">Digital Dilemmas</p>
            </div>
            <div class="mb-textcenter">
              <h2 class="cyan font-35">100</h2>
              <p class="mt-3 cyan">Effective Solutions</p>
            </div>
            <div class="mb-textcenter">
              <h2 class="navy-blue font-35">500</h2>
              <p class="mt-3 navy-blue">Teen Subscribers</p>
            </div>
          </div>
          <a href="#" class="btn sm-explore-a center indego-anchor">Explore Best Practices</a>
        </div>
      </section>

      <section class="sm-info-div6-section">
        <div class="sm-info-div6 auto">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="uppercase font-9 navy-blue">Buzz</h1>
            </div>
            <div class="col-sm-6 center">
              <p class="justifytext">Tune in to our exhilarating crunch of updates from the 
                social media world. Stay ahead of the curve with emerging trends 
                and be at the pinnacle of safety measures.
              </p>
            </div>
          </div>
          <hr>
        </div>
      </section>

      <!-- blogs -->
      <section class="sm-blog-section">
        <div class="sm-blog auto between">
          <div class="row between mobile-block">
            <div class="col-md-4 sm-blog-div">
              <img src="../cybersmartteens/photos/techny-searching-for-a-file-in-a-folder.gif" class="sm-blog-img center" alt="">
              <h5 class="mt-4">Tech Noon</h5>
              <p class="mt-3">
                Get a closer look at our latest outstanding feature additions.
              </p>
            </div>
            <div class="col-md-4 sm-blog-div">
              <img src="../cybersmartteens/photos/cubes-man-on-a-surfboard-conquers-social-media.gif" class="sm-blog-img center" alt="">
              <h5 class="mt-4">Trend Zone</h5>
              <p class="mt-3">
                Discover the trends that are shaking up the digital sphere.
              </p>
            </div>
            <div class="col-md-4 sm-blog-div">
              <img src="../cybersmartteens/photos/bubble-gum-digital-security-with-password-protected-email.gif" class="sm-blog-img center" alt="">
              <h5 class="mt-4">Safety Hub</h5>
              <p class="mt-3">
                Immerse in the latest safety measures designed for your protection.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- knowledge is power -->
      <!-- information -->
      <section class="sm-text-section auto center">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="capitalize cyan mobile-font4 mb-textcenter">Knowledge is power</h2>
          </div>
          <div class="col-sm-6">
            <p>Boost up your safety strategies by unearthing the treasure
              trove of techniques to secure your online social experiences.
            </p>
          </div>
          <div class="mt-5 col-sm-12">
            <div class="row auto">
              <div class="col-md-4">
                <img src="../cybersmartteens/photos/morphis-personal-data-protection.png" alt="">
                <h6 class="mobile-font2">Cyber Safety</h6>
                <p class="mb-textmt">Learn the privileges of privacy in the cyberworld.</p>
              </div>
              <div class="col-md-4">
                <img src="../cybersmartteens/photos/memphis-digital-security-and-online-safety.png" alt="">
                <h6 class="mobile-font2">Digital Well-being</h6>
                <p class="mb-textmt">Strike a balance between your real and virtual lives.</p>
              </div>
              <div class="col-md-4">
                <img src="../cybersmartteens/photos/3d-techny-searching-for-a-file-in-a-folder.png" alt="">
                <h6 class="mobile-font2">Secure Searches</h6>
                <p class="mb-textmt">Navigate the socialmedia without worry. Learn secure search techniques.</p>
              </div>
            </div>
            <div class="row mt-4 auto">
              <div class="col-md-4">
                <img src="../cybersmartteens/photos/cherry-670.png" alt="">
                <h6 class="mobile-font2">Bully-proof Platforms</h6>
                <p class="mb-textmt">Stand strong in the face of cyber bullies.</p>
              </div>
              <div class="col-md-4">
                <img src="../cybersmartteens/photos/16813-removebg-preview.png" alt="">
                <h6 class="mobile-font2">Privacy Protocols</h6>
                <p class="mb-textmt">Prioritise privacy protocols for personal prosperity.</p>
              </div>
              <div class="col-md-4">
                <img src="../cybersmartteens/photos/casual-life-3d-girl-with-tablet-and-working-process-on-desktop.png" alt="">
                <h6 class="mobile-font2">Freedom of Speech</h6>
                <p class="mb-textmt">Know your right to voice your views virally.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="sm-info-div4-bg">
        <div class="sm-info-div4">
          <div>
            <h2 class="mobile-font4">
              What's New?
            </h2>
            <p class="mt-5">
              Dive into an exhilarating narrative of our recent feature enhancements. Turn 
              the tide of your social media experience.
            </p>
            <p class="mt-5">
              Unearth the current trends that are reshaping the digital landscape. Streamline 
              your strategies to align with the new normal.
            </p>
            <p class="mt-5">
              Arm yourself with the latest safety protocols. Foster a secure environment that 
              shields your online presence.
            </p>
          </div>
        </div>
        <div class="center sm-div4-img-div">
          <img src="photos/elastic-social-media.png" class="sm-div4-img" alt="">
        </div>
      </section>

      <!-- join us -->
      <section class="mb-fullwidth">
        <div class="sm-info-div3 center auto">
          <div>
            <h2 class="mobile-font4">Ready Yet?</h2>
            <p class="mt-5 mb-textcenter">Dive into the depths of secure social surfing. Don't linger, the 
              future's safer with you in it.
            </p>
            <a href="#" class="btn sm-join-a center indego-anchor">Join Us</a>
          </div>
        </div>
      </section>

    </main>

    <?php
      include 'footer.php';
    ?>

</body>
</html>


