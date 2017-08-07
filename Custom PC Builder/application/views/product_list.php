<!DOCTYPE html>
<html>
<head>
	<title>Processor</title>
</head>
<body>
	<table align="right">
		<tr align="right">
			<td>
				<a href="http://localhost/ATP3/">Back</a>
			</td>
			
		</tr>
	</table>
	<br>
	
	<h1 align="center">Welcome</h1>
	<h2 align="center">Choose Your {name}</h2>

	<form method="post" >
		<table align="center" bgcolor="gray">
			<tr>
				<td><input type="text" name="search" placeholder="Insert text for search" value=""></td>
				<td><input type="submit" name="searchbtn" ></td>
			</tr>
		</table>
	</form><br><br>

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


			</td>

			<td>
				<label>{details}</label>
				
			</td>

			<td>
				<label>{price}</label>
				<input type="hidden" name="price" value="{price}"></td>
			</td>

			<td>
				<label>{shop}</label>
				<input type="hidden" name="shop" value="{shop}"></td>
			</td>

			<td><input type="submit" name="btnAdd" value="Add"></td>
			
		</tr>
	
		</form>
		{/product}	
	</table>
</form>
</body>
</html>