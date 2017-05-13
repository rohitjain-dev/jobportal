<?php include 'includes/header.php'; ?>
<?php include 'config\config.php'; ?>
<?php include 'lib\Database.php'; ?>
<?php
    $db = new Database();
    $query = "SELECT * FROM categories";
    $result = $db->select($query);
  if (isset($_POST['submit']))
  {
     $title       = $_POST['title'];
     $description = $_POST['description'];
     $location	  = $_POST['location'];
     $email       = $_POST['email'];
     $category_id = $_POST['category_id'];
     $job_type    = $_POST['job_type'];

     $query = "INSERT INTO jobs (title,description,location,category_id,contact_email,job_type) 
     VALUES ('$title', '$description', '$location','$category_id','$email','$job_type')";

     $insert_row = $db->insert($query);
     if($insert_row)
     {
     	header("Location : jobs.php");
     }
  }
?>
  <div class="container">
  	<form  action="addjob.php" method="post" class="form-addjob">
		<h1 class="form-signin-heading text-muted text-center">Job Information</h1>
        <input type="text" class="form-control" name="title" placeholder="Job Title" required />
        <br>
        <textarea type="text" class="form-control" name="description" placeholder="Enter Job Description"></textarea>
        <br>
        <input type="text" class="form-control" name="location" placeholder="City" required />
        <br>
		<input type="email" class="form-control" name="email" placeholder="Contact Email" required />
		<br>
		<select name="category_id" class="form-control">
			 <?php while($row = $result->fetch_assoc()): ?>
             <option value="<?php echo $row['id']; ?>">
                 <?php echo $row['name']; ?>
             </option>
               <?php endwhile; ?>
		</select>
		<br>
		<select name="job_type" class="form-control">
			<option value="Full Time">Full Time</option>
			<option value="Part Time">Part Time</option>
		</select>
		<br>
		<input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Add Job" />
	</form>
  </div>
<?php include 'includes/footer.php'; ?>