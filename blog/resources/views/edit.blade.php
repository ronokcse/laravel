<h1>Update Data</h1>
	<form action="/update" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{ $data['id'] }}">
		<input type="text" name="first_name" value="{{ $data['first_name'] }}" ><br>
		<input type="text" name="last_name"  value="{{ $data['last_name'] }}"><br>
		<input type="email" name="email" value="{{ $data['email'] }}" ><br>
		<button type="submit">submit</button>
	</form>