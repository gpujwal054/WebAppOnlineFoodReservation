<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
	<script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
	<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />

	<title>Admin Sign Up</title>
</head>
<body>
	<div>
		<label>Email:</label>
		<input type="email" class="form-control" id="userEmail" placeholder="Enter your email address" required="" /><br>
	</div>
	<div>
		<label>Password:</label>
		<input type="password" class="form-control" id="userPassword" placeholder="Enter your password" required="" /><br>
	</div>
	<div>
		<button type="submit" class="btn btn-primary" id="btnSignUp" onclick="btnSignUp()">Sign Up</button>
	</div>
	<script type="text/javascript" src="admin.js"></script>
</body>
</html>