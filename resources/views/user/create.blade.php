<!DOCTYPE html>
<html>
<head>
	<title>create user</title>
</head>
<body>
	
	<form action="{{url('users')}}" method="post">
		@csrf
		
		<input type="email" name="email" placeholder="Email"></br>
		<input type="password" name="password" placeholder="password"></br>
		<button type="submit">Submit</button>
		
	</form>

</body>
</html>