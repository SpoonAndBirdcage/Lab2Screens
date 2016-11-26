<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Course Management</h1>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Create a Course</li>
			<li class="tab-link" data-tab="tab-2">Add Course Section</li>
			<li class="tab-link" data-tab="tab-3">Assign Course Section to Room</li>
		</ul>

	<!--Create Course(CourseID, CourseName, CourseDescription, CreditsAwarded)-->
	<section id="tab-1" class="form-main tab-content current">
		<h2>Create a Course</h2>
		<div class="grid group">
			<div class="col-4 form-section">
				<label for="search">Search:</label>
				<input type="text" class="form-input" name="search">
			</div>
		</div>
		<hr>
		<form>
			<div class="grid group">
				<div class="col-2 form-section">
					<label for="CourseID" >Course ID:</label>
					<input class="form-input" type="text" name="CourseID" readonly value="1001">
				</div>

				<div class="col-2 form-section">
					<label for="CourseName">Course Name:</label>
					<input class="form-input" type="text" name="CourseName" value="Root Canals 101">
				</div>
			</div>
			<div class="grid group">
				<div class="col-1 form-section">
					<label for="Credits">Credits:</label>
					<SELECT class="form-input form-ddl" name="Credits">
						<option value="3">3</option>
					</SELECT>
				</div>
			</div>
			<div class="grid group">
				<div class="col-4 form-section">
					<label for="CourseDescription">Course Description:</label><br>
					<textarea id="elementID" class="form-input form-textarea"></textarea>
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
		<h2>Add Course Section</h2>
		<div class="grid group">
			<div class="col-4 form-section">
				<label for="search">Search:</label>
				<input type="text" class="form-input" name="search">
			</div>
		</div>
		<hr>
		<form>
			<div class="grid group">
				<div class="col-2 form-section">
					<label for="CourseID">Course ID:</label>
					<SELECT class="form-input form-ddl" name="CourseID">
						<option value="RootCanal101">Root Canals 101 - 1001</option>
					</SELECT>
				</div>
				<div class="col-2 form-section">
					<label for="CourseID">Course Section ID:</label>
					<input class="form-input" type="text" name="CourseID" readonly value="1018">
				</div>
			</div>

			<div class="grid group">
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
			   <div class="col-2 form-section">
			    	<label for="SemesterYear">Year:</label>
					<SELECT class="form-input form-ddl" name="SemesterYear">
						<option value="2016">2016</option>
					</SELECT>
				</div>
			</div>

			<div class="grid group">
				<div class="col-2 form-section">
					<label for="Instructor">Instructor:</label>
					<SELECT class="form-input form-ddl" name="Instructor">
						<option value="52">Homer Simpson</option>
					</SELECT>
				</div>
				<div class="col-2 form-section">
					<label for="InstructorSes">Sessional Instructor ID:</label>
					<SELECT class="form-input form-ddl" name="InstructorSes">
						<option value="67">Maggie Simpson</option>
					</SELECT>
				</div>
			</div>
			<div class="grid group">
				<div class="col-4 form-section">
					<input class="btn btn-submit" type="submit" value="Add Class Section">
					<input class="btn btn-update" type="submit" value="Update">
					<input class="btn btn-danger" type="submit" value="Delete">
				</div>
			</div>
		</form>
	</section>

	<!--Add Class to Room Schedule (ClassRoomScheduleID, ClassRoomID, CourseSectionID, Date)-->
	<section id="tab-3" class="form-main tab-content">
		<h2>Assign Section to Room</h2>
		<div class="grid group">
			<div class="col-4 form-section">
				<label for="search">Search:</label>
				<input type="text" class="form-input" name="search">
			</div>
		</div>
		<hr>
		<form>
			<div class="grid group">
				<div class="col-2 form-section">
					<label for="RoomLocation">Location:</label>
					<SELECT class="form-input form-ddl" name="RoomLocation">
						<option value="MainDentalCampus">Main Dental Campus</option>
					</SELECT>
				</div>
				<div class="col-2 form-section">
					<label for="Room">Room:</label>
					<SELECT class="form-input form-ddl" name="Room">
						<option value="202">QR-201</option>
					</SELECT>
				</div>
			</div>
			<div class="grid group">
				<div class="col-1 form-section">
					<div class="row-inside-row">
						<label for="RoomCourseID">Section:</label>
						<SELECT class="form-input form-ddl" name="RoomCourseID">
							<option value="1018">1018</option>
						</SELECT>


						<label for="CourseID">Course ID:</label>
						<SELECT class="form-input form-ddl" name="CourseID">
							<option value="RootCanal101">Root Canals 101 - 1001</option>
						</SELECT>

						<label for="DayOfWeek">Day Of Week:</label>
						<SELECT class="form-input form-ddl" name="DayOfWeek">
							<option value="Mon">Monday</option>
						</SELECT>

						<label for="StartTime">Start Time:</label>
						<SELECT class="form-input form-ddl" name="StartTime">
							<option value="13">1:00pm</option>
						</SELECT>
					</div>
				</div>
				<div class="col-3 form-section">
					<label for="schedule">Room Schedule:</label>
					<table name="schedule" id="schedule">
						<tr>
							<th>Time</th>
							<th>Sunday</th>
							<th>Monday</th>
							<th>Tuesday</th>
							<th>Wednesday</th>
							<th>Thursday</th>
							<th>Friday</th>
							<th>Saturday</th>
						</tr>
						<tr>
							<td><strong>8:00am</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>9:00am</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>10:00am</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>11:00am</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>12:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>1:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>2:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>3:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>4:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>5:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>6:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>7:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>8:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>9:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
						<tr>
							<td><strong>10:00pm</strong></td>
							<td>Sunday</td>
							<td>Monday</td>
							<td>Tuesday</td>
							<td>Wednesday</td>
							<td>Thursday</td>
							<td>Friday</td>
							<td>Saturday</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="grid group">
					<div class="col-4 form-section">
						<input class="btn btn-submit" type="submit" value="Assign Section To Room">
						<input class="btn btn-update" type="submit" value="Update">
						<input class="btn btn-danger" type="submit" value="Delete">
					</div>
			</div>
		</form>
	</section>
</main>
<?php include('../include/footer.php') ?>
