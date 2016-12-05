<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Course Management</h1>
			<div class="grid group">
				<div class="col-4 form-section">
					<div class="search">
  						<span class="fa fa-search"></span>
  						<input placeholder="Search" class="form-input" value="Root Canals">
					</div>
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
			</div>

		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Course Section Info</li>
			<li class="tab-link" data-tab="tab-2">Add Course Section</li>
			<li class="tab-link" data-tab="tab-3">Create a Course</li>
		</ul>
	<section id="tab-1" class="form-main tab-content current">
		<form>
		<h2>Course Section Info</h2>
		<div class="grid group">
			<div class="grid group search-group search-results">
				<div class="col-4 form-section">
					<label>Intro to Root Canals - A01 - Schedule</label>
					<table>
						<thead>
							<tr>
								<th>Day</th>
								<th>Time</th>
								<th>Room</th>
								<th>Room Type</th>
								<th>Room Description</th>
								<th>Capacity</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Monday</td>
								<td>8am-10am</td>
								<td>DB105</td>
								<td>Computer Lab (BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td>25</td>
							</tr>
							<tr>
								<td>Wednesday</td>
								<td>8am-10am</td>
								<td>DB105</td>
								<td>Computer Lab (BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td>25</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>8am-10am</td>
								<td>DB105</td>
								<td>Computer Lab (BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td>25</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="grid group">
				<div class="col-2 form-section">
					<label for="CourseID">Course ID</label>
					<input class="form-input" type="text" name="CourseID" readonly value="RC101">
				</div>
				<div class="col-2 form-section">
					<label for="CourseName">Course Name</label>
					<input class="form-input" type="text" name="CourseName" readonly value="Intro to Root Canals">
				</div>
		</div>
			<div class="grid group">
				<div class="col-2 form-section">
			    	<label for="SemesterYear">Year</label>
					<input class="form-input" type="text" name="SemesterYear" readonly value="2016">
				</div>
				<div class="col-2 form-section">
					<label for="SemesterID">Semester:</label>
					<input class="form-input" type="text" name="SemesterID" readonly value="Winter">
			   </div>
			</div>
			<div class="grid group">
				<div class="col-4 form-section">
					<label for="Instructor">Instructor</label>
					<input class="form-input" type="text" name="Instructor" readonly value="Homer Simpson">
				</div>
			</div>
			<div class="grid group search-group search-results">
				<div class="col-4 form-section">
					<label>Students</label>
					<table>
						<thead>
							<tr>
								<th>Student ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Designation</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="../screens/student-screen.php">200255</a></td>
								<td>Jane</td>
								<td>Doe</td>
								<td>jdoe@naitdental.ca</td>
								<td>Orthodontic Surgeon</td>
							</tr>
							<tr>
								<td><a href="../screens/student-screen.php">200256</a></td>
								<td>John</td>
								<td>Hammon</td>
								<td>jhammon4@naitdental.ca</td>
								<td>Orthodontic Surgeon</td>
							</tr>
							<tr>
								<td><a href="../screens/student-screen.php">200375</a></td>
								<td>Bert</td>
								<td>Renolds</td>
								<td>brenolds@naitdental.ca</td>
								<td>Orthodontic Surgeon</td>
							</tr>
							<tr>
								<td><a href="../screens/student-screen.php">200007</a></td>
								<td>James</td>
								<td>Bond</td>
								<td>jbond@naitdental.ca</td>
								<td>Orthodontic Surgeon</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		</form>
	</section>
<!--Create Course Section(CourseSectionID, CourseID, SemesterID, InstructorID, SessionalInstructorID)-->
	<section id="tab-2" class="form-main tab-content">
		<form>
		<h2>Add/Update Course Section</h2>
			<div class="grid group">
				<div class="col-2 form-section">
					<label for="CourseID">Course ID</label>
					<input class="form-input" type="text" name="CourseID" readonly value="RC101">
				</div>
				<div class="col-2 form-section">
					<label for="CourseName">Course Name</label>
					<input class="form-input" type="text" name="CourseName" readonly value="Intro to Root Canals">
				</div>
			</div>

			<div class="grid group grid-spacing">
				<div class="col-2 form-section">
			    	<label for="SemesterYear">Year</label>
					<SELECT class="form-input form-ddl" name="SemesterYear">
						<option value="2016">2016</option>
					</SELECT>
				</div>
				<div class="col-2 form-section checkbox">
					<label for="SemesterID">Semester:</label>
					<label class="checkbox-layout">
						<input type="radio" name="Semester" value="Winter" checked> Winter
					</label>
					<label class="checkbox-layout">
				    	<input type="radio" name="Semester" value="Spring"> Spring
				    </label>
					<label class="checkbox-layout">
				    	<input type="radio" name="Semester" value="Summer"> Summer
				    </label>
					<label class="checkbox-layout">
				    	<input type="radio" name="Semester" value="Fall"> Fall
				    </label>
			   </div>
			</div>
			<div class="grid group">
				<div class="col-4 form-section btn-group">
					<input class="btn btn-submit" type="submit" value="Add Class Section">
					<input class="btn btn-update" type="submit" value="Update">
					<input class="btn btn-danger" type="submit" value="Delete">
				</div>
			</div>
		</form>
	</section>

<!--Create Course(CourseID, CourseName, CourseDescription, CreditsAwarded)-->
	<section id="tab-3" class="form-main tab-content">
		<form>
		<h2>Create a Course</h2>
			<div class="grid group">
				<div class="col-1 form-section">
					<div class="row-inside-row">
						<label for="CourseID" >Course ID</label>
						<input class="form-input" type="text" name="CourseID" readonly value="RC101">

						<label for="CourseName">Course Name</label>
						<input class="form-input" type="text" name="CourseName" value="Root Canals 101">

						<label for="Credits">Credits</label>
						<SELECT class="form-input form-ddl" name="Credits">
							<option value="3">3</option>
						</SELECT>
					</div>
				</div>
				<div class="col-3 form-section">
					<label for="CourseDescription">Course Description</label>
					<textarea id="elementID" class="form-input form-textarea" style="height: 192px;">A Beginners guide to Root Canals</textarea>
				</div>
			</div>
			<div class="grid group">
				<div class="col-4 form-section">
					<input class="btn btn-submit" type="submit" value="Create Class">
					<input class="btn btn-update" type="submit" value="Update">
					<input class="btn btn-danger" type="submit" value="Delete">
				</div>
			</div>
		</form>
	</section>
</main>
<?php include('../include/footer.php') ?>
