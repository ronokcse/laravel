<!DOCTYPE html>
<html>
<head>
	<title>Students View</title>
</head>

<body class="">
	<form action="member_add" method="POST">
		@csrf
		<input type="text" name="first_name" placeholder="First Name"><br>
		<input type="text" name="last_name" placeholder="last Name"><br>
		<input type="email" name="email" placeholder="email"><br>
		<button type="submit">submit</button>
	</form>
</body>
</html>