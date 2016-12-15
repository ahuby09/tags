<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>College work</title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	
</head>
<body>
	<form action="#" method="POST">
	<fieldset>
		<p><label>Username:</label><input type="text" name="Username" placeholder="username"></p>

		<!--<p><label>Search:</label><input type="search" name="search" placeholder="search"></p> -->

		<p><label>Password:</label><input type="Password" name="Password" placeholder="password"></p>

		<p><label>DOB:</label><input type="date" name="dob"></p>

		<p><label>Number:</label><input type="number" min="1" max="10" name="dob"></p>
		<!--<p><label>Phone</label><input type="tel" name="number"></p> -->

		<p><label>file picker</label><input type="file" name="submit"></p>

		<p><label>colour picker</label><input type="color" name="submit"></p>

		<p><input type="submit" name="submit" value="register"></p>


		<p><textarea rows="10" cols="5" placeholder="enter your text here"></textarea></p>
		</fieldset>
		<fieldset>
		<label>Checkbox 1</label>
			<input type="Checkbox" name="Checkbox" />
		<label>Checkbox 2</label>
			<input type="Checkbox" name="Checkbox" />
		<label>Checkbox 3</label>
			<input type="Checkbox" name="checkbox">
		</fieldset>
		<fieldset>
			<legend>
			Legend
			</legend>
			<label>Captial FM</label>
				<p>Yes<input type="radio" name="choose"></p>
			<label>Captial FM</label>
				<p>no<input type="radio" name="radio"></p>
			<label>Captial FM</label>
				<p>maybe<input type="radio" name="radio"></p>
			
		</fieldset>
		<fieldset>

		<label>Colors</label>

		<!--select form -->
		<select>
			<optgroup label="colors">
				<option>Blue</option>
				<option>Red</option>
				<option>Green</option>
			</optgroup>
		</select>
		<!-- end of the select option -->

		<p><button type="reset" name="reset">reset</button></p> <!-- Basic reset button-->
		<p><button type="submit" name="send">Submit</button></p> <!-- Basic submit button-->

		</fieldset>
	</form>
</body>
</html>