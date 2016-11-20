<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nait DS - Room</title>
</head>
<body>
	<!--<?php include('include/header.php') ?>-->
	<main>
		<div>
			<h3>Create a Room</h3>
			<form class="">
				<label for="RoomID" >Room ID:</label>
				<input type="text" name="RoomID" readonly value="QR-201">
			<br>
				<label for="RoomNum">Room Number:</label>
				<input type="text" name="CourseName" value="201">
			<br>
				<label for="Location">Location:</label>
				<input type="text" name="Location" value="Main Dental Building">
			<br>
				<label for="RoomDescription">Room Description:</label><br>
				<textarea></textarea>
			<br>
				<label for="Capacity">Capacity:</label>
				<SELECT name="Capacity">
					<option value="20">20</option>
				</SELECT>
			<br>
				<label for="RoomType">Type:</label>
				<SELECT name="RoomType">
					<option value="Lab">Lab</option>
				</SELECT>
			<br>
				<input type="submit" value="Create Room">
			</form>
		</div>
	</main>
	<!--<?php include('include/footer.php') ?>-->
</body>
</html>