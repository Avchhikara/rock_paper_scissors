<?php  
	session_start();
	if(!isset($_SESSION['name'])){
		echo "You must enter your name!!";
		die();
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Avnish</title>
</head>
<body>
	<h1>Rock Paper Scissors</h1>
	<h3>Welcome <?php  
		if(isset($_SESSION['name'])){
			echo $_SESSION['name'];
		}
	?>
	</h3>
	<form method = "post">
		<select name="human" id="human">
			<option value='-1'>Select</option>
			<option value='0'>Rock</option>
			<option value='1'>Paper</option>
			<option value='2'>Scissors</option>
			<option value="3">Test</option>
		</select>
		<input type="submit" value="Play">
		<input type="button" value="Logout" onclick="location.href='logout.php';">


	</form>

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
		echo "Please select a strategy and press Play.";
	}

	else if($human==3)	{
		$arr = array('Rock', 'Paper', 'Scissors');
		for($i=0; $i<3; $i++){

			for($j=0;$j<3;$j++){
				$out = check($arr[$i], $arr[$j]);
				echo "Human=".$arr[$i]." Computer=".$arr[$j]." Result=".$out."\n";
			}
		}	
	}
	else{
		$r = rand(0, 2);
		$out = check($arr[$human], $arr[$r]);
		echo "Your Play=".$arr[$human]." Computer Play=".$arr[$r]." Result=".$out."\n";
	}



	?>

</pre>



</body>
</html>