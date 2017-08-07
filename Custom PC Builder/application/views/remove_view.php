<!DOCTYPE html>
<html>
<head>
	<title>Remove {name} </title>
</head>
<body>
	<table align="right">
		<tr align="right">
			<td>
				<a href="http://localhost/ATP3/admin">Back</a>
			</td>
		</tr>
	</table>
	<br>
	<h1 align="center">Welcome</h1>
	<h2 align="center">Remove Your {name}</h2>

	
		<table align="center" bgcolor="yellow" width="100%">

		<tr align="center">
			<th>{name}</th>
			<th>Details</th>
			<th>Price</th>
			<th>Where</th>
			<th></th>
		</tr>

		{product}
		<form method="post">
		<tr align="center" bgcolor="lightblue">
							
			<td>
				<label>{item}</label>
				<input type="hidden" name="item" value="{item}">
				<input type="hidden" name="id" value="{id}">

			</td>

			<td>
				<label>{details}</label>
				<input type="hidden" name="details" value="{details}">
				
			</td>

			<td>
				<label>{price}</label>
				<input type="hidden" name="price" value="{price}">
			</td>

			<td>
				<label>{shop}</label>
				<input type="hidden" name="shop" value="{shop}">
			</td>

			<td><input type="submit" name="btnRemove" value="Remove"></td>
		</tr>
		</form>
		{/product}	
	</table>
</form>
</body>
</html>