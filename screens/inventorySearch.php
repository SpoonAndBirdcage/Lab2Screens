<!DOCTYPE html>
<html>
<head>
	<title>Search Inventory</title>
</head>
<body>
	<!--<?php include('include/header.php') ?>-->
	<main>
		<h1>Search Inventory</h1>
		<section>
			<form class="">
				<label for="name">Search by Name</label>
				<input type="text" name="name">
				<input type="submit" value="Search">

				<label for="category">Search by Category</label>
				<select>
				  <option value="default">Select Category</option>
				  <option value="1">EVERYTHING!!</option>
				</select>
				<input type="submit" value="Search">

				<label for="category">Search by Vendor</label>
				<select>
				  <option value="default">Select Vendor</option>
				</select>
				<input type="submit" value="Search">
			</form>
		<section>
		<h3>Search Results: Category</h3>
		<section>
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
				</tr>
				<tr>
					<td>HAS-100-67</td>
					<td>Gloves Vinyl Powder Free</td>
					<td>Size: XS,S,M,L,XL, 100/Pk</td>
					<td>30</td>
					<td>&#36;5.36</td>
					<td><input type="checkbox"><td>
				</tr>
				<tr>
					<td>HAS-100-89</td>
					<td>Saliva Ejector Transparent</td>
					<td>100/Pk</td>
					<td>67</td>
					<td>&#36;3.56</td>
					<td><input type="checkbox"><td>
				</tr>
			</table>
			<input type="submit" value="Clear">
			<input type="submit" value="Add to Purchase Order">
		</section>
	</main>
	<!--<?php include('include/footer.php') ?>-->
</body>
</html>