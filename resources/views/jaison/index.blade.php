<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="add">
{{csrf_field()}}

FIRST NAME:<input type="text" name="fname"  placeholder="firstname" >
LAST NAME:<input type="text" name="lname" placeholder="ramos">
AGE:<input type="text" name="age" >

<input type="submit" name="add" value="ADD">
</form>


<
</body>
</html>