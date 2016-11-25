<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Students</h1>

	<div class="form-main">
		<h2>Register Student</h2>
		<form>
		<div class="grid group">
			<div class="col-1 form-section">
			<label>First Name:</label>
			<input type="text" class="form-input" name="fname">
			</div>

			<div class="col-1 form-section">
			<label>Last Name:</label>
			<input type="text" class="form-input" name="lname">
			</div>

			<div class="col-2 form-section checkbox">
			<label>Gender:</label>
			<label class="checkbox-layout">
				<input type="radio" name="f" value="f" checked> F
				<input type="radio" name="m" value="m" checked> M
			</label>
			</div>
		</div>

			<div class="col-1 form-section">
			<label>Birth Date:</label>
			<input type="text" class="form-input" name="bday">
			</div>

			<div class="col-1 form-section">
			<label>Street Address:</label>
			<input type="text" class="form-input" name="sadd">
			</div>

			<div class="col-1 form-section">
			<label>Postal Code:</label>
			<input type="text" class="form-input" name="pcode">
			</div>

			<div class="col-1 form-section">
			<label>City:</label>
			<select name="city" class="form-input form-ddl">
				<option value="">Edmonton</option>
				<option value="">Calgary</option>
			</select>
			</div>

			<div class="col-1 form-section">
			<label>Province:</label>
			<select name="elementName" class="form-input form-ddl">
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
			</select>
			</div>

			<div class="col-1 form-section">
			<label>Email:</label>
			<input type="text" class="form-input" name="email">
			</div>

			<div class="col-1 form-section">
			<label>Phone Number:</label>
			<input type="text" class="form-input" name="phone">
			</div>

			<div class="col-1 form-section">
			<label>Add Designation:</label>
			<select name="designation" class="form-input form-ddl">
				<option value="">Right</option>
				<option value="">Left</option>
			</select>
			</div>

			<div class="col-4 form-section">
			<button type="submit" class="btn btn-submit">Submit</button>
			</div>
	</form>
	</div>


	<div class="form-main">
		<h2>Search Student</h2>
		<form>
			<div class="col-1 form-section">
			<label>Search ID/Name:</label>
			<input type="text" class="form-input" name="fname">
			</div>

			<div class="col-4 form-section">
			<button type="submit" class="btn btn-submit">Submit</button>
			</div>

			<div>
				<h3>Result List</h3>
				<a href="">Homer Simpson</a>
				<a href="">Margie Simpson</a>
				<a href="">Simpson Simpson</a>
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
	</div>

	<form>
		<h1>Register Student In Section</h1>
		<p><label>Search Student:</label>
		<input type="text" name="yourName" id="yourID" class="form-input" value="Your Value"></p>
		<p><button type="submit" class="btn btn-submit">Submit</button></p>

		<p><label>Search Course:</label>
		<select name="elementName" id="elementID" class="form-input form-ddl">
			<option value=""></option>
			<option value=""></option>
		</select></p>

		<p><label>Search Section:</label>
		<select name="elementName" id="elementID" class="form-input form-ddl">
			<option value=""></option>
			<option value=""></option>
		</select></p>

		<p><button type="submit" class="btn btn-submit">Submit</button></p>
	</form>

</main>
<?php include('../include/footer.php') ?>
