<?php
session_start();
$Username = $_SESSION['Username'];
$xml = new SimpleXMLElement('users/' . $Username . '.xml', 0, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Balance</title>
</head>
<body>
<a href="">Home-page</a>
<a href="addnewgoal.php">Add new goal</a><hr /> 


<?php

foreach($xml->savinggoals->goal as $goal){
	echo "<b>".$goal->goalName->asXML()." </b>";
	echo "<b>".$goal->ammounttosave->asXML()." </b>";  
	echo "<br />";
	
}

?>
</body>
</html>

