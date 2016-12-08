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
						<input placeholder="Search" class="form-input" value="2009">
				</div>
			</div>
			<div class="col-3"></div>
			<div class="col-3"></div>
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
							<th>Designation</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>200910818</td>
							<td>Bruce</td>
							<td>Wayne</td>
							<td>batman01@gmail.com</td>
							<td>(587)555-1234</td>
							<td>Orthodontist</td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>200910960</td>
							<td>Dick</td>
							<td>Grayson</td>
							<td>robin01@gmail.com</td>
							<td>(587)456-1234</td>
							<td></td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>200910340</td>
							<td>Exo</td>
							<td>Ox</td>
							<td>exoexo@gmail.com</td>
							<td>(780)265-1234</td>
							<td></td>
							<td><a href="#">Edit</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

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
		</div>
		<div class="grid group grid-spacing">
			<div class="col-4 form-section">
				<label for="DateOfBirth">Birth Day:</label>
				<input type="date" class="form-input" name="DateOfBirth" id="DateOfBirth" value="1983-02-21" />
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
		<div class="grid group btn-group">
			<div class="col-4 form-section">
				<button type="submit" class="btn btn-submit">Add Student</button>
				<button type="submit" class="btn btn-update">Update</button>
				<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>




	<div id="tab-2" class="form-main tab-content">
		<h2>Register Student in Section</h2>
			<div class="grid group">
			<div class="col-4 form-section">
				<div class="search">
						<span class="fa fa-search"></span>
						<input placeholder="Search" class="form-input" value="200910818">
				</div>
			</div>
			<div class="col-3"></div>
			<div class="col-3"></div>
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
							<th>Designation</th>
							<th>Select</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>200910818</td>
							<td>Bruce</td>
							<td>Wayne</td>
							<td>batman01@gmail.com</td>
							<td>(587)555-1234</td>
							<td>Orthodontist</td>
							<td><a href="#">Select</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="grid group search-group search-results">
			<div class="col-4 form-section">
					<label>Student Schedule</label>
					<table>
						<thead>
							<tr>
								<th>Time</th>
								<th>Monday</th>
								<th>Tuesday</th>
								<th>Wednesday</th>
								<th>Thursday</th>
								<th>Friday</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>8:00am</td>
								<td>Root Canals - 1002</td>
								<td></td>
								<td>Root Canals - 1002</td>
								<td></td>
								<td>Root Canals - 1002</td>
							</tr>
							<tr>
								<td>9:00am</td>
								<td>Root Canals - 1002</td>
								<td></td>
								<td>Root Canals - 1002</td>
								<td></td>
								<td>Root Canals - 1002</td>
							</tr>
							<tr>
								<td>10:00am</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:00am</td>
								<td>Fillings - 1201</td>
								<td></td>
								<td>Fillings - 1201</td>
								<td></td>
								<td>Fillings - 1201</td>
							</tr>
							<tr>
								<td>12:00pm</td>
								<td>Fillings - 1201</td>
								<td></td>
								<td>Fillings - 1201</td>
								<td></td>
								<td>Fillings - 1201</td>
							</tr>
							<tr>
								<td>1:00pm</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
								<td>Cleaning Techniques - 2001</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
							</tr>
							<tr>
								<td>2:00pm</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
								<td>Cleaning Techniques - 2001</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-4 form-section">
					<div class="search">
  						<span class="fa fa-search"></span>
  						<input placeholder="Search" class="form-input" value="Root Canals">
					</div>
			</div>

			<div class="grid group search-group search-results">
				<div class="col-4 form-section">
					<label>Search Results</label>
					<table>
						<thead>
							<tr>
								<th>Course ID</th>
								<th>Course Name</th>
								<th>Credits</th>
								<th>Description</th>
								<th>Select</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>RC101</td>
								<td>Intro to Root Canals</td>
								<td>4.5</td>
								<td>A beginners guide to <strong>Root Canals</strong></td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC201</td>
								<td>Intermediate Root Canals</td>
								<td>4.5</td>
								<td><strong>Root Canal</strong> techniques with stone tools.</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC301</td>
								<td>Advanced Root Canals</td>
								<td>4.5</td>
								<td>Advanced <strong>Root Canal</strong> techniques featuring Steel.</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC401</td>
								<td>Expert Root Canals</td>
								<td>4.5</td>
								<td>Next gen <strong>Root Canal</strong> techniques featuring alien technology</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>HD101</td>
								<td>The History of Root Canals</td>
								<td>3</td>
								<td>Famous doctors and methods from around the world dating back to 1600bc.</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>CIA101</td>
								<td>Customer Relations</td>
								<td>6</td>
								<td><strong>Root Canals</strong>, Specialty tools and more... Everything ypu need to keep your patients talking.</td>
								<td><a href="#">Select</a></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-4 form-section">
					<label>Course Sections</label>
					<table>
						<thead>
							<tr>
								<th>Course ID</th>
								<th>Course Name</th>
								<th>Credits</th>
								<th>Time</th>
								<th>Room</th>
								<th>Select</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>RC401</td>
								<td>Expert Root Canals</td>
								<td>4.5</td>
								<td>1:00 pm - 2:00 pm / MWF</td>
								<td>DB104</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC401</td>
								<td>Expert Root Canals</td>
								<td>4.5</td>
								<td>1:00 pm - 2:00 pm / MWF</td>
								<td>DB105</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC401</td>
								<td>Expert Root Canals</td>
								<td>4.5</td>
								<td>2:00 pm - 3:00 pm / MWF</td>
								<td>DB204</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC401</td>
								<td>Expert Root Canals</td>
								<td>4.5</td>
								<td>2:00 pm - 3:00 pm / MWF</td>
								<td>DB113</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC401</td>
								<td>Expert Root Canals</td>
								<td>4.5</td>
								<td>3:00 pm - 4:00 pm / MWF</td>
								<td>DB204</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>RC401</td>
								<td>Expert Root Canals</td>
								<td>4.5</td>
								<td>3:00 pm - 4:00 pm / MWF</td>
								<td>DB208</td>
								<td><a href="#">Select</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</div>
</main>
<?php include('../include/footer.php') ?>
