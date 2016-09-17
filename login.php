
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
	
	
	
	
	// kas sugu on olemas
	
	$signupGenderError = "";
	
	
	if ( isset ($_POST["signupGender"] ) ) {
		
		
		if ( empty ( $_POST["signupGender"] ) ) {
			
			// oli gender, kuid see oli tühi
			$signupGenderError = "See väli on kohustuslik";
			
			
			
		}
		
	}
	
	//kas vanus on olemas
	
	$signupVanusError = "";
	
	
	if ( isset ($_POST["signupVanus"] ) ) {
		
		
		if ( empty ( $_POST["signupVanus"] ) ) {
			
			// oli vanus, kuid see oli tühi
			$signupVanusError = "See väli on kohustuslik";
			
			
			
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
	<input name="signupGender" type ="Gender" placeholder="Mees/Naine"> <?php echo $signupGenderError; ?>
	<br><br>
	<input name="signupVanus" type ="Vanus" placeholder="Vanus"> <?php echo $signupVanusError; ?>
	
	
	<br><br>
	<input type ="submit" value="Logi sisse">
	
	
	</form>
	


</body>
</html>