<?php include('../include/header.php') ?>
<main class="main-content">

	<h1>Student Management</h1>
	<ul class="tabs">
	<li class="tab-link current" data-tab="tab-1"> Add/Update Student </li>
	<li class="tab-link" data-tab="tab-2"> Register Student In Section </li>
	</ul>

		<div id="tab-1" class="form-main tab-content current">
		<form>
		<h2>Add/Update Student</h2>
		<div class="grid group">
				<div class="col-4 form-section">
					<div class="search">
  						<span class="fa fa-search"></span>
  						<input placeholder="Search" class="form-input">
					</div>
				</div>
			</div>
			<div class="grid group search-group search-results">
				<div class="col-4 form-section">
					<label>Search Results:</label>
					<table>
						<thead>
							<tr>
								<th>Student ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>E-Mail</th>
								<th>Phone Number</th>
								<th>Gender</th>
								<th>Address</th>
								<th>City</th>
								<th>Province</th>
								<th>Designation</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Edit</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
<<<<<<< HEAD
		<div class="grid group">
			<div class="col-1 form-section">
				<label for="fname">First Name</label>
				<input type="text" class="form-input" name="fname" value="Bruce">
			</div>
			<div class="col-1 form-section">
				<label for="mname">Middle Name</label>
				<input type="text" class="form-input" name="mname" value="Batman">
			</div>
			<div class="col-1 form-section">
				<label for="lname">Last Name</label>
				<input type="text" class="form-input" name="lname" value="Wayne">
=======

			<div class="col-2 form-section checkbox">
			<label>Gender:</label>
			<select name="elementName" class="form-input form-ddl">
				<option value="">Gender</option>
				<option value="">Male</option>
			    <option value="">Female</option>
			    <option value="01">Others</option>
			</select>
>>>>>>> f9080245222c1ef393db229ed3c002293712f37b
			</div>
		</div>
		<div class="grid group">
			<div class="col-1 form-section">
				<label>Email:</label>
				<input type="text" class="form-input" name="email" value="batman01@gmail.com">
			</div>
			<div class="col-1 form-section">
				<label>Phone Number:</label>
				<input type="text" class="form-input" name="phone" value="(587)555-1234">
			</div>
			<div class="col-1 form-section checkbox">
				<label for="gender">Gender:</label>
					<label class="checkbox-layout">
						<input type="radio" name="gender" value="Male" checked> Male
					</label>
					<label class="checkbox-layout">
						<input type="radio" name="gender" value="Female"> Female
					</label>
				</select>
			</div>
		</div>
		<div class="grid group grid-spacing">
			<div class="col-1 form-section">
				<label>Birth Date:</label>
				<select name="elementName" class="form-input form-ddl">
			      <option value="19">19</option>
		    </select>
			</div>

			<div class="col-1 form-section">
			<label>Month</label>
			<select name="elementName" class="form-input form-ddl">
			      <option value="04">April</option>
			    </select>
			</div>

			<div class="col-1 form-section">
			<label>Year</label>
			<select name="elementName" class="form-input form-ddl">
			      <option value="1988">1988</option>
			    </select>
			 </div>
		</div>

		<div class="grid group">
			<div class="col-4 form-section">
			<label>Street Address:</label>
			<input type="text" class="form-input" name="address2" value="1234 Wayne Manor Way">
			</div>
		</div>
		<div class="grid group grid-spacing">
			<div class="col-2 form-section">
				<label>City:</label>
				<select name="city" class="form-input form-ddl">
					<option value="">Edmonton</option>
				</select>
			</div>
			<div class="col-2 form-section">
				<label>Province:</label>
				<select name="elementName" class="form-input form-ddl">
					<option value="AB">Alberta</option>
				</select>
			</div>
			<div class="col-2 form-section">
				<label>Postal Code:</label>
				<input type="text" class="form-input" name="pcode" value="T3C 8H0">
			</div>
		</div>

		<div class="grid group">
			<div class="col-4 form-section">
			<label>Designation:</label>
			<select name="designation" class="form-input form-ddl">
				<option value="">Orthodontist</option>
			</select>
			</div>
		</div>

			<div class="col-4 form-section">
				<button type="submit" class="btn btn-submit">Add Student</button>
				<button type="submit" class="btn btn-update">Update</button>
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>

	</div>

	<div id="tab-2" class="form-main tab-content">
		<h2>Register Student in Section</h2>
			<div class="grid group">
				<div class="col-1 form-section">
				<label>Search Student:</label>
				<input type="text" class="form-input" name="student">
				</div>
				<div class="col-4 form-section"></div>
			</div>

			<div class="col-2 form-section">
				<button type="submit" class="btn btn-submit">Search</button>
			</div>

			<div class="grid group">
				<div class="col-1 form-section">
				<label>Search Course:</label>
				<select name="elementName" id="elementID" class="form-input form-ddl">
					<option value=""></option>
					<option value=""></option>
				</select>
				</div>
				<div class="col-4 form-section"></div>
			</div>

			<div class="grid group">
				<div class="col-1 form-section">
				<label>Search Section:</label>
				<select name="elementName" id="elementID" class="form-input form-ddl">
					<option value=""></option>
					<option value=""></option>
				</select>
				</div>
				<div class="col-4 form-section"></div>
			</div>

			<div class="col-2 form-section">
				<label>Add Student to Section</label>
				<button type="submit" class="btn btn-submit">Register Student</button>
			</div>
	</div>
</main>
<?php include('../include/footer.php') ?>
