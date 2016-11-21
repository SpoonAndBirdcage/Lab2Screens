<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nait DS - Room</title>
</head>
<body>
	<?php include('../include/header.php') ?>
	<main class="main-content">
		<div>
			<h3>Create a Room</h3>
			<form class="">
				<label for="RoomID" >Room ID:</label>
				<input class="form-input" type="text" name="RoomID" readonly value="QR-201">
			<br>
				<label for="RoomNum">Room Number:</label>
				<input class="form-input" type="text" name="CourseName" value="201">
			<br>
				<label for="Location">Location:</label>
				<input class="form-input" type="text" name="Location" value="Main Dental Building">
			<br>
				<label for="RoomDescription">Room Description:</label><br>
				<textarea id="RoomDescription"
						  name="RoomDescription"
						  class="form-input form-textarea"></textarea>
			<br>
				<label for="Capacity">Capacity:</label>
				<SELECT class="form-input form-ddl" name="Capacity">
					<option value="20">20</option>
				</SELECT>
			<br>
				<label for="RoomType">Type:</label>
				<SELECT class="form-input form-ddl" name="RoomType">
					<option value="Lab">Lab</option>
				</SELECT>
			<br>
				<input class="btn btn-submit" type="submit" value="Create Room">
			</form>
		</div>
	</main>
	<?php include('../include/footer.php') ?>
</body>
</html>