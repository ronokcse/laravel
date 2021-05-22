<h1>List Members</h1>

<table border="1">
	<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Operation</td>
	</tr>
	@foreach ($members as $member)
	<tr>
		<td>{{ $member->first_name }}</td>
		<td>{{ $member->last_name}}</td>
		<td>{{ $member->email }}</td>
		<td>
			<a href={{ "delete/".$member->id }}>Delete</a>
			<a href={{ "edit/".$member->id }}>Edit</a>
		</td>
	</tr>
	@endforeach
</table>
