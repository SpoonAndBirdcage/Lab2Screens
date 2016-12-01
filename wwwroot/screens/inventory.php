<?php include('../include/header.php') ?>
	<main class="main-content">
		<h1>Inventory Management</h1>
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
							<option value="default">All</option>
						</select>
					</div>
					<div class="col-1 form-section">
						<label for="category">Select Vendor:</label>
						<select class="form-input form-ddl">
							<option value="default">All</option>
						</select>
					</div>
				</div>
				<div class="grid group">
					<div class="col-1 form-section">
						<input class="btn btn-submit" type="submit" value="Search">
					</div>
				</div>
			</form>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Search Results</li>
			<li class="tab-link" data-tab="tab-2">Edit Item</li>
			<li class="tab-link" data-tab="tab-3">Add Item</li>
		</ul>
		<div id="tab-1" class="form-main tab-content current">
			<h2>Search Results: Category</h2>
			<div class="grid group">
				<div class="col-2 form-section">
					<table>
						<thead>
							<tr>
								<th>Inventory ID</th>
								<th>Name</th>
								<th>Description</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Select</th>
								<th>Edit</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>HAS-100-60</td>
								<td>Face Mask</td>
								<td>3 Layer, Tie Type, 50/Pk</td>
								<td>50</td>
								<td>&#36;3.77</td>
								<td><input type="checkbox"></td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td>HAS-100-67</td>
								<td>Gloves Vinyl Powder Free</td>
								<td>Size: XS,S,M,L,XL, 100/Pk</td>
								<td>30</td>
								<td>&#36;5.36</td>
								<td><input type="checkbox"></td>
								<td><a href="#">Edit</a></td>
							</tr>
							<tr>
								<td>HAS-100-89</td>
								<td>Saliva Ejector Transparent</td>
								<td>100/Pk</td>
								<td>67</td>
								<td>&#36;12.36</td>
								<td><input type="checkbox"></td>
								<td><a href="#">Edit</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="grid group">
				<div class="col-1 form-section">
					<input class="btn btn-submit" type="submit" value="Add to Current Purchase Order">
					<input class="btn btn-danger" type="submit" value="Clear">
				</div>
			</div>
		</div>
		<div id="tab-2" class="form-main tab-content">
			<h2>Edit Item Information</h2>
			<form>
				<div class="grid group">
					<div class="col-1 form-section">
						<label>Inventory ID:</label>
						<input class="form-input" type="text" value="HAS-100-89" readonly>
					</div>
					<div class="col-1 form-section">
						<label>Name:</label>
						<input class="form-input" type="text">
					</div>
					<div class="col-1 form-section">
						<label for="category">Vendor:</label>
						<select class="form-input form-ddl">
						  <option value="default">Select Vendor</option>
						</select>
					</div>
				</div>
				<div class="grid group">
					<div class="col-4 form-section">
						<label>Description:</label>
						<textarea class="form-input form-textarea"></textarea>
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Quantity:</label>
						<input class="form-input" type="text">
					</div>
					<div class="col-2 form-section">
						<label>Price:</label>
						<input class="form-input" type="text">
					</div>
				</div>
				<div class="grid group">
					<div class="col-1 form-section">
						<input class="btn btn-submit" type="submit" value="Update">
						<input class="btn btn-danger" type="submit" value="Cancel">
					</div>
				</div>
			</form>
		</div>
		<div id="tab-3" class="form-main tab-content">
			<h2>Add New Inventory Item</h2>
			<form>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Name:</label>
						<input class="form-input" type="text">
					</div>
					<div class="col-2 form-section">
						<label for="category">Vendor:</label>
						<select class="form-input form-ddl">
						  <option value="default">Select Vendor</option>
						</select>
					</div>
				</div>
				<div class="grid group">
					<div class="col-1 form-section">
						<label>Description:</label>
						<textarea class="form-input form-textarea"></textarea>
					</div>
				</div>
				<div class="grid group">
					<div class="col-2 form-section">
						<label>Quantity:</label>
						<input class="form-input" type="text">
					</div>
					<div class="col-2 form-section">
						<label>Price:</label>
						<input class="form-input" type="text">
					</div>
				</div>
				<div class="grid group">
					<div class="col-1 form-section">
						<input class="btn btn-submit" type="submit" value="Add">
						<input class="btn btn-danger" type="submit" value="Cancel">
					</div>
				</div>
			</form>
		</div>
	</main>
<?php include('../include/footer.php') ?>
