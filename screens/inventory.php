<!DOCTYPE html>
<html>
<head>
	<title>Manage Inventory</title>
	<!-- <link rel="stylesheet" href="../styles/reset.css">
	<link rel="stylesheet" href="../styles/main.css"> -->
</head>
<body>
	<!--<?php include('include/header.php') ?>-->
	<main>
		<h1>Manage Inventory</h1>
		<section>
			<h3>Search Inventory</h3>
			<form class="">
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

				<label for="category">Search by Vendor:</label>
				<select>
				  <option value="default">Select Vendor</option>
				</select>
				<input type="submit" value="Search">
				<br/>

				<input type="submit" value="Add New Item">
			</form>
		<section>
		<section>
			<h3>Search Results: Category</h3>
			<table>
				<tr>
					<th>Inventory ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
				<tr>
					<td>HAS-100-60</td>
					<td>Face Mask</td>
					<td>3 Layer, Tie Type, 50/Pk</td>
					<td>50</td>
					<td>&#36;3.77</td>
					<td><input type="checkbox"><td>
					<td><input type="submit" value="Edit"></td>
				</tr>
				<tr>
					<td>HAS-100-67</td>
					<td>Gloves Vinyl Powder Free</td>
					<td>Size: XS,S,M,L,XL, 100/Pk</td>
					<td>30</td>
					<td>&#36;5.36</td>
					<td><input type="checkbox"><td>
					<td><input type="submit" value="Edit"></td>
				</tr>
				<tr>
					<td>HAS-100-89</td>
					<td>Saliva Ejector Transparent</td>
					<td>100/Pk</td>
					<td>67</td>
					<td>&#36;3.56</td>
					<td><input type="checkbox"><td>
					<td><input type="submit" value="Edit"></td>
				</tr>
			</table>
			<input type="submit" value="Clear">
			<input type="submit" value="Add to Current Purchase Order">
		</section>
		<section>
			<h3>Edit Item Information</h3>
			<form>
				<label>Inventory ID: HAS-100-89</label>
				<br/>

				<label>Name:</label>
				<input type="text">
				<br/>

				<label>Description:</label>
				<input type="text">
				<br/>

				<label>Quantity:</label>
				<input type="text">
				<br/>

				<label>Price:</label>
				<input type="text">
				<br/>

				<label for="category">Vendor:</label>
				<select>
				  <option value="default">Select Vendor</option>
				</select>
				<br/>
				
				<input type="submit" value="Cancel">
				<input type="submit" value="Update">
			</form>
		</section>
		<section>
			<h3>Add New Inventory Item</h3>
			<form>
				<label>Name:</label>
				<input type="text">
				<br/>

				<label>Description:</label>
				<input type="text">
				<br/>

				<label>Quantity:</label>
				<input type="text">
				<br/>

				<label>Price:</label>
				<input type="text">
				<br/>

				<label for="category">Vendor:</label>
				<select>
				  <option value="default">Select Vendor</option>
				</select>
				<br/>
				
				<input type="submit" value="Cancel">
				<input type="submit" value="Add">
			</form>
		</section>
	</main>
	<!--<?php include('include/footer.php') ?>-->
</body>
</html>