<?php include 'includes/header.php'; ?>
<?php  include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php
     $db = new Database();
    //Grab User Type
    $query = "SELECT * FROM type";
    $result = $db->select($query);
  //users registration
  if(isset($_POST['submit']))
  {
	  $firstname = $_POST['first_name'];
	  $lastname = $_POST['last_name'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $password2 = $_POST['password2'];
	  $user_type =$_POST['role'];
	  //validation
	  if($firstname == ""||$lastname == ""||$email == "" || $password == "" || $password2 == "" )
	  {
		  echo "Please Fill in all the fields";
	  }
	  else
	  {
		  if($password != $password2){
			  echo "password do not match";
			  header('Location:register.php');
		  }
		  else{
			  $query = "INSERT INTO users (first_name,last_name,user_type,email,password)
                          VALUES ('$firstname','$lastname','$user_type','$email','$password')";
			  $insert_row = $db->insert($query);
			  if($insert_row){
				  $_SESSION['user'] = $email;
				  header("Location: index.php");
			  }
		  }
	  }
  }
?>
 <?php if(isset($_SESSION['user'])): ?>
	<?php echo"you are logged in !"; ?>
	<?php header("Location:index.php"); ?>
 <?php else: ?>

<div class="container">

	<form action="signup.php" method="post"class="form-signin">
		<h1 class="form-signin-heading text-muted">Sign Up</h1>
        <input type="text" class="form-control" name="first_name" placeholder="First Name" required />
        <br>
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required />
        <br>
		<input type="email" class="form-control" name="email" placeholder="Email address" required />
		<br>
		<input type="password" name="password" class="form-control" placeholder="Password" required />
		<br>
		<input type="password" name="password2" class="form-control" placeholder="Confrim Password" required />
		<br>
		<select name="role" class="form-control">
			<?php while($row = $result->fetch_assoc()): ?>
				<option value="<?php echo $row['id']; ?>">
						<?php echo $row['user_type']; ?>
				</option>
			<?php endwhile; ?>
		</select>
		<br>
		<input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Sign Up" />
	</form>

</div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>