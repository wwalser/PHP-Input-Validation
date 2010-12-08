<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="all" href="static/style.css">
		<script charset="utf-8" src="static/jquery-1.4.4.min.js"></script>
		<script charset="utf-8" src="static/validation.js"></script>
	</head>
	<body>
		<h1>MacGuffin App *beta</h1>
		<p>Register for an account (doesn't actually save any data).</p>
		<div id="messageBox" class="<?php if ($aErrors['valid']) {echo 'successMessage';} else if (!empty($aErrors)) {echo 'validationFailure';}?>" >
			<?php
			if (!empty($aErrors)) {
				echo '<p>' . $aErrors['global'] . '</p>';
				foreach ($aErrors['details'] as $sError) {
					echo $sError;
				}
			}
			?>
		</div>
		<?php 
			if (empty($aErrors) || !$aErrors['valid']) {
		?>
		<form method="post" id="" action="">
			<label for="email" name="email">Email:</label>
			<input type="text" name="email" input="email" /><br />
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" /><br />
			<label for="password" name="password">Password:</label>
			<input type="password" name="password" input="password" /><br />
			<input class="submit" type="submit" name="submit" input="submit" value="Create My Account" />
		</form>
		<?php } ?>
	</body>
</html>
