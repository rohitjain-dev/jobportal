<?php include 'includes/header.php'; ?>
 <?php include 'config/config.php';?>
 <?php include 'lib/Database.php';?>
<style>
	.detail{
      font-size: 1.2em;
	}
	#tag{
		color: #ff5c33;
		font-size: large;
	}
</style>
 <?php
    $db = new Database();
  if (isset($_GET['id'])){
	  $id = $_GET['id'];
	  $query = "SELECT * FROM jobs WHERE id ='$id'";
	  $result = $db->select($query);
	  $row = $result->fetch_assoc();
  }
 ?>

<div class="col-sm-12">
	<h3 class="text-center"><?php echo $row['title'];?></h3>
			<ul class="detail">
				<li> <strong> Location: </strong><span id="tag"><?php echo  $row['location'];?></span></li>
				<li> <strong> Job Type: </strong><span id="tag"><?php echo $row['job_type']; ?></span></li>
				<li> <strong> Description:</strong><p>
					<?php echo $row['description'] ; ?>
				 </p>
				</li>
				<li><strong>Contact Email:</strong><a href="mailto:<?php echo $row['contact_email'];?>">
				<?php echo $row['contact_email'];?></a></li>
			</ul>
	<?php if(isset($_SESSION['user'])): ?>
			<a href="mail.php?mail=<?php echo $row['id']; ?>">
				<button style="float: right;" class="btn btn-success">Apply Now</button>
			</a>
		<?php else : ?>
		<a href="login.php">
			<button style="float: right;" class="btn btn-success">Apply Now</button>
		</a>
	    <?php endif; ?>
			<p><a href="jobs.php">Back To Jobs</a></p>


</div>
<?php include 'includes/footer.php'; ?>