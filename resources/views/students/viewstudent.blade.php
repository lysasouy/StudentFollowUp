<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Class</td>
<td>Description</td>
<td>Picture</td>
<td>ActiveFollowup</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->last_name }}</td>
<td>{{ $user->city_name }}</td>
<td>{{ $user->email }}</td>
</tr>
@endforeach
</table>
</body>
</html>