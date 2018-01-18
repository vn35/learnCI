<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="<?php echo base_url(). 'user/editUser/' . $user->id; ?>" method="post">
		<table border="1">
		<tr>
			<td>name</td>
			<td><input type="text" name="name" value="<?php echo $user->name; ?>"></td>
		</tr>
		<tr>
			<td>mobile</td>
			<td><input type="text" name="mobile" value="<?php echo $user->mobile; ?> "></td>
		</tr>	
		<tr>
			<td>age</td>
			<td><input type="text" name="age" value="<?php echo $user->age; ?> "></td>
		</tr>
		<tr>
			<td><input type="submit" value="submit" name="submit"></td>
		</tr>
		</table>

		<tr><td><a href="<?php echo base_url(). 'user/show' ?>">Show List Member</a></td></tr>
	</form>

	
</body>
</html>