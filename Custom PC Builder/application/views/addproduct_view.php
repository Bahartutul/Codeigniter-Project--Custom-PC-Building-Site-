<!DOCTYPE html>
<html>
<head>
	<title>ADD {name}</title>
</head>
<body bgcolor="lightgrey">

	<h2  align="center">ADD {name}</h2>
	<form  method="post">
		<table align="center" >
			<tr >
				<td><label>{name}</label></td>
				<td><input type="text" name="item" value="<?php echo set_value('item')?>"></td>
			
			</tr>
			<tr>
			<td></td>
			<td><label style="color:red"><?php echo form_error('item');?></label></td>
			</tr>
                  
			<tr>
				<td><label>Details</label></td>
				
				<td><textarea name="details" rows="5" cols="22" ><?php echo set_value('details')?></textarea></td>
			</tr>
             <tr>
			<td></td>
			<td><label style="color:red"><?php echo form_error('details');?></label></td>
			</tr>
			<tr>
				<td><label>Price</label></td>
				<td><input type="text" name="price" value="<?php echo set_value('price')?>"></td>
			</tr>
            <tr>
			<td></td>
			<td><label style="color:red"><?php echo form_error('price');?></label></td>
			</tr>
			<tr>
				<td><label>Shop</label></td>
				<td><input type="text" name="shop" value="<?php echo set_value('shop')?>"></td>
			</tr>
              <tr>
			<td></td>
			<td><label style="color:red"><?php echo form_error('shop');?></label></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="addButton" value="ADD">
					&nbsp &nbsp
					<a href="http://localhost/ATP3/admin">Back</a>
				</td>
			</tr>
			
		</table>
	</form>

	<table align="center" bgcolor="yellow" width="100%">

		<tr align="center">
			<th>{name}</th>
			<th>Details</th>
			<th>Price</th>
			<th>Where</th>
			
		</tr>

		{product}
		<form method="post">
		<tr align="center" bgcolor="lightblue">
			<td>
				<label>{item}</label>
				<input type="hidden" name="cpu" value="{item}">


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
		</tr>
		</form>
		{/product}	
	</table>
</body>
</html>