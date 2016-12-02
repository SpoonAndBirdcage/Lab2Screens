
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
				<div class="grid grid grid-spacing">
					<div class="col-2 form-section">
						<div class="calander">
						  	<header>
							    <button>«</button>
							    <h3 class="cal-head">July 2016</h3>
							    <button>»</button>
						  	</header>
							<table>
							  <tr>
							    <td>S</td>
							    <td>M</td>
							    <td>T</td>
							    <td>W</td>
							    <td>Th</td>
							    <td>F</td>
							    <td>S</td>
							  </tr>
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
							</table>
						</div>
					</div>
					<div class="col-2 form-section">
					</div>
				</div>
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