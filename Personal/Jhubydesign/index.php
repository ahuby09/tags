<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Perosnal Details</legend>
			<p><label>Name:</label><input type="text" name="name" placeholder="Full Name"></p>
			<p><label>email:</label><input type="text" name="email" placeholder="email"></p>
			<p><label>Phone Number:</label><input type="tel" name="phonenumber"></p>
		</fieldset>
		<fieldset>
			<legend>Client needs</legend>
			<p><textarea col="100" rows="10" placeholder="Please describe your needs"></textarea></p>
			<fieldset>
			<legend>Select 5 colours you like</legend>
				<input type="color" name="color1">
				<input type="color" name="color2">
				<input type="color" name="color3">
				<input type="color" name="color4">
				<input type="color" name="color5">
			</fieldset><br />
			<fieldset>
				<legend>Please enter the url of 3 website that you like</legend>
					<input type="url" name="Website1">
					<input type="url" name="Website2">
					<input type="url" name="Website3">
			</fieldset><br />
			<fieldset>
				<legend>Please enter the url of 3 website that you dislike</legend>
					<input type="url" name="Website1">
					<input type="url" name="Website2">
					<input type="url" name="Website3">
			</fieldset><br />
			<label>Please enter the Number of pages that you would like</label>
				<input type="number" min="1" max="10" name=""><br />
			<label>Please enter your budget</label>
				<input type="number" name="budget" ><br />
			<fieldset>
				<legend>Timescale</legend>
					Begining date<input type="date" name="beginningdate">
					End date<input type="date" name="enddate">
			</fieldset><br />
			<label>Please select a suitable date for a meeting</label>
				<input type="date" name="meetingdate">
				<br />
		</fieldset>
		<fieldset>
			<legend>Terms and conditions</legend>
			<label>Please download and sign the following</label>
				<a href="#" download="ts.txt">Download</a>
				<label>Upload the signed copy of the terms and conditions</label>
				<input type="file" name="filepicker">
				<p><button type="submit" name="send">Submit</button></p> 

		</fieldset>
		
		
	</form>
</body>
</html>