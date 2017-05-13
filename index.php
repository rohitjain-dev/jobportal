<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>Jobs Finder-Land Your Dream Job</title>
		<meta charset="utf-8">
   		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="css/carousel.css" rel="stylesheet">
	</head>
	<body>
<!-- NAVBAR -->
      <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Jobs Finder</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="jobs.php">Browse Jobs</a></li>
                <li><a href="jobseekers.php">Job-Sekeers</a></li>
              </ul>
              <ul class="nav navbar-nav pull-right">
              	<?php if(isset($_SESSION['user'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else : ?>
                 <li><a href="signup.php">Signup</a></li>
                 <li><a href="login.php">Login</a></li>
               <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

  <!--Corsule -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Get Your Dream Job Now</h1>
              <p style="color:#24141e">Get Instant Acess To Today's Most Wonderful Hiring Tools-Post Jobs and Streamline Your Entire Hiring Process</p>
              <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Login</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Hire Better Talent</h1>
              <p style="color:#24141e">Get The Coolest Employess for Your Company,Hire Fresh Talent or Experienced View Their Resume and Select The Best</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign-Up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Search Thousands of Jobs</h1>
              <p style="color:#24141e">Build and Post Your Resume and Access Thousands of Pages of Career Info and Advice</p>
              <p><a class="btn btn-lg btn-primary" href="jobs.php" role="button">Browse Jobs</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
      <!-- START THE FEATURETTES -->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Looking for Job <span class="text-muted">This'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5" >
          <img class="featurette-image img-responsive center-block" src="img/5.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/6.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">You Got Your Dream Job</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/4.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
     <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="jumbotron">
      <h1 class="text-center">Team</h1>
    </div>
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/profile.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Rohit Jain</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/harshit.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Harshit Singh Chouhan</h2>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="img/rahul.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Rahul Jha</h2>
        </div>
      </div><!-- /.row -->

      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 JobsFinder &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')         </script> 
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.js"></script>

	</body>
</html>