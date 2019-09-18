<?php 

require_once 'connect.php';

require_once 'header.php';

?>
<div class="container">
	<?php 

	if(isset($_POST['addnew'])){

		if( empty($_POST['firstname']) || empty($_POST['email']) ){
			echo "Please fillout all required fields"; 
		}else{		
			$firstname  = $_POST['firstname'];
			$email 	= $_POST['email'];
			$sql = "INSERT INTO User (firstname,email) 
		    VALUES('$firstname','$email')";

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully added new user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
			}
		}
	}
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3> 
			<form action="" method="POST">
				<label for="firstname">Firstname</label>
				<input type="text" id="firstname"  name="firstname" class="form-control"><br>
				<label for="email">Email</label>
				<textarea rows="4" name="email" class="form-control"></textarea><br>
				<br>
				<input type="submit" name="addnew" class="btn btn-success" value="Add New">
			</form>
		</div>
	</div>
</div>
</div>

<?php 

 require_once 'footer.php';