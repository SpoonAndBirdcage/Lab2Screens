
<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Appointment Management</h1>
	<ul class="tabs">
<<<<<<< HEAD
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
=======
	<li class="tab-link current" data-tab="tab-1"> Create/Update </li>
	<li class="tab-link" data-tab="tab-2"> Inventory </li>
	</ul>	

<div id="tab-1" class="form-main tab-content current">

<h2>Search Appointment</h2>
	<div class="grid group">
		<div class="col-1 form-section">
			<label>Search ID:</label>
			<input type="text" class="form-input" name="fname">
		</div>
		<div class="col-4 form-section"></div>
	</div>

	<div class="col-2 form-section">
		<button type="submit" class="btn btn-submit">Search</button>
	</div>
	<div class="col-4 form-section"></div>
</div>

<h2>Create/Update Appointment</h2>

<div class="grid group">
	<div class="col-2 form-section">
	<label>Patient ID</label>
	<input type="text" class="form-input" name="pid">
	</div>

	<div class="col-2 form-section">
	<label>Patient Name</label>
	<input type="text" class="form-input" name="pname">
	</div>

	<div class="col-2 form-section"></div>
	<div class="col-2 form-section"></div>
	<div class="col-4 form-section"></div>
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

	<div class="col-4 form-section checkbox"></div>
</div>

<div class="grid group">
	<div class="col-2 form-section">
	<label>Book Date</label>
	<select name="elementName" class="form-input form-ddl">
		<option value="">Day</option>
		<option value="">---</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>		      
	</select>
	</div>

	<div class="col-2 form-section">
	<label>Month</label>
	<select name="elementName" class="form-input form-ddl">
		<option value="">Month</option>
		<option value="">-----</option>
		<option value="01">January</option>
		<option value="02">February</option>
		<option value="03">March</option>
		<option value="04">April</option>
		<option value="05">May</option>
		<option value="06">June</option>		      
		<option value="07">July</option>		      
		<option value="08">August</option>		      
		<option value="09">September</option>		      
		<option value="10">October</option>		      
		<option value="11">November</option>		      
		<option value="12">December</option>		      
	</select>  
	</div>

	<div class="col-2 form-section">
	<label>Year</label>
	<select name="elementName" class="form-input form-ddl">
		<option value="">Year</option>
		<option value="">----</option>		      
		<option value="2016">2016</option>		      
		<option value="2017">2017</option>		      
		<option value="2099">2099</option>		      
		<option value="3456">3456</option>		      		      
	</select>				     
	</div>

	<div class="col-2 form-section">
	<label>Book Time</label>
	<select name="elementName" class="form-input form-ddl">
		<option value="7:00 AM">7:00 AM</option>
		<option value="7:15 AM">7:15 AM</option>
		<option value="7:30 AM">7:30 AM</option>
		<option value="7:45 AM">7:45 AM</option>
	 
		<option value="8:00 AM">8:00 AM</option>
		<option value="8:15 AM">8:15 AM</option>
		<option value="8:30 AM">8:30 AM</option>
		<option value="8:45 AM">8:45 AM</option>
	 
		<option value="9:00 AM">9:00 AM</option>
		<option value="9:15 AM">9:15 AM</option>
		<option value="9:30 AM">9:30 AM</option>
		<option value="9:45 AM">9:45 AM</option>
	 
		<option value="10:00 AM">10:00 AM</option>
		<option value="10:15 AM">10:15 AM</option>
		<option value="10:30 AM">10:30 AM</option>
		<option value="10:45 AM">10:45 AM</option>
	 
		<option value="11:00 AM">11:00 AM</option>
		<option value="11:15 AM">11:15 AM</option>
		<option value="11:30 AM">11:30 AM</option>
		<option value="11:45 AM">11:45 AM</option>
	 
		<option value="12:00 PM">12:00 PM</option>
		<option value="12:15 PM">12:15 PM</option>
		<option value="12:30 PM">12:30 PM</option>
		<option value="12:45 PM">12:45 PM</option>
	 
		<option value="1:00 PM">1:00 PM</option>
		<option value="1:15 PM">1:15 PM</option>
		<option value="1:30 PM">1:30 PM</option>
		<option value="1:45 PM">1:45 PM</option>
	 
		<option value="2:00 PM">2:00 PM</option>
		<option value="2:15 PM">2:15 PM</option>
		<option value="2:30 PM">2:30 PM</option>
		<option value="2:45 PM">2:45 PM</option>
	 
		<option value="3:00 PM">3:00 PM</option>
		<option value="3:15 PM">3:15 PM</option>
		<option value="3:30 PM">3:30 PM</option>
		<option value="3:45 PM">3:45 PM</option>
	 
		<option value="4:00 PM">4:00 PM</option>
		<option value="4:15 PM">4:15 PM</option>
		<option value="4:30 PM">4:30 PM</option>
		<option value="4:45 PM">4:45 PM</option>
	 
		<option value="5:00 PM">5:00 PM</option>
		<option value="5:15 PM">5:15 PM</option>
		<option value="5:30 PM">5:30 PM</option>
		<option value="5:45 PM">5:45 PM</option>
	 
		<option value="6:00 PM">6:00 PM</option>
		<option value="6:15 PM">6:15 PM</option>
		<option value="6:30 PM">6:30 PM</option>
		<option value="6:45 PM">6:45 PM</option>
	 
		<option value="7:00 PM">7:00 PM</option>
		<option value="7:15 PM">7:15 PM</option>
		<option value="7:30 PM">7:30 PM</option>
		<option value="7:45 PM">7:45 PM</option>
	 
		<option value="8:00 PM">8:00 PM</option>
		<option value="8:15 PM">8:15 PM</option>
		<option value="8:30 PM">8:30 PM</option>
		<option value="8:45 PM">8:45 PM</option>
	</select>
	</div>

	<div class="col-4 form-section checkbox"></div>
	</div>

	<div class="col-2 form-section">
		<button type="submit" class="btn btn-submit">Create</button>
		<button type="submit" class="btn btn-submit">Update</button>
	</div>
</div>


<div id="tab-2" class="form-main tab-content current">
	<div class="grid group">
	<h2>ADD</h2>
	</div>

	<div class="grid group">
	<h2>UPDATE</h2>
	</div>

	<div class="grid group">
	<h2>SEARCH</h2>
	</div>

</div>

>>>>>>> 5661522f6d005b0bf67010629439b152a2c5c059
</main>
<?php include('../include/footer.php') ?>