<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="addUser" method="post" enctype="multipart/form-data">
		<table border="1">
		<tr>
			<td>name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>mobile</td>
			<td><input type="text" name="mobile"></td>
		</tr>	
		<tr>
			<td>age</td>
			<td><input type="text" name="age"></td>
		</tr>
		<tr>
			
			<td><input type="submit" value="submit" name="submit"></td>
		</tr>
		<tr>
			<td><input type="file" name="image" value="nhập ảnh"></td>
		</tr>
		</table>

		<tr><td><a href="<?php echo base_url(). 'user/show' ?>">Show List Member</a></td></tr>
	</form>

	
</body>
</html>