<!DOCTYPE html>
<html>
<head>
	<title>output</title>
	<style>
	 tr:nth-child(even){
                background-color: #dddddd;
            }
	</style>
</head>
<body>
<form method="POST" action="add">
 {{csrf_field()}}

<table>

<tr>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Last Name</th>
	<th>Course</th>
	<th>Student Number</th>
	<th>Contact Number</th>
</tr>				
<form method="POST" action="add">
 {{csrf_field()}}
					@foreach($estudyantes as $st)
					<tr>
                    <td>{{$st->fname}}</td>
                    <td>{{$st->mname}}</td>
                    <td>{{$st->lname}}</td>
                    <td>{{$st->course}}</td>
                    <td>{{$st->student_no}}</td>
                    <td>{{$st->contact_no}}</td>
                    <td><a href="edit/{{$st->id}}" name="edit" value="edit" >EDIT 
</a></td>
<td><a href="delete/{{$st->id}}" name="delete" value="edit" >DELETE 
</a></td>
                    </tr>
                   
 @endforeach
 </table>
<input type="submit" name="add" value="add" > 
 
</form>
</body>
</html>