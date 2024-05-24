<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/mobileres.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="row header auto">
      <div class="col-sm-4 website-name">CyberSmartTeens</div>
      <div class="col-sm-8 header-nav-div">
        <ul class="nav nav-tabs borderless">
          <li class="nav-item">
            <a class="nav-link nav-a" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-a" href="information.php">Information</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Social Media Apps
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item nav-a" href="www.facebook.com">Facebook</a></li>
              <li><a class="dropdown-item nav-a" href="www.instagram.com">Instagram</a></li>
              <li><a class="dropdown-item" href="www.youtube.com">Youtube</a></li>
              <li><a class="dropdown-item nav-a" href="www.twitter.com">X</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Help
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item nav-a" href="parenthelp.php">Parent's Help</a></li>
              <li><a class="dropdown-item nav-a" href="about.php">About Us</a></li>
              <li><a class="dropdown-item" href="contact.php">Contact</a></li>
              <li><a class="dropdown-item nav-a" href="guidance.php">Guidance</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-a" href="livestream.php">Live Stream</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-a" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle nav-bi"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item nav-a profile-link" href="signin.php">Log In</a></li>
              <li><a class="dropdown-item nav-a profile-link" href="signup.php">Sign Up</a></li>
              <li><a class="dropdown-item nav-a after-link" href="profiledetails.php?id=<?php echo $_SESSION['user_id']; ?>">
                Edit Profile
              </a></li>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="billing.php">Subscribe membership</a></li>
              <li><a class="dropdown-item" href="#">Setting<i class="bi bi-gear"></i></a></li>
              <li><a class="dropdown-item" href="#">See terms of service<i class="bi bi-box-arrow-up-right"></i></a></li>
              <li><a class="dropdown-item" href="#">Get Help<i class="bi bi-box-arrow-up-right"></i></a></li>
              <li><a class="dropdown-item" href="#">See privacy policy<i class="bi bi-box-arrow-up-right"></i></a></li>
              <li><a class="dropdown-item" href="#">Log out<i class="bi bi-box-arrow-up-right"></i></a></li>
            </ul>        
          </li>
        </ul>
      </div>
    </div>
  </header>

</body>
</html>