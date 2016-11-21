<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nait DS - Room</title>
</head>
<body>
	<?php include('include/header.php') ?>
	<main class="main-content">
		<!--Create Course(CourseID, CourseName, CourseDescription, CreditsAwarded)-->
		<section class="grid group">
			<h2>Create a Course</h3>
			<form class="">
				<label for="CourseID" >Course ID:</label>
				<input class="form-input" type="text" name="CourseID" readonly value="1001">
			<br>
				<label for="CourseName">Course Name:</label>
				<input class="form-input" type="text" name="CourseName" value="Root Canals 101">
			<br>
				<label for="CourseDescription">Course Description:</label><br>
				<textarea id="elementID" class="form-input form-textarea"></textarea>
			<br>
				<label for="Credits">Credits:</label>
				<SELECT class="form-input form-ddl" name="Credits">
					<option value="3">3</option>
				</SELECT>
			<br>
				<input class="btn btn-submit" type="submit" value="Create Class">
			</form>
		</section>

		<!--Create Course Section(CourseSectionID, CourseID, SemesterID, InstructorID, SessionalInstructorID)-->
		<section class="grid group">
			<h2>Add Course Section</h3>
			<form class="">
				<label for="CourseID">Course ID:</label>
				<SELECT class="form-input form-ddl" name="CourseID">
					<option value="RootCanal101">Root Canals 101 - 1001</option>
				</SELECT>
			<br>
				<label for="CourseID">Course Section ID:</label>
				<input class="form-input" type="text" name="CourseID" readonly value="1018">
			<br>
				<label for="SemesterID">Semester:</label><br>
				<input type="radio" name="Semester" value="Winter" checked> Winter<br>
			    <input type="radio" name="Semester" value="Spring"> Spring<br>
			    <input type="radio" name="Semester" value="Summer"> Summer<br>
			    <input type="radio" name="Semester" value="Fall"> Fall
		    <br>
		    	<label for="SemesterYear">Year:</label>
				<SELECT class="form-input form-ddl" name="SemesterYear">
					<option value="2016">2016</option>
				</SELECT>
			<br>
				<label for="Instructor">Instructor:</label>
				<SELECT class="form-input form-ddl" name="Instructor">
					<option value="52">Homer Simpson</option>
				</SELECT>
			<br>
				<label for="InstructorSes">Sessional Instructor ID:</label>
				<SELECT class="form-input form-ddl" name="InstructorSes">
					<option value="67">Maggie Simpson</option>
				</SELECT>
			<br>
				<input class="btn btn-submit" type="submit" value="Add Class Section">
			</form>
		</section>

		<!--Add Class to Room Schedule (ClassRoomScheduleID, ClassRoomID, CourseSectionID, Date)-->
		<section class="grid group">
			<h2>Assign Section to Room</h3>
			<br>
			<form class="col-2">
				<label for="RoomCourseID">Section:</label>
				<SELECT class="form-input form-ddl" name="RoomCourseID">
					<option value="1018">1018</option>
				</SELECT>
			<br>
				<label for="CourseID">Course ID:</label>
				<SELECT class="form-input form-ddl" name="CourseID">
					<option value="RootCanal101">Root Canals 101 - 1001</option>
				</SELECT>
			<br>
				<label for="RoomLocation">Location:</label>
				<SELECT class="form-input form-ddl" name="RoomLocation">
					<option value="MainDentalCampus">Main Dental Campus</option>
				</SELECT>
			<br>
				<label for="Room">Room:</label>
				<SELECT class="form-input form-ddl" name="Room">
					<option value="202">QR-201</option>
				</SELECT>
			<br>
				<input type="datetime-local">
		    <br>
				<input class="btn btn-submit" type="submit" value="Assign Section To Room">
			</form>
			<div class="col-2">
				<h4>Room Schedule</h4>
				<table>
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
						<td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>9:00am</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>10:00am</strong
						></td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>11:00am</strong></td>
						<td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>12:00pm</strong
						></td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>1:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>2:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>3:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>4:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>5:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>					
					<tr>
						<td><strong>6:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>7:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>8:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
					<tr>
						<td><strong>9:00pm</strong>
						</td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>									
					<tr>
						<td><strong>10:00pm</strong
						></td><td><p>Sunday</p></td>
						<td><p>Monday</p></td>
						<td><p>Tuesday</p></td>
						<td><p>Wednesday</p></td>
						<td><p>Thursday</p></td>
						<td><p>Friday</p></td>
						<td><p>Saturday</p></td>
					</tr>
				</table>
			</div>
		</section>
	</main>
	<?php include('include/footer.php') ?>
	</body>
</html>
