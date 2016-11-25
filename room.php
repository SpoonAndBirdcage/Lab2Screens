<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Classroom Management</h1>
	<div class="form-main">
		<form>
		<h2>Add a Classroom</h2>
			<div class="grid group">
<!--				<div class="col-2 form-section">
					<label for="RoomID" >Room ID:</label>
					<input class="form-input" type="text" name="RoomID" readonly value="QR-201">
				</div>
-->
				<div class="col-4 form-section">
					<label for="search">Search:</label>
					<input type="text" class="form-input" name="search">
					<hr>
				</div>
			</div>
			<div class="grid group">
				<div class="col-2 form-section">
					<div class="row-inside-row">
						<label for="RoomNum">Room Number:</label>
						<input class="form-input" type="text" name="CourseName" value="201">

						<label for="Location">Location:</label>
						<input class="form-input" type="text" name="Location" value="Main Dental Building">

						<label for="Capacity">Capacity:</label>
						<SELECT class="form-input form-ddl" name="Capacity">
							<option value="20">20</option>
						</SELECT>

						<label for="RoomType">Type:</label>
						<SELECT class="form-input form-ddl" name="RoomType">
							<option value="Lab">Lab</option>
						</SELECT>
					</div>
				</div>
				<div class="col-2 form-section">
					<label for="RoomDescription">Room Description:</label>
					<textarea id="RoomDescription"
							  name="RoomDescription"
							  class="form-input form-textarea"
							  style="height: 300px;"></textarea>
				</div>
			</div>
			<div class="grid group">
				<div class="col-1 form-section">
					<input class="btn btn-submit" type="submit" value="Create Room">
					<input class="btn btn-submit" type="submit" value="Update">
					<input class="btn btn-submit" type="submit" value="Delete">
				</div>
			</div>
		</form>
	</div>
</main>
<?php include('../include/footer.php') ?>
