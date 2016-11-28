<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Course Management</h1>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Create a Course</li>
			<li class="tab-link" data-tab="tab-2">Add Course Section</li>
		</ul>

	<!--Create Course(CourseID, CourseName, CourseDescription, CreditsAwarded)-->
	<section id="tab-1" class="form-main tab-content current">
		<form>
		<h2>Create a Course</h2>
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
								<td>Tourture Techniques</td>
								<td>6</td>
								<td><strong>Root Canals</strong>, Specialty tools and more... Everything ypu need to keep your patients talking.</td>
								<td><a href="#">Select</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid group">
				<div class="col-1 form-section">
					<div class="row-inside-row">
						<label for="CourseID" >Course ID</label>
						<input class="form-input" type="text" name="CourseID" readonly value="1001">

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
					<textarea id="elementID" class="form-input form-textarea" style="height: 192px;"></textarea>
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

	<!--Create Course Section(CourseSectionID, CourseID, SemesterID, InstructorID, SessionalInstructorID)-->
	<section id="tab-2" class="form-main tab-content">
		<form>
		<h2>Add Course Section</h2>
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
								<td>Tourture Techniques</td>
								<td>6</td>
								<td><strong>Root Canals</strong>, Specialty tools and more... Everything ypu need to keep your patients talking.</td>
								<td><a href="#">Select</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid group">
				<div class="col-2 form-section">
					<label for="CourseID">Course ID</label>
					<input class="form-input" type="text" name="CourseID" readonly>
				</div>
				<div class="col-2 form-section">
					<label for="CourseName">Course Name</label>
					<input class="form-input" type="text" name="CourseName" readonly>
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
				<div class="col-2 form-section">
					<label for="Instructor">Full Time Instructor</label>
					<SELECT class="form-input form-ddl" name="Instructor">
						<option value="52">Homer Simpson</option>
					</SELECT>
				</div>
				<div class="col-2 form-section">
					<label for="InstructorSes">Sessional Instructor</label>
					<SELECT class="form-input form-ddl" name="InstructorSes">
						<option value="67">Maggie Simpson</option>
					</SELECT>
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


</main>
<?php include('../include/footer.php') ?>
