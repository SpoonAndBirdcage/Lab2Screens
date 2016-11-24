
<?php include('../include/header.php') ?>
<main class="main-content">
	<div>
		<h2>Create a Room</h2>
		<div class="grid group">
			<form>
				<div class="grid group">
	<!--				<div class="col-2 form-section">
						<label for="RoomID" >Room ID:</label>
						<input class="form-input" type="text" name="RoomID" readonly value="QR-201">
					</div>
	-->				
					<div class="col-2 form-section">

						<label for="RoomNum">Room Number:</label>
						<input class="form-input" type="text" name="CourseName" value="201">
	<!--			</div>
				</div>
				<div class="grid group">			
					<div class="col-2 form-section">
		-->				<div class="row-inside-row">
							<label for="Location">Location:</label>
							<input class="form-input" type="text" name="Location" value="Main Dental Building">
						</div>
						<div class="row-inside-row">
							<label for="Capacity">Capacity:</label>
							<SELECT class="form-input form-ddl" name="Capacity">
								<option value="20">20</option>
							</SELECT>
						</div>
						<div class="row-inside-row">
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
								  style="height: 291px;"></textarea>
					</div>
				</div>
				<div class="grid group">
					<div class="col-1 form-section">
						<input class="btn btn-submit" type="submit" value="Create Room">
					</div>
				</div>
			</form>
		</div>
	</div>
</main>
<?php include('../include/footer.php') ?>
