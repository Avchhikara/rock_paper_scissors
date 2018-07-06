<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game | Rock Paper Scissors</title>
	 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
</head>
<body>
	<nav class="navbar navbar-dark bg-dark sticky-top">
		<a href="index.php" class="navbar-brand mb-0 h1">Rock Paper Scissors</a>
	</nav>

	<div class="container">
		<div class="row" style="margin-top: 10vh;">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<?php
					if(!isset($_SESSION['name'])){
						echo "<h3>";
						echo "You must <a href='login.php'>login</a> first!!</h3>";
						die();
					}
				?>
				<h3>Welcome <?php  
					if(isset($_SESSION['name'])){
						echo $_SESSION['name'].",";
					}
				?>
				</h3>
			</div>
		</div>
		<div class="row " style="margin: 5vh;">
			<div class="col-lg-3 col-sm-5 col-md-5 col-xs-12">
				<form method = "post" class="border">
					<div class="form-group" style="padding:5vh;">
						<select name="human" id="human" class="custom-select mr-sm-2" >
							<option value='-1'>Select Strategy</option>
							<option value='0'>Rock</option>
							<option value='1'>Paper</option>
							<option value='2'>Scissors</option>
							<option value="3">Test</option>
						</select>
					</div>
					<div class="form-group" style="padding:3vh;">
						<input type="submit" value="Play" class="btn btn-primary">
						<input type="button" value="Logout" onclick="location.href='logout.php'; return false;" class="btn btn-outline-warning">
					</div>
				</form>
			</div>				
		</div>
		<div class="row">
			<div class="col-sm-6 col-xs-6 col-md-6 col-lg-12">

				<pre>
					<?php
						function check($human, $computer){
							if($human===$computer)
								return 'Tie';
							else if($human==='Rock'&&$computer==='Scissors'){
								return 'You Win';
							}
							else if($human==='Rock'&&$computer==='Paper'){
								return 'You Lose';
							}
							else if($human==='Paper'&&$computer==='Scissors')
								return 'You Lose';
							else if($human==='Paper'&&$computer==='Rock')
								return 'You Win';
							else if($human==='Scissors'&&$computer==='Paper')
								return 'You Win';
							else if($human==='Scissors'&&$computer==='Rock')
								return 'You Lose';
						}
					$arr = array('Rock', 'Paper', 'Scissors');
					$human = isset($_POST['human'])?$_POST['human']+0:-1;
					if($human==-1){  
						$output = "Please select a strategy";
						echo "<input class='form-control' type='text' placeholder=' ".$output."' readonly>";
					}

					else if($human==3)	{
						$arr = array('Rock', 'Paper', 'Scissors');
						for($i=0; $i<3; $i++){

							for($j=0;$j<3;$j++){
								$out = check($arr[$i], $arr[$j]);
								$output_1 = "Human=".$arr[$i];
								$output_2=" Computer=".$arr[$j];
								$output_3=" Result=".$out;
								echo "<input class='form-control' type='text' placeholder=' ".$output_1." 'readonly>";
								echo "<input class='form-control' type='text' placeholder=' ".$output_2." 'readonly>";
								echo "<input class='form-control' type='text' placeholder=' ".$output_3." 'readonly>";
								echo "<hr>";
							}
						}	
					}
					else{
						$r = rand(0, 2);
						$out = check($arr[$human], $arr[$r]);
						$output_1 = "Your Play=".$arr[$human];
						$output_2 =	" Computer Play=".$arr[$r];
						$output_3 = " Result=".$out;
						echo "<input class='form-control' type='text' placeholder=' ".$output_1." 'readonly>";
						echo "<input class='form-control' type='text' placeholder=' ".$output_2." 'readonly>";
						echo "<input class='form-control' type='text' placeholder=' ".$output_3." 'readonly>";
						echo "<hr>";
					}
					?>
				</pre>
			</div>
		</div>
	</div>
<!-- Now, dealing with the footer -->
<div class="container-fluid bg-light footer-bottom" style="height: 22.2vh;">
	<footer style="padding-top: 50px;">
		<center>
			&copy; Avnish's Projects | Made with <span style="color: #ff00bf;">&#9829;</span> at DCRUST
		</center>
	</footer>
</div>
</body>
</html>