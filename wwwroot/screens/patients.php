<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Patient Management</h1>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Add/Update Patient</li>
		</ul>

	<section id="tab-1" class="form-main tab-content current">
		<form>
			<h2>Add/Update a Patient</h2>
			<div class="grid group">
				<div class="col-4 form-section">
					<div class="search">
  						<span class="fa fa-search"></span>
  						<input placeholder="Search" class="form-input" value="Parker">
					</div>
				</div>
			</div>
			<div class="grid group search-group search-results">
				<div class="col-4 form-section">
					<label>Search Results:</label>
					<table>
						<thead>
							<tr>
								<th>Patient ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Insurance Number</th>
								<th>Insurance Provider</th>
								<th>Date Of Birth</th>
								<th>Select</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>P101</td>
								<td>Peter</td>
								<td>Parker</td>
								<td>1234 Street</td>
								<td>(780)555-1234</td>
								<td>spidy@mail.com</td>
								<td>NULL</td>
								<td>NULL</td>
								<td>02/21/1983</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>P128</td>
								<td>Sean</td>
								<td>Parker</td>
								<td>1812-56 Ave</td>
								<td>(403)555-8034</td>
								<td>napster@mail.com</td>
								<td>123-412341</td>
								<td>Health4U</td>
								<td>08/14/1974</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>P204</td>
								<td>Parker</td>
								<td>Posey</td>
								<td>#14 Main Street</td>
								<td>(780)555-9987</td>
								<td>NULL</td>
								<td>153-123145</td>
								<td>ObamaCare</td>
								<td>12/14/1982</td>
								<td><a href="#">Select</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid group">
				<div class="col-4 form-section">
					<Label for="PatientID">Patient ID</Label>
					<input class="form-input" type="text" name="PatientID" id="PatientID" value="P101" readonly />
				</div>
			</div>
			<div class="grid group">
				<div class="col-2 form-section">
					<Label for="FirstName">First Name</Label>
					<input class="form-input" type="text" name="FirstName" id="FirstName" value="Peter" />
				</div>
				<div class="col-2 form-section">
					<Label for="LastName">Last Name</Label>
					<input class="form-input" type="text" name="LastName" id="LastName" value="Peter" />
				</div>
			</div>
			<div class="grid group grid-spacing">
				<div class="col-1 form-section">
					<label for="DateOfBirth">Date of Birth</label>
					<input type="date" class="form-input" name="DateOfBirth" id="DateOfBirth" value="1983-02-21" />
				</div>
				<div class="col-1 form-section">
					<label for="phoneNumber">Phone Number</label>
					<input type="text" name="phoneNumber" id="phoneNumber" value="(780)555-1234" class="form-input">
				</div>
				<div class="col-1 form-section">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" value="spidy@mail.com" class="form-input">
				</div>
			</div>
			<div class="grid group">
				<div class="col-4 form-section">
					<label for="address">Address</label>
					<input type="text" class="form-input" name="address" id="address" value="1234 Street">
				</div>
			</div>
			<div class="grid group grid-spacing">
				<div class="col-1 form-section">
					<label for="city">City</label>
					<input type="text" class="form-input" name="city" id="city" value="Edmonton">
				</div>
				<div class="col-1 form-section">
					<label for="province">Province</label>
					<select class="form-input form-ddl">
						<option value="AB">AB</option>
					</select>
				</div>
				<div class="col-1 form-section">
					<label for="country">Country</label>
					<input type="text" class="form-input" name="country" id="country" value="Canada">
				</div>
				<div class="col-1 form-section">
					<label for="postalCode">Postal Code</label>
					<input type="text" class="form-input" name="postalCode" id="postalCode" value="T4F 9N0">
				</div>
			</div>
			<div class="grid group">
				<div class="col-1 form-section">
					<label for="insuranceNum">Insurance Number</label>
					<input type="text" class="form-input" name="insuranceNum" id="insuranceNum" value="NULL">
				</div>
				<div class="col-1 form-section">
					<label for="insuranceProvider">Insurance Provider</label>
					<input type="text" class="form-input" name="insuranceProvider" id="insuranceProvider" value="NULL">
				</div>
			</div>
			<div class="grid group btn-group">
				<div class="col-4 form-section">
					<button class="btn btn-submit" type="submit">Add Patient</button>
					<button class="btn btn-update" type="submit">Update</button>
					<button class="btn btn-danger" type="submit">Delete</button>
				</div>
			</div>
	</section>












</main>
<?php include('../include/footer.php') ?>