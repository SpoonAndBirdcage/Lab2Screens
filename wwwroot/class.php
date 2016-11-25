	<?php include('include/header.php') ?>
	<main class="main-content">
		<!--Create Course(CourseID, CourseName, CourseDescription, CreditsAwarded)-->
		<h1>Course Management</h1>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Create a Course</li>
			<li class="tab-link" data-tab="tab-2">Add Course Section</li>
			<li class="tab-link" data-tab="tab-3">Assign Course Section to Room</li>
		</ul>

		<div id="tab-1" class="form-main tab-content current">
			<h2>Create a Course</h2>
			<form>
				<div class="grid group">
					<div class="col-2 form-section">
							<label for="CourseID" >Course ID:</label>
							<input type="text" name="CourseID" class="form-input" value="1001">
					</div>
					<div class="col-2 form-section">
						<label for="CourseName">Course Name:</label>
						<input type="text" name="CourseName" class="form-input" value="Root Canals 101">
					</div>
				</div>
				<div class="grid group">
					<div class="col-3 form-section">
						<label for="CourseDescription">Course Description:</label>
						<textarea class="form-input form-textarea"></textarea>
					</div>
					<div class="col-1 form-section">
						<label for="Credits">Credits:</label>
						<SELECT name="Credits" class="form-input form-ddl">
							<option value="3">3</option>
						</SELECT>
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<input type="submit" value="Create Class" class="btn btn-submit">
					</div>
				</div>
			</form>
		</div>

		<!--Create Course Section(CourseSectionID, CourseID, SemesterID, InstructorID, SessionalInstructorID)-->
		<div id="tab-2" class="form-main tab-content">
			<h2>Add Course Section</h2>
			<form>
				<h3>Course Information</h3>
				<div class="grid group">
					<div class="col-1 form-section">
						<label for="CourseID">Course ID:</label>
						<SELECT name="CourseID" class="form-input form-ddl">
							<option value="RootCanal101">Root Canals 101 - 1001</option>
						</SELECT>
					</div>
					<div class="col-1 form-section">
						<label for="CourseID">Course Section ID:</label>
						<input type="text" name="CourseID" class="form-input" readonly value="1018">
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section checkbox">
						<label for="SemesterID">Semester:</label><br>
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
					<div class="col-2 form-section">
						<label for="SemesterYear">Year:</label>
						<SELECT name="SemesterYear" class="form-input form-ddl">
							<option value="2016">2016</option>
						</SELECT>
					</div>
				</div>
				<div class="grid group">
					<h3>Course Instructor Information</h3>

				</div>
				<label for="Instructor">Instructor:</label>
				<SELECT name="Instructor">
					<option value="52">Homer Simpson</option>
				</SELECT>
			<br>
				<label for="InstructorSes">Sessional Instructor ID:</label>
				<SELECT name="InstructorSes">
					<option value="67">Maggie Simpson</option>
				</SELECT>
			<br>
				<input type="submit" value="Add Class Section">
			</form>
		</div>

		<!--Add Class to Room Schedule (ClassRoomScheduleID, ClassRoomID, CourseSectionID, Date)-->
		<div id="tab-3" class="form-main tab-content">
			<h2>Assign Section to Room</h2>
			<form class="">
			<div class="grid group">
				<label for="RoomCourseID">Section:</label>
				<SELECT name="RoomCourseID">
					<option value="1018">1018</option>
				</SELECT>
			<br>
				<label for="CourseID">Course ID:</label>
				<SELECT name="CourseID">
					<option value="RootCanal101">Root Canals 101 - 1001</option>
				</SELECT>
			<br>
				<label for="RoomLocation">Location:</label>
				<SELECT name="RoomLocation">
					<option value="MainDentalCampus">Main Dental Campus</option>
				</SELECT>
			<br>
				<label for="Room">Room:</label>
				<SELECT name="Room">
					<option value="202">QR-201</option>
				</SELECT>
				<!--Add schedule Table-->
			<br>
				<input type="datetime-local">
			<br>

				<input type="submit" value="Assign Section To Room">
				</div>
			</form>
		</div>
	</main>
	<?php include('include/footer.php') ?>
