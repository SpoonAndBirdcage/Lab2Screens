<!DOCTYPE html>
<html>
<head>
	<title>Manage Vendors</title>
</head>
<body>
	<main>
		<h1>Manage Vendors</h1>
		<section>
			<h3>Search Vendors</h3>
			<form>
			<label for="name">Search by Vendor ID:</label>
				<input type="text" name="name">
				<input type="submit" value="Search">
				<br/>

				<label for="name">Search by Name:</label>
				<input type="text" name="name">
				<input type="submit" value="Search">
				<br/>

				<label for="category">Search by Category:</label>
				<select>
				  <option value="default">Select Category</option>
				</select>
				<input type="submit" value="Search">
				<br/>
				<input type="submit" value="Add New Vendor">
			</form>
		</section>
		<section>
			<h3>Search Results: Category</h3>
			<table>
				<tr>
					<th>Vendor ID</th>
					<th>Name</th>
					<th>Phone Number</th>
				</tr>
				<tr>
					<td>34321</td>
					<td>Aseptico, Inc.</td>
					<td>(780)-243-2534</td>
					<td><input type="submit" value="Edit"></td>
				</tr>
				<tr>
					<td>34438</td>
					<td>K Dental</td>
					<td>(587)-732-6633</td>
					<td><input type="submit" value="Edit"></td>
				</tr>
				<tr>
					<td>34321</td>
					<td>Sinclair Dental</td>
					<td>(974)-878-2257</td>
					<td><input type="submit" value="Edit"></td>
				</tr>
			</table>
		</section>
		<section>
			<h3>Edit Vendor Information</h3>
			<form>
				<label for="name">Vendor ID: 34321</label>
				<br/>

				<label for="name">Name:</label>
				<input type="text">
				<br/>

				<label for="name">Phone:</label>
				<input type="text">
				<br/>
				
				<label for="name">Email:</label>
				<input type="text">
				<br/>
				
				<label for="name">Address:</label>
				<input type="text">
				<br/>

				<label for="name">Website:</label>
				<input type="text">
				<br/>
				
				<input type="submit" value="Cancel">
				<input type="submit" value="Update">
			</form>
		</section>
		<section>
			<h3>Add New Vendor</h3>
			<form>
				<label for="name">Name:</label>
				<input type="text">
				<br/>

				<label for="name">Phone:</label>
				<input type="text">
				<br/>
				
				<label for="name">Email:</label>
				<input type="text">
				<br/>
				
				<label for="name">Address:</label>
				<input type="text">
				<br/>

				<label for="name">Website:</label>
				<input type="text">
				<br/>
				
				<input type="submit" value="Cancel">
				<input type="submit" value="Add">
			</form>
		</section>
	</main>
</body>
</html>