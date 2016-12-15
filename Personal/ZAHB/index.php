<?php

	if(isset($_POST['Login'])){
		$Username = preg_replace('/[^a-zA-Z0-9s]/', '', $_POST['Username']);
		$Password = md5($_POST['Password']);
		if(file_exists('users/' . $Username . '.xml')){
			$xml = new SimpleXMLElement('users/' . $Username . '.xml', 0, true);
			if($Password == $xml->password){
				session_start();
				$_SESSION['Username'] = $Username;
				header("Location: balance.php");
				die;
			}
		}
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>ZAHB Login</title>
</head>
<body>

	<form method="POST" action="">
		Username: <input type="text" name="Username" size="20">
		Password: <input type="password" name="Password">
		<input type="submit" name="Login" value="Login">
	</form>

</body>
</html>