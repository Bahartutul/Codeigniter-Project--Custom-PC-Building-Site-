<!DOCTYPE html>
<html>
<head>
	<title>Update {name} </title>
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
	<h2 align="center">Update Your {name}</h2>

	
		<table align="center" bgcolor="yellow" width="100%">

		<tr align="center">
			<th>{name}</th>
			<th>Details</th>
			<th>Price</th>
			<th>Where</th>
			<th></th>
		</tr>
		<form method="post">
		<tr align="center" bgcolor="lightblue">
							
			<td>
				
				<input type="text" name="item" value="{item}">
				<input type="hidden" name="id" value="{id}">

			
		<label style="color:red"><?php echo form_error('item');?></label></td>

			<td>
				
				<textarea name="details">{details}</textarea>
				
			
			<label style="color:red"><?php echo form_error('details');?></label></td>

			<td>
				
				<input type="text" name="price" value="{price}">
			
			<label style="color:red"><?php echo form_error('price');?></label></td>

			<td>
				
				<input type="text" name="shop" value="{shop}">
			
			<label style="color:red"><?php echo form_error('shop');?></label></td>

			<td><input type="submit" name="confirm" value="Update"></td>

		</tr>
		</form>
	</table>
</form>
</body>
</html>
			

