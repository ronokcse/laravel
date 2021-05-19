<h1>List Members</h1>

<table border="1">
	<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
	</tr>
	@foreach ($members as $member)
	<tr>
		<td>{{ $member['first_name'] }}</td>
		<td>{{ $member['last_name'] }}</td>
		<td>{{ $member['email'] }}</td>
	</tr>
	@endforeach
</table>