<?php
session_start();
$Username = $_SESSION['Username'];
echo $Username;

if(isset($_POST['goal'])){
	if(file_exists('users/' . $Username . '.xml')){
	$xml = new SimpleXMLElement('users/' . $Username . '.xml', 0, true);
	$goalname = $_POST['goalname'];
	$goalammount = $_POST['goalammount'];
	$ammountsave = $_POST['saveweekly'];

	$xml->savinggoals->addChild('goal');
	$xml->savinggoals->goal->addChild('goalName', $goalname);
	$xml->savinggoals->goal->addChild('ammounttosave', $goalammount);
	$xml->savinggoals->goal->addChild("goalammount", "$goalammount");
	$xml->savinggoals->goal->addChild("saveweekly", "$ammountsave");
	echo $xml->asXML('users/' . $Username . '.xml');
	$dom = new DOMDocument('1.0');
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($xml->asXML());
	//Echo XML - remove this and following line if echo not desired
	echo $dom->saveXML();
	//Save XML to file - remove this and following line if save not desired
	$dom->save('users/' . $Username . '.xml');
}
}
//Create A predefined layout


//Get variables form the form and insert accordingly 


//submit the form and create the child of the xml element
?>
<!DOCTYPE html>
<html>
<body>
	<form action="" method="POST">
		<p>Goal Name:<input type="text" name="goalname"></p>
		<p>Goal Cost:<input type="text" name="goalammount"></p>
		<p>Ammount to save(weekly):<input type="text" name="saveweekly"></p>
		<p><input type="submit" name="goal"></p>
	</form>
</body>
</html>
