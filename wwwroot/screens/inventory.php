<?php include('../include/header.php') ?>	
	<main class="main-content">
		<h1>Manage Purchase Orders</h1>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Search Results</li>
			<li class="tab-link" data-tab="tab-2">Manage Order</li>
			<li class="tab-link" data-tab="tab-3">Search Inventory</li>
		</ul>

		<div id="tab-1" class="form-main tab-content current">
			<div class="form-main">
				<h2>Search Purchase Orders</h2>
				<form>
					<div class="grid group">
						<div class="col-1 form-section">
							<label>Search Purchase Orders:</label>
							<div class="search">
  							<span class="fa fa-search"></span>
  								<input placeholder="Search" class="form-input" value="September 23">
							</div>
						</div>
					</div>
					<div class="grid group">
						<div class="col-1 form-section">
							<input class="btn btn-submit" type="submit" value="Create Purchase Order">
							<input class="btn btn-update" type="submit" value="Search">
						</div>
					</div>
				</form>
			</div>
			<h2>Search Results: Open Orders For All</h2>
			<div class="grid group search-group search-results">
				<div class="col-2 form-section">
					<table>
						<thead>
							<th>Order Number</th>
							<th>Order Date</th>
							<th>Vendor</th>
							<th>Contact Phone</th>
							<th>Status</th>
							<th>Edit</th>
						</thead>
						<tr>
							<td>454</td>
							<td>September 23, 2016</td>
							<td>Aseptico, Inc.</td>
							<td>(780)-243-2534</td>
							<td>Open</td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>455</td>
							<td>September 23, 2016</td>
							<td>K Dental</td>
							<td>(587)-732-6633</td>
							<td>Open</td>
							<td><a href="#">Edit</a></td>
						</tr>
						<tr>
							<td>456</td>
							<td>September 23, 2014</td>
							<td>Sinclair Dental</td>
							<td>(974)-878-2257</td>
							<td>Open</td>
							<td><a href="#">Edit</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div id="tab-2" class="form-main tab-content">
			<h2>Manage Purchase Order</h2>
			<form>
			<div class="grid group">
				<div class="col-2 form-section">
						<div class="row-inside-row">
								<label>Select Vendor</label>
								<select class="form-input form-ddl">
									<option>Sinclair Dental</option>
								</select>

								<label>Employee ID</label>
								<select class="form-input form-ddl">
									<option>2341765</option>
								</select>

								<label>Vendor ID:</label>
								<input class="form-input" type="text" value="34321" readonly>


								<label>Name:</label>
								<input class="form-input" type="text" value="Sinclair Dental" readonly>


								<label for="Address">Address</label>
							    <input type="text" id="Address" value="3844-53rd Avenue NW" class="form-input"/>



							    <label for="City">City</label>
							    <input type="text" id="City" value="Edmonton" class="form-input"/>

							    <label for="Province">Province</label> 
							    <input type="text"  id="Province" value="AB" class="form-input"/>							

							    <label for="PostalCode">Postal Code</label>
							    <input type="text" id="PostalCode" value="T6B3N7"  class="form-input"/>


								<label>Phone:</label>
								<input class="form-input" type="text" value="(780) 440-1311" readonly>

								<label>Email:</label>
								<input class="form-input" type="text" value="Edmonton@sinclairdental.com" readonly>
						</div>		
				</div>
				</form>
				<div class="col-2 form-section">
					<label>Order List</label>
						<table>
							<thead>
								<tr>
									<th>Inventory ID</th>
									<th>Name</th>
									<th>Desc</th>
									<th>Qty</th>
									<th>Price</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>HAS-100-60</td>
									<td>Face Mask</td>
									<td>3 Layer, Tie Type, 50/Pk</td>
									<td><input class="form-input" type="text" value="40"></td>
									<td>&#36;3.77</td>
									<td><input class="btn btn-submit" type="submit" value="Remove"></td>
								</tr>
								<tr>
									<td>HAS-100-67</td>
									<td>Gloves Vinyl Powder Free</td>
									<td>Size: XS,S,M,L,XL, 100/Pk</td>
									<td><input class="form-input" type="text" value="20"></td>
									<td>&#36;5.36</td>
									<td><input class="btn btn-submit" type="submit" value="Remove"></td>
								</tr>
								<tr>
									<td>HAS-100-89</td>
									<td>Saliva Ejector Transparent</td>
									<td>100/Pk</td>
									<td><input class="form-input" type="text" value="30"></td>
									<td>&#36;3.56</td>
									<td><input class="btn btn-submit" type="submit" value="Remove"></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><input class="btn btn-submit" type="submit" value="Add"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
					<div class="grid group">
						<div class="col-4 form-section">
							<input class="btn btn-submit" type="submit" value="Submit">
							<input class="btn btn-danger" type="submit" value="Cancel">
						</div>
					</div>
			</div>
		</div>
		<div id="tab-3" class="form-main tab-content">
			<div class="form-main">
				<h2>Search Inventory</h2>
				<form>
					<div class="grid group">
						<div class="col-1 form-section">
							<label for="name">Enter Item Name:</label>
							<input class="form-input" type="text" name="name">
						</div>
						<div class="col-1 form-section">
							<label for="category">Select Category:</label>
							<select class="form-input form-ddl">
								<option value="default">Disposables</option>
							</select>
						</div>
						<div class="col-1 form-section">
							<label for="category">Select Vendor:</label>
							<select class="form-input form-ddl">
								<option value="default">Sinclair Dental</option>
							</select>
						</div>
					</div>
					<div class="grid group">
						<div class="col-1 form-section">
							<input class="btn btn-submit" type="submit" value="Add New Item">
							<input class="btn btn-submit" type="submit" value="Search">
						</div>
					</div>
				</form>
			</div>
			<ul class="tabs2">
				<li class="tab-link" data-tab="tab2-4">Search Results</li>
				<li class="tab-link" data-tab="tab2-5">Add/Update Inventory</li>
				<li class="tab-link" data-tab="tab2-6">Add Item</li>
			</ul>
			<div id="tab2-4" class="form-main tab2-content">
				<h2>Search Results: Disposables (Sinclair Dental)</h2>
				<div class="grid group">
					<div class="col-2 form-section">
						<table>
							<thead>
								<tr>
									<th>Inventory ID</th>
									<th>Name</th>
									<th>Description</th>
									<th>Vendor</th>
									<th>Quantity</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>HAS-100-60</td>
									<td>Face Mask</td>
									<td>3 Layer, Tie Type, 50/Pk</td>
									<td>Sinclair Dental</td>
									<td>50</td>
									<td>&#36;3.77</td>
									<td><input class="checkbox checkbox-layout" type="checkbox"><td>
									<td><input class="btn btn-submit" type="submit" value="Edit"></td>
								</tr>
								<tr>
									<td>HAS-100-67</td>
									<td>Gloves Vinyl Powder Free</td>
									<td>Size: XS,S,M,L,XL, 100/Pk</td>
									<td>Sinclair Dental</td>
									<td>30</td>
									<td>&#36;5.36</td>
									<td><input class="checkbox checkbox-layout" type="checkbox"><td>
									<td><input class="btn btn-submit" type="submit" value="Edit"></td>
								</tr>
								<tr>
									<td>HAS-100-89</td>
									<td>Saliva Ejector Transparent</td>
									<td>100/Pk</td>
									<td>Sinclair Dental</td>
									<td>67</td>
									<td>&#36;3.56</td>
									<td><input class="checkbox checkbox-layout" type="checkbox"><td>
									<td><input class="btn btn-submit" type="submit" value="Edit"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="grid group">
					<div class="col-1 form-section">
						<input class="btn btn-submit" type="submit" value="Back">
						<input class="btn btn-submit" type="submit" value="Add to Open Purchase Order">
					</div>
				</div>
			</div>
			<div id="tab2-5" class="form-main tab2-content">
				<h2>Add/Update Item Information</h2>
				<form>
					<div class="grid group">
						<div class="col-1 form-section">
							<label>Inventory ID:</label>
							<input class="form-input" type="text" value="HAS-100-89" readonly>
						</div>
						<div class="col-1 form-section">
							<label>Name:</label>
							<input class="form-input" value="Saliva Ejector Transparent" type="text">
						</div>
						<div class="col-1 form-section">
							<label for="category">Vendor:</label>
							<select class="form-input">
							  <option value="default">Sinclair Dental</option>
							</select>
						</div>
					</div>
					<div class="grid group">
						<div class="col-4 form-section">
							<label>Description:</label>
							<textarea class="form-input form-textarea" value="100/Pk"></textarea>
						</div>
					</div>
					<div class="grid group">
						<div class="col-2 form-section">
							<label>Quantity:</label>
							<input class="form-input" type="text" value="67">
						</div>
						<div class="col-2 form-section">
							<label>Price:</label>
							<input class="form-input" type="text" value="&#36;3.56">
						</div>	
					</div>
					<div class="grid group">
						<div class="col-1 form-section">
							<input class="btn btn-submit" type="submit" value="Add Inventory">
							<input class="btn btn-update" type="submit" value="Update">
							<input class="btn btn-danger" type="submit" value="Cancel">
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
<?php include('../include/footer.php') ?>