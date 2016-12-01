
<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Appointment Management</h1>
	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Create</li>
		<li class="tab-link" data-tab="tab-2">Appointment Inventory</li>
	</ul>	
	<section id="tab-1" class="form-main tab-content current">
		<form>
			<h2>Book Appointment</h2>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Patient ID</label>
						<input type="text" class="form-input" name="pid">
					</div>
					<div class="col-2 form-section">
						<label>Patient Name</label>
						<input type="text" class="form-input" name="pname">
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Appointment ID</label>
						<input type="text" class="form-input" name="pid">
					</div>
					<div class="col-2 form-section">
						<label>Procedure ID</label>
						<input type="text" class="form-input" name="pname">
					</div>
					<div class="col-2 form-section">
						<label>Treatment ID</label>
						<input type="text" class="form-input" name="pname">
					</div>
					<div class="col-2 form-section">
						<label>Section ID</label>
						<input type="text" class="form-input" name="pname">
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Book Date</label>
						<select name="elementName" class="form-input form-ddl">
							<option value="20">20</option>      
						</select>
					</div>
					<div class="col-2 form-section">
						<label>Month</label>
						<select name="elementName" class="form-input form-ddl">
							<option value="01">April</option>	      
						</select>  
					</div>
					<div class="col-2 form-section">
						<label>Year</label>
						<select name="elementName" class="form-input form-ddl">S	      
							<option value="2016">2016</option>		      	      		      
						</select>				     
					</div>
					<div class="col-2 form-section">
						<label>Book Time</label>
						<select name="elementName" class="form-input form-ddl">
							<option value="7:00 AM">7:00 AM</option>
						</select>
					</div>
				</div>
				<div class="grid group btn-group">
					<div class="col-4 form-section">
						<button type="submit" class="btn btn-submit">Create Appointment</button>
						<button type="submit" class="btn btn-update">Update</button>
						<button type="submit" class="btn btn-danger">Delete</button>
					</div>
				</div>
			</div>
		</form>
	</section>

	<section id="tab-2" class="form-main tab-content">
		<form>
			<h2>Search Appointment</h2>
			<div class="grid group">
				<div class="col-1 form-section">
					<label>Search ID:</label>
					<input type="text" class="form-input" name="fname">
				</div>
			</div>
			<div class="grid group">
				<div class="col-2 form-section">
					<button type="submit" class="btn btn-submit">Search</button>
				</div>
			</div>
		</form>
	</section>
</main>
<?php include('../include/footer.php') ?>