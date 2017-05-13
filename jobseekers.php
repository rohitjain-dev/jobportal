<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php  include 'lib/Database.php';?>
<?php
  $db = new Database();
   $query = "SELECT * FROM resume";
   $result = $db->select($query);
?>
<?php if($result) : ?>
<div class="container">
    <div class="col-sm-12">
 	  <h1 class="text-center">Jobseekers Listing</h1>
 	  <ul id="listings">
           <?php while ($row = $result->fetch_assoc()): ?>
			<li>
			  <h1><a href="profile.php?id=<?php echo $row['user_id']; ?>">
					  <?php echo $row['name']; ?>
				  </a></h1>
				<div class="description">
                  <p>
					  <?php echo $row['designation']; ?>
				  </p>
				</div>
			  <br>
			  <h5><?php echo $row['email']; ?></h5>
			</li>
		  <?php endwhile;  ?>
 	    </ul>
    </div>
</div> 
<?php else : ?>
	<div class="col-xs-12">
	<p>There are No Jobseekers</p>
	</div>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>