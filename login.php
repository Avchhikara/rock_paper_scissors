<?php  
	session_start();
	unset($_SESSION['name']);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is the login page of the application 'Rock-Paper-Scissors' and is used to facilite the session so, that the user can proceed further in the appication to the play area. PHP, HTML, CSS and Bootstrap are being used here!">
	<title>Login | Rock Paper Scissors</title>
	<link rel="icon" type="image/png" href="logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

	<nav class="navbar navbar-dark bg-dark sticky-top">
  		<a href="index.php" class="navbar-brand mb-0 h1">Rock Paper Scissors</a>
	</nav>


	<div class="container " style="height: 65vh;">
		<div class="row d-flex justify-content-center" style="margin:5% 0 5% 0 ;">
			<div class="col-lg-4 col-sm-7 col-md-7 col-xs-6 " >
				<h4>Login Form</h4>
				<form method="post" class="border" style="padding:20px;">
					
					<?php
						if(isset($_POST['who'])&&isset($_POST['pass'])){
							if($_POST['pass']==='php123'){
								$_SESSION['name'] = $_POST['who'];
								header('Location: game.php');
								return;
							}
							else{
								echo "<div class='alert alert-danger' role='alert'>";
								echo "Incorrect Password";
								echo "</div>";
							}
						}					 
					?>
					
					<div class="form-group" >
						<label for="who" class="h6">User Name</label>
						<input type="text" class="form-control" name="who" id="who" required>
						<small class="form-text text-muted">We don't store your name/email or any of other input</small>
					</div>
					<div class="form-group">
						<label for="pass" class="h6">Password</label>
						<input type="Password" class="form-control" name="pass" id="pass" required>
						<small class="form-text ">Password: php123</small>
					</div>
					<input type="submit" value="Log In" class="btn btn-outline-success">
					<input type="button" value="Cancel" onclick="location.href = 'index.php'; return false;" class="btn btn-outline-warning">
				</form>	
			</div>
		</div>
	</div>

	<!-- Now, dealing with the footer -->
	<div class="container-fluid bg-light footer-bottom" style="height: 22.2vh;">
		
		
		<footer style="padding-top: 50px;">
			<center>
				&copy; Avnish's Projects | Made with <span style="color: rgba(255, 0, 0, 0.8);">&#9829;</span> at DCRUST
			</center>
		</footer>

	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>