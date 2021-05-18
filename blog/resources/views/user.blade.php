<h1>User login</h1>
<form action="users" method="POST">
	@csrf
	<input type="text" name="username" placeholder="Enter username"><br>
	<span  style="color: red;">@error('username'){{ $message }}@enderror</span><br>
	<input type="text" name="email" placeholder="Enter email"><br>
	<span  style="color: red;">@error('email'){{ $message }}@enderror</span>
	<button type="submit">Submit</button>
</form>