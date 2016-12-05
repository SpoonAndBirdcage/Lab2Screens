
<?php include('../include/header.php') ?>
<main class="main-content">
	<h1>Appointment Management</h1>
	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Book an Appointment</li>
		<li class="tab-link" data-tab="tab-2">Appointment Details</li>
	</ul>	
	<section id="tab-1" class="form-main tab-content current">
		<form>
			<h2>Appointment Schedule - Week Of July 17, 2016</h2>
				<div class="grid grid grid-spacing">
					<div class="col-3 form-section">
					<table name="schedule" id="schedule">
						<thead>
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
						</thead>
						<tbody>
							<tr>
								<td>8:00am</td>
								<td></td>
								<td><a href="#">Peter Parker - Cleaning</a></td>
								<td></td>
								<td><a href="#">Bruce Wayne - Root Canal</a></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>9:00am</td>
								<td></td>
								<td><a href="#">Peter Parker - Cleaning</a></td>
								<td></td>
								<td><a href="#">Bruce Wayne - Root Canal</a></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>10:00am</td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Bruce Wayne - Root Canal</a></td>
								<td><a href="#">Bruce Banner - Filling/Crown</a></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>11:00am</td>
								<td></td>
								<td><a href="#">Steve Rogers - Cleaning</a></td>
								<td></td>
								<td><a href="#">Clark Kent - Braces</a></td>
								<td><a href="#">Bruce Banner - Filling/Crown</a></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>12:00pm</td>
								<td></td>
								<td><a href="#">Steve Rogers - Cleaning</a></td>
								<td></td>
								<td><a href="#">Clark Kent - Braces</a></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>1:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Clark Kent - Braces</a></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>2:00pm</td>
								<td></td>
								<td></td>
								<td><a href="#">Jhonny Blaze - Denture Fitting</a></td>
								<td><a href="#">Clark Kent - Braces</a></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>3:00pm</td>
								<td></td>
								<td><a href="#">Sue Storm - Checkup</a></td>
								<td><a href="#">Jhonny Blaze - Denture Fitting</a></td>
								<td></td>
								<td></td>
								<td><a href="#">Richard Reed - Crown Fitting</a></td>
								<td></td>
							</tr>
							<tr>
								<td>4:00pm</td>
								<td></td>
								<td><a href="#">Sue Storm - Checkup</a></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Richard Reed - Crown Fitting</a></td>
								<td></td>
							</tr>
							<tr>
								<td>5:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>6:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Ben Grimm - Cleaning</a></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>7:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="#">Ben Grimm - Cleaning</a></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>8:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>9:00pm</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
					</div>
					<div class="col-1 form-section">
						<div class="calander">
							<table class="cal">
							  <thead>
							  	<tr>
								    <th>Sun</th>
								    <th>Mon</th>
								    <th>Tue</th>
								    <th>Wed</th>
								    <th>Thr</th>
								    <th>Fri</th>
								    <th>Sat</th>
							    </tr>
							 	</thead>
								<tbody>
								  <tr>
								    <td></td>
								    <td></td>
								    <td>1</td>
								    <td>2</td>
								    <td>3</td>
								    <td>4</td>
								    <td>5</td>
								  </tr>
								  <tr>
								    <td>6</td>
								    <td>7</td>
								    <td>8</td>
								    <td>9</td>
								    <td>10</td>
								    <td>11</td>
								    <td>12</td>
								  </tr>
								  <tr>
								    <td>13</td>
								    <td>14</td>
								    <td>15</td>
								    <td>16</td>
								    <td class="selected">17</td>
								    <td>18</td>
								    <td>19</td>
								  </tr>
								  <tr>
								    <td>20</td>
								    <td>21</td>
								    <td>22</td>
								    <td>23</td>
								    <td>24</td>
								    <td>25</td>
								    <td>26</td>
								  </tr>
								  <tr>
								    <td>27</td>
								    <td>28</td>
								    <td>29</td>
								    <td>30</td>
								    <td>31</td>
								    <td></td>
								    <td></td>
								  </tr>
								</tbody>
							</table>
							<header>
							    <button>«</button>
							    <h3 class="cal-head">July 2016</h3>
							    <button>»</button>
						  	</header>
						</div>
					</div>
				</div>
				<div class="grid group grid-spacing">
					<div class="col-4 form-section">
					<h2>Patient Search</h2>
						<div class="row-inside-row">
							<div class="search">
									<span class="fa fa-search"></span>
									<input placeholder="Search" class="form-input" value="Parker">
							</div>
							<label>Search Results:</label>
							<table>
								<thead>
									<tr>
										<th>Patient ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Phone</th>
										<th>Select</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>P101</td>
										<td>Peter</td>
										<td>Parker</td>
										<td>(780)555-1234</td>
										<td><a href="#">Select</a></td>
									</tr>
									<tr>
										<td>P128</td>
										<td>Sean</td>
										<td>Parker</td>
										<td>(403)555-8034</td>
										<td><a href="#">Select</a></td>
									</tr>
									<tr>
										<td>P204</td>
										<td>Parker</td>
										<td>Posey</td>
										<td>(780)555-9987</td>
										<td><a href="#">Select</a></td>
									</tr>
								</tbody>
							</table>
						</div>	
					</div>
				</div>
				<div class="grid group">
					<div class="col-4 form-section">
						<label>Appointment ID</label>
						<input type="text" class="form-input" name="pid" value="APT10231141" readonly>
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Patient ID</label>
						<input type="text" class="form-input" name="pid" value="P101" readonly>
					</div>
					<div class="col-2 form-section">
						<label>First Name</label>
						<input type="text" class="form-input" name="pname" value="Peter">
					</div>
					<div class="col-2 form-section">
						<label>Last Name</label>
						<input type="text" class="form-input" name="pname" value="Parker">
					</div>
				</div>
				<div class="grid group grid-spacing">
					<div class="col-4 form-section">
						<label>Treatment Plan</label>
						<input type="text" class="form-input" name="TreatmentPlan" value="TP01323">	
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Procedure</label>
						<select class="form-input form-ddl">
							<option value="Cleaning">Cleaning</option>
						</select>
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<label for="BookingDate">Booking Date</label>
						<input type="date" class="form-input" name="BookingDate" id="BookingDate" value="2016-07-16" />
					</div>
					<div class="col-2 form-section">
						<label>Booking Time</label>
						<input type="time" class="form-input" name="BookingTime" id="BookingTime" value="08:00:00" />
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