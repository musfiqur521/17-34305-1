<?php
	if (isset($_POST['login'])) {
		$email = $_POST['email'];
		$pass = $_POST['password'];

		if ($email == 'teacher@example.com' && $pass ==  'pass1234') {
			session_start();
			$_SESSION['login'] = true;
			header('Location: ../teacherData.php');
		}
		else{
			echo 'Again Try' ;
		}
	}