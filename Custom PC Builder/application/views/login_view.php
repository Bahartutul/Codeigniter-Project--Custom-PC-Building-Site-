<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<p align="center"><a href="http://localhost/ATP3/" align="center">Go to Home</a></p>
 <h1 align="center">Welcome to Admin Panel</h1>
 
	<table align="center">
		<form method="post">
			<tr>
				<td><label>User Name:</label></td>
				<td><input type="text" name="username" placeholder="Username" value="<?php echo set_value('username');?>"></td>
				
			</tr>
			<tr>
			<td></td>
			<td><label style="color:red"><?php echo form_error('username');?><label></td>
			</tr>
			<tr>
				<td><label>Password:</label></td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
			<tr>
			<td></td>
			<td><label style="color:red"><?php echo form_error('password');?><label></td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="loginButton" value="Login">
					&nbsp &nbsp
					<a href="http://localhost/ATP3/">Back</a>
				</td>

			</tr>
		</form>
		
	</table>
</body>
</html>