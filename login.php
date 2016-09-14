
<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);

	$signupEmailError = "";
	
	
	// kas e/post oli olemas
	if ( isset ($_POST["signupEmail"] ) ) {
		
		
		if ( empty ( $_POST["signupEmail"] ) ) {
			
			// oli email, kuid see oli tühi
			$signupEmailError = "See väli on kohustuslik";
			
			
			
		}
		
	}
	
	
	
	
	$signupPasswordError = "";
	
	
	// kas password oli olemas
	if ( isset ($_POST["signupPassword"] ) ) {
		
		
		if ( empty ( $_POST["signupPassword"] ) ) {
			
			// oli password, kuid see oli tühi
			$signupPasswordError = "See väli on kohustuslik";
			
		} else 	{
			
			// tean, et parrol ja see ei olnud tühi
			// vähemalt 8
			
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk.";
			
			
		
			}
	
		
		}
	
	
	}
	
	

?>

<!DOCTYPE html>
<html>
<head>
<title>Sisselogimise lehekülg</title>
</head>
<body>

<h1>Logi sisse</h1>
<form method="POST">
	
	<label>E-post</label><br>
	<input name="loginEmail" type ="email" placeholder="E-post">
	
	<br><br>
	<input name="loginPassword" type ="password" placeholder="Parool">
	<br><br>
	<input type ="submit" value="Logi sisse">
	
	

	
	
	</form>
	
	<h1>Loo kasutaja</h1>
<form method="POST">
	
	<label>E-post</label><br>
	<input name="signupEmail" type ="email" placeholder="E-post"> <?php echo $signupEmailError; ?>
	
	<br><br>
	<input name="signupPassword" type ="password" placeholder="Parool"> <?php echo $signupPasswordError; ?>
	<br><br>
	<input type ="submit" value="Logi sisse">
	
	</form>
	


</body>
</html>