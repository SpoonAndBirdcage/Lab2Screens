	<!--<?php include('include/header.php') ?>-->
	<main>
		<!--Create Course(CourseID, CourseName, CourseDescription, CreditsAwarded)-->
		<div>
			<h3>Create a Course</h3>
			<form class="">
				<label for="CourseID" >Course ID:</label>
				<input type="text" name="CourseID" readonly value="1001">
			<br>
				<label for="CourseName">Course Name:</label>
				<input type="text" name="CourseName" value="Root Canals 101">
			<br>
				<label for="CourseDescription">Course Description:</label><br>
				<textarea></textarea>
			<br>
				<label for="Credits">Credits:</label>
				<SELECT name="Credits">
					<option value="3">3</option>
				</SELECT>
			<br>
				<input type="submit" value="Create Class">
			</form>
		</div>

		<!--Create Course Section(CourseSectionID, CourseID, SemesterID, InstructorID, SessionalInstructorID)-->
		<div>
			<h3>Add Course Section</h3>
			<form class="">
				<label for="CourseID">Course ID:</label>
				<SELECT name="CourseID">
					<option value="RootCanal101">Root Canals 101 - 1001</option>
				</SELECT>
			<br>
				<label for="CourseID">Course Section ID:</label>
				<input type="text" name="CourseID" readonly value="1018">
			<br>
				<label for="SemesterID">Semester:</label><br>
				<input type="radio" name="Semester" value="Winter" checked> Winter<br>
			    <input type="radio" name="Semester" value="Spring"> Spring<br>
			    <input type="radio" name="Semester" value="Summer"> Summer<br>
			    <input type="radio" name="Semester" value="Fall"> Fall
		    <br>
		    	<label for="SemesterYear">Year:</label>
				<SELECT name="SemesterYear">
					<option value="2016">2016</option>
				</SELECT>
			<br>
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
		<div>
			<h3>Assign Section to Room</h3>
			<form class="">
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
			</form>
		</div>
	</main>
	<!--<?php include('include/footer.php') ?>-->
