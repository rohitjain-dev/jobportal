<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php  include 'lib/Database.php'; ?>
<?php
$db = new Database();
  if(isset($_POST['submit']))
  {
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $query = "SELECT * FROM users WHERE email ='$username' AND password ='$password'";
	  $result = $db->select($query);
	  if($result){
       $row  = $result->fetch_assoc();
	  $count = $result->num_rows;
	  if($count == 1){
		  $_SESSION['user']      = $username;
          $_SESSION['id'] = $row['id'];
          $_SESSION['user_type'] = $row['user_type'];
		  header('Location: index.php');
	    }
	  }
	  else{
		  echo 'your username and password is invalid';
	  }
  }
?>
<style>
	
  .btn 
  {
   outline:0;
   border:none;
   border-top:none;
   border-bottom:none;
   border-left:none;
   border-right:none;
   box-shadow:inset 2px -3px rgba(0,0,0,0.15);
  }
  .btn:focus
  {
   outline:0;
   -webkit-outline:0;
   -moz-outline:0;
  }
  
  .form-signin {
    max-width: 280px;
    padding: 15px;
    margin: 0 auto;
      margin-top:50px;
  }
  .form-signin .form-signin-heading, .form-signin {
    margin-bottom: 10px;
  }
  .form-signin .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: none;
    border-left-style: solid;
    border-color: #000;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top-style: none;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-color: rgb(0,0,0);
    border-top:1px solid rgba(0,0,0,0.08);
  }
  
</style>

<?php if(isset($_SESSION['user'])): ?>
	<?php header("Location:index.php"); ?>
<?php else : ?>
<div class="container">

	<form  action="login.php" method="post"class="form-signin">
		<h1 class="form-signin-heading text-muted">Sign In</h1>
		<input type="text" class="form-control" name="username" id="username" placeholder="Email address" required />
		<input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
		<input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login" />
	</form>

</div>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>