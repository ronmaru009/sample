<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>		

	
		<form action="addMore" method="POST">
		{{csrf_field()}}

			<table>
				<tr>
					<th>irstName</th>
					<th>LastName</th>
					<th>Age</th>
				</tr>
				@foreach($logbooks as $item)
				<tr>
					<td>{{$item->first_name}}</td>
					<td>{{$item->last_name}}</td>
					<td>{{$item->age}}</td>
				</tr>
				@endforeach
				<input type="submit" name="add"  value="addMore">
			</table>
		</form>
</body>
</html>