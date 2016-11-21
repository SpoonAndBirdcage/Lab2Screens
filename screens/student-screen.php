<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form p{
			margin: 0; 
			clear: left; 
			font-size: 20px;
			margin-left: 20px;
			font-family: 'Vollkorn', serif;
		}
		form label{
			float: left; 
			width: 200px; 
		}

	</style>
</head>
<body>
	<form name="" method="">
		<h1>Register Student</h1>
		<p><label>First Name:</label>
		<input type="" name=""></p> 

		<p><label>Last Name:</label>
		<input type="" name=""></p> 

		<p><label>Street Address:</label>
		<input type="" name=""></p> 

		<p><label>Postal Code:</label>
		<input type="" name=""></p> 

		<p><label>City:</label> 
		<select class="form-input form-ddl">
			<option value="">Edmonton</option>
			<option value="">Calgary</option>
		</select></p>

		<p><label>Province:</label>
		<select class="form-input form-ddl">
			<option value="AB">Alberta</option>
			<option value="BC">British Columbia</option>
			<option value="MB">Manitoba</option>
			<option value="NB">New Brunswick</option>
			<option value="NL">Newfoundland and Labrador</option>
			<option value="NS">Nova Scotia</option>
			<option value="ON">Ontario</option>
			<option value="PE">Prince Edward Island</option>
			<option value="QC">Quebec</option>
			<option value="SK">Saskatchewan</option>
			<option value="NT">Northwest Territories</option>
			<option value="NU">Nunavut</option>
			<option value="YT">Yukon</option>
		</select></p> 

		<p><label>Email:</label>
		<input type="" name=""></p> 

		<p><label>Phone Number:</label>
		<input type="" name=""></p> 

		<p><label>Add Designation:</label>
		<select class="form-input form-ddl">
			<option value="">Right</option>
			<option value="">Left</option>
		</select></p>

		<p><input type="submit" name="submit" value="Add Student" class="btn btn-submit"></p>
	</form>



	<form name="" method="">
		<h1>Search Student</h1>
		<p><label>Search ID/Name:</label>
		<input type="" name=""></p> 

		<p><input type="submit" name="submit" value="Search Student" class="btn btn-submit"></p>

		<div>
			<h3>Result List</h3>
			<p><a href="">Homer Simpson</a></p>
			<p><a href="">Margie Simpson</a></p>
			<p><a href="">Simpson Simpson</a></p>
		</div>

		<div>
			<h3>Student Info</h3>
			<p>Student ID: 69</p>
			<p>Full Name: Homer Simpson</p>
			<p>Address: Somewhere</p>
			<p>City: Somewhere</p>
			<p>Province: Somewhere</p>
			<p>Email: Somewhere@Somewhere.com</p>
			<p>Phone: 12345567787</p>
			<p>Designation ID: 5</p>
		</div>
	</form>

	<form name="" method="">
		<h1>Register Student In Section</h1>
		<p><label>Search Student:</label>
		<input type="" name=""></p> 
		<p><input type="submit" name="submit" value="Search Student" class="btn btn-submit"></p>
		
		<p><label>Search Course:</label>
		<select class="form-input form-ddl">
			<option value=""></option>
			<option value=""></option>
		</select></p> 

		<p><label>Search Section:</label>
		<select class="form-input form-ddl">
			<option value=""></option>
			<option value=""></option>
		</select></p>

		<p><input type="submit" name="submit" value="Register Student" class="btn btn-submit"></p>
	</form>
</body>
</html>