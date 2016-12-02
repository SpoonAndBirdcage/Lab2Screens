<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Classroom Management</h1>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Assign Course Section to Room</li>
			<li class="tab-link" data-tab="tab-2">Add a Classroom</li>
		</ul>
	<section id="tab-2" class="form-main tab-content">
		<form>
		<h2>Add a Classroom</h2>
			<div class="grid group">
				<div class="col-4 form-section">
					<div class="search">
  						<span class="fa fa-search"></span>
  						<input value="Dental Building" class="form-input">
					</div>
				</div>
			</div>
			<div class="grid group search-group search-results">
				<div class="col-4 form-section">
					<label>Search Results</label>
					<table>
						<thead>
							<tr>
								<th>Room ID</th>
								<th>Room Number</th>
								<th>Location</th>
								<th>Capacity</th>
								<th>Type</th>
								<th>Description</th>
								<th>Select</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>DB104</td>
								<td>104</td>
								<td>Dental Building</td>
								<td>20</td>
								<td>Computer Lab</td>
								<td>Computer lab with dual displays</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB105</td>
								<td>105</td>
								<td>Dental Building</td>
								<td>25</td>
								<td>Computer Lab(BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB302</td>
								<td>302</td>
								<td>Dental Building</td>
								<td>15</td>
								<td>Surgical Practice Room</td>
								<td>Room for practicing Dental Techniques on Dummmies</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB402</td>
								<td>402</td>
								<td>Dental Building</td>
								<td>50</td>
								<td>Lecture Hall</td>
								<td>Larger room for lectures</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB204</td>
								<td>204</td>
								<td>Dental Building</td>
								<td>25</td>
								<td>Computer Lab(BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB306</td>
								<td>306</td>
								<td>Dental Building</td>
								<td>15</td>
								<td>Surgical Practice Room</td>
								<td>Room for practicing Dental Techniques on Dummmies</td>
								<td><a href="#">Select</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid group">
				<div class="col-2 form-section">
					<div class="row-inside-row">
						<label for="RoomNum">Room Number</label>
						<input class="form-input" type="text" name="CourseName" value="201">

						<label for="Location">Location</label>
						<input class="form-input" type="text" name="Location" value="Dental Building">

						<label for="Capacity">Capacity</label>
						<SELECT class="form-input form-ddl" name="Capacity">
							<option value="20">20</option>
						</SELECT>

						<label for="RoomType">Type</label>
						<SELECT class="form-input form-ddl" name="RoomType">
							<option value="Lab">Computer Lab</option>
						</SELECT>
					</div>
				</div>
				<div class="col-2 form-section">
					<label for="RoomDescription">Room Description</label>
					<textarea id="RoomDescription"
							  name="RoomDescription"
							  class="form-input form-textarea"
							  style="height: 270px;"></textarea>
				</div>
			</div>
			<div class="grid group btn-group">
				<div class="col-1 form-section">
					<input class="btn btn-submit" type="submit" value="Create Room">
					<input class="btn btn-update" type="submit" value="Update">
					<input class="btn btn-danger" type="submit" value="Delete">
				</div>
			</div>
		</form>
	</section>
		<!--Add Class to Room Schedule (ClassRoomScheduleID, ClassRoomID, CourseSectionID, Date)-->
	<section id="tab-3" class="form-main tab-content current">
		<form>
		<h2>Assign Section to Room</h2>
		<div class="grid group">
				<div class="col-4 form-section">
					<div class="search">
  						<span class="fa fa-search"></span>
  						<input value="Computer" class="form-input">
					</div>
				</div>
			</div>
			<div class="grid group search-group search-results">
				<div class="col-4 form-section">
					<label>Search Results</label>
					<table>
						<thead>
							<tr>
								<th>Room ID</th>
								<th>Room Number</th>
								<th>Location</th>
								<th>Capacity</th>
								<th>Type</th>
								<th>Description</th>
								<th>Select</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>DB104</td>
								<td>104</td>
								<td>Dental Building</td>
								<td>20</td>
								<td>Computer Lab</td>
								<td>Computer lab with dual displays</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB105</td>
								<td>105</td>
								<td>Dental Building</td>
								<td>25</td>
								<td>Computer Lab(BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB204</td>
								<td>204</td>
								<td>Dental Building</td>
								<td>20</td>
								<td>Computer Lab</td>
								<td>Computer lab with dual displays</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB113</td>
								<td>113</td>
								<td>Dental Building</td>
								<td>30</td>
								<td>Computer Lab</td>
								<td>Computer lab with dual displays</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB204</td>
								<td>204</td>
								<td>Dental Building</td>
								<td>25</td>
								<td>Computer Lab(BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td><a href="#">Select</a></td>
							</tr>
							<tr>
								<td>DB208</td>
								<td>208</td>
								<td>Dental Building</td>
								<td>30</td>
								<td>Computer Lab(BYOD)</td>
								<td>Bring Your Own Device Computer Lab</td>
								<td><a href="#">Select</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid group">
				<div class="col-1 form-section">
					<div class="row-inside-row">
						<label for="RoomID">Room ID</label>
						<input class="form-input" type="text" name="RoomID" readonly value="DB105">

						<label for="RoomNum">Room Number</label>
						<input class="form-input" type="text" name="RoomNum" readonly value="105">

						<label for="RoomLocation">Location</label>
						<input class="form-input" type="text" name="RoomLocation" readonly value="Main Dental Building">

						<label for="RoomCourseID">Section</label>
						<SELECT class="form-input form-ddl" name="RoomCourseID">
							<option value="1018">1018</option>
						</SELECT>

						<label for="CourseID">Course ID</label>
						<SELECT class="form-input form-ddl" name="CourseID">
							<option value="RootCanal101">Root Canals 101 - 1001</option>
						</SELECT>

						<label for="DayOfWeek">Day Of Week</label>
						<SELECT class="form-input form-ddl" name="DayOfWeek">
							<option value="Mon">Monday</option>
						</SELECT>

						<label for="StartTime">Start Time:</label>
						<SELECT class="form-input form-ddl" name="StartTime">
							<option value="13">1:00pm</option>
						</SELECT>

						<input class="btn btn-submit" type="submit" value="Assign Section">
						<input class="btn btn-update" type="submit" value="Update">
						<input class="btn btn-danger" type="submit" value="Delete">
					</div>
				</div>
				<div class="col-3 form-section">
					<label for="schedule">Room Schedule For: DB105</label>
					<table name="schedule" id="schedule">
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
								<td>Intro to Dentures - 1304</td>
								<td></td>
							</tr>
							<tr>
								<td>11:00am</td>
								<td>Fillings - 1201</td>
								<td></td>
								<td>Fillings - 1201</td>
								<td>Intro to Dentures - 1304</td>
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
								<td>Advance Root Canals - 2046</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
							</tr>
							<tr>
								<td>2:00pm</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Advance Root Canals - 2046</td>
								<td>Cleaning Techniques - 2001</td>
								<td>Cleaning Techniques - 2001</td>
								<td></td>
							</tr>
							<tr>
								<td>3:00pm</td>
								<td>Advance Root Canals - 2046</td>
								<td>Intermidiate Braces - 2259</td>
								<td></td>
								<td>Root Canals - 2046</td>
								<td>Intermidiate Braces - 2259</td>
							</tr>
							<tr>
								<td>4:00pm</td>
								<td>Advance Root Canals - 2046</td>
								<td>Intermidiate Braces - 2259</td>
								<td></td>
								<td>Advance Root Canals - 2046</td>
								<td>Intermidiate Braces - 2259</td>
							</tr>
							<tr>
								<td>5:00pm</td>
								<td></td>
								<td>Intermidiate Braces - 2259</td>
								<td></td>
								<td></td>
								<td>Intermidiate Braces - 2259</td>
							</tr>
							<tr>
								<td>6:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>7:00pm</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
							</tr>
							<tr>
								<td>8:00pm</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
							</tr>
							<tr>
								<td>9:00pm</td>
								<td></td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
								<td>Customer Relations - 2028</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</form>
	</section>
</main>
<?php include('../include/footer.php') ?>
