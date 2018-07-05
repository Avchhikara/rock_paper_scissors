<?php  
	session_start();
	if(isset($_POST['who'])&&isset($_POST['pass'])){
		if($_POST['pass']==='php123'){
			$_SESSION['name'] = $_POST['who'];
			header('Location: game.php');
			return;
		}
		else{
			echo "Incorrect Password";
		}
	}



?>



<!DOCTYPE html>
<html>
<head>
	<title>Avnish's Login page</title>
</head>
<body>

	<form method="post">
		<label for="who">User Name</label>
		<input type="text" name="who" id="who"><br>
		<label for="pass">Password</label>
		<input type="Password" name="pass" id="pass"><br>
		<input type="submit" value="Log In">
		<input type="button" value="Cancel" onclick="location.href = 'index.php'; return false;">
	</form>	


</body>
</html>