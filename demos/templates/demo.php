<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="all" href="style.css">
		<script charset="utf-8" src="jquery-1.4.4.min.js"></script>
		<script charset="utf-8" src="validation.js"></script>
	</head>
	<body>
		<h1>MacGuffin App *beta</h1>
		<p>Register for an account (doesn't actually save any data).</p>
		<div id="validationFailure">
		</div>
		<form method="post" id="" action="">
			<label for="email" name="email">Email:</label>
			<input type="text" name="email" input="email" /><br />
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" /><br />
			<label for="password" name="password">Password:</label>
			<input type="text" name="password" input="password" /><br />
			<input type="submit" name="submit" input="submit" value="Create My Account" />
		</form>
	</body>
</html>
