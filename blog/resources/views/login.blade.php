<h1>User login form</h1>
<form action="user" method="POST">
	@csrf
	<input type="text" name="username" placeholder="Enter Username"><br><br>
	<input type="password" name="password" placeholder="Enter Password"><br><br>
	<button type="submit">Login</button>
</form>

