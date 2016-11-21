<!DOCTYPE html>
<html>
<head>
	<title>Purchase Order</title>
</head>
<body>
	<!--<?php include('include/header.php') ?>-->
	<main>
		<h1>Create Purchase Order</h1>

		<label>Vendor</label>
		<select>
			<option>Select a Vendor</option>
		</select>

		<label>Employee ID</label>
		<input type="text">

		<input type="submit" value="Submit">

		<h3>Vendor Name</h3>
		<label>Vendor ID:</label>
		<label></label>

		<label>Name:</label>
		<label></label>

		<label>Address:</label>
		<label></label>

		<label>Phone:</label>
		<label></label>

		<label>Email:</label>
		<label></label>

		<form class="">
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
					<td><input type="text"></td>
					<td>&#36;3.77</td>
					<td><input type="submit" value="Remove"><td>
				</tr>
				<tr>
					<td>HAS-100-67</td>
					<td>Gloves Vinyl Powder Free</td>
					<td>Size: XS,S,M,L,XL, 100/Pk</td>
					<td><input type="text"></td>
					<td>&#36;5.36</td>
					<td><input type="submit" value="Remove"><td>
				</tr>
				<tr>
					<td>HAS-100-89</td>
					<td>Saliva Ejector Transparent</td>
					<td>100/Pk</td>
					<td><input type="text"></td>
					<td>&#36;3.56</td>
					<td><input type="submit" value="Remove"><td>
				</tr>
				<tr>
					<td><input type="submit" value="Add Item"><td>
				</tr>
			</table>
			<label>Subtotal:</label>
			<label></label>

			<label>GST:</label>
			<label></label>

			<label>Total:</label>
			<label></label>

			<input type="submit" value="Submit">
			<input type="submit" value="Cancel">
		</form>
	</main>
	<!--<?php include('include/footer.php') ?>-->
</body>
</html>