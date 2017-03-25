<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="add" method="POST">
{{csrf_field()}}

	FIRST NAME<input type"text" name="first_name" placeholder="First_name...">
	LAST NAME<input tpe"text name="last_name" placeholder="Last_name....">
	AGE<input type="text" name="age" placeholder="age...">
		<input type="submit" name="add" value="add">
</form>


</body>
</html>