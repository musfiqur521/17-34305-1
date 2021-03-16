<!DOCTYPE html>
<html lang="en">
<head>
	
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>




</head>
<body>

	<?php

		$cpassword = "old";
		$rpassword = $rpassword ="";
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if (isset($_POST['submit'])){
				$npassword=$_POST['npassword'];
				$rpassword=$_POST['rpassword'];
				if($_cpassword !=$_POST['cpassword']){
					$errmsg="Your Old Password not machted. plz try again";

				}else{
					if($npassword == $rpassword){
						$errmsg = "Valid password";
					}
				
				else{
					$errmsg ="Confirm your password not machted";
				}
			}
		}
		

			function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}

}

?>
	<form method="POST" action="<?php echo htmlspecialchares($_SERVER["PHP_SELF"])?>">

			<fieldset>
				<legend>CHANGE PASSWORD</legend>
				<label for="password">Current Password:</label>
				
				<input type="password" id="cpassword" name="cpassword"><br><br>

				<label for="npassword">New Password:</label>
				
				<input type="password" id="npassword" name="npassword"><br><br>

				<label for="rpassword">Retype your new password:</label>

				<input type="password" id="rpassword" name="rpassword"><br><br>

				<hr>

				<input type="submit" value="submit" name="submit">
			</fieldset>
		</form>

		<?php
		echo "<h2>Your Input:</h2>";
		echo $cpassword;
		echo "<br>";
		echo $npassword;
		echo "<br>";
		echo $rpassword;
		echo "<br>";

		?>



</body>
</html>