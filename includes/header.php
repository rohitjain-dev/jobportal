<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse Jobs</title>
	<meta charset="utf-8">
   		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   		 <meta name="viewport" content="width=device-width, initial-scale=1">
   		 <link rel="stylesheet" type="text/css" href="css/style.css">
         <link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
   body{
   	background: url(img/32.jpg); 
   	background-size: 100% 100%;
   	background-repeat: no-repeat;
   	color: #ffffff;
   }
 </style>
<body>
  <!-- Nav Bar-->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <li> <a class="navbar-brand" href="index.php">Jobs Finder</a></li>
	    </div>
	    <ul class="nav navbar-nav">
	       <li><a href="jobs.php">Jobs</a></li>
	       <?php if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1): ?>
	       <li><a href="addjob.php">Add Job</a></li>
	       <?php endif; ?>
		   <?php if(isset($_SESSION['user_type'])&& $_SESSION['user_type']==1): ?>
			<li><a href="jobseekers.php">Job-Seekers</a></li>
		   <?php endif; ?>
			<?php if(isset($_SESSION['user_type'])&& $_SESSION['user_type']==2): ?>
				<li><a href="buildresume.php">Build Resume</a></li>
			<?php endif; ?>
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
	</nav>
<!--End NavBar-->