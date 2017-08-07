<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
</head>
<body>
	<h1 align="center">Confirmation</h1>
	<h2 align="center">Are you sure, you want to remove this item ?</h2>
	<form method="post">
		<table align="center" width="100%" bgcolor="Yellow">
			<tr align="center">
				<th>{name}</th>
				<th>Details</th>
				<th>Price</th>
				<th>Shop</th>
				<th></th>
				<th></th>
			</tr>
			<tr bgcolor="lightblue" align="center">
				
				<td><label>{item}</label></td>
				<td><label>{details}</label></td>
				<td><label>{price}</label></td>
				<td><label>{shop}</label> <input type="hidden" name="id" value="{id}"></td>
				<td><input type="submit" name="confirm" value="Remove"></td>
				<td><a href="http://localhost/ATP3/admin/remove{type}">Cancle</a></td>
			</tr>
			
			</tr>
		</table>
		
	</form>
</body>
</html>