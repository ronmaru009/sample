<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="addMore">
	{{csrf_field()}}
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Age</th>
	</tr>
	@foreach($jaisons as $item)
	<tr>
		<td>{{$item->fname}}</td>
		<td>{{$item->lname}}</td>
		<td>{{$item->age}}</td>

	</tr>
	@endforeach
	
</table>

<input type="submit" name="add" value="ADD MORE">




</form>

</body>
</html>