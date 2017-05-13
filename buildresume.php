<?php include'includes/header.php'; ?>
<?php require 'lib/pdf/fpdf.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'config/config.php'?>
    <?php

      $db = new Database();
      $query = "SELECT * FROM users WHERE `id` = ".$_SESSION['id'];
      $result = $db->select($query);
      $row = $result->fetch_assoc();
      if (isset($_POST['submit'])) {
      	$name = $_POST['name'];
      	$email = $_POST['email'];
      	$phone = $_POST['phone'];
      	$description = $_POST['description'];
		$designation = $_POST['designation'];
      	$exp = $_POST['exp'];
      	$edu = $_POST['edu'];
		$user_id = $row['id'];
		  //check
         $query = "SELECT * FROM resume WHERE user_id = ".$_SESSION['id'];
		 $result = $db->select($query);
		  $count = $result->num_rows;
		  if($count == 1){
             //update resume
			  $query = "UPDATE `resume` SET 
               `user_id` = '$user_id',
               `name` = '$name',
               `email` = '$email',
               `phone` = '$phone',
               `designation` = '$designation',
                `exp` = '$exp',
                `edu` = '$edu'
                WHERE `id` = '$user_id'";
		  }
		  else{
			  //insert Resume
			  $query = "INSERT INTO `resume`(`user_id`, `name`, `email`, `phone`,`designation`, `description`, `exp`, `edu`) 
          VALUES ('$user_id', '$name', '$email', '$phone','$designation', '$description', '$exp',  '$edu')";
			  $result = $db->insert($query);
		  }
      }
   

?>

    <div class="container">

	<form action="buildresume.php" method="post">
		<h1 class="form-signin-heading text-muted">Build Resume</h1>
		<label>Your Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required />
        <br>
		<label>Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email address" required />
		<br>
		<label>Phone No</label>
		<input type="text" class="form-control" name="phone" placeholder="Phone Number" />
		<br>
		<label>Domain Area</label>
		<input type="text" name="designation" class="form-control" placeholder="Eg. Java Developer" required />
		<br>
		<label>Objective</label>
		<textarea class="form-control" name="description">Enter Your Profile Here </textarea>
		<br>
		<label>Experience</label>
		<input type="number" name="exp" class="form-control" required />
		<br>
		<label>Education Detail</label>
		<input type="text" name="edu" class="form-control" placeholder="Enter your dgree details" required />
		<br>
		<input style="float: right;" type="submit" name="submit" value="Submit" class="btn btn-primary" />
   </form>		
</div>
<?php include 'includes/footer.php'; ?>