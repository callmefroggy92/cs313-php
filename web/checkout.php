<?php session_start(); ?>
<html>
	<head>
		<script>

		</script>
	</head>

	<body>

		<?php
			foreach ($_POST as $param_name => $param_val) {
 				$_SESSION[$param_name] = $param_val;
			}
		?>
		<form action="confirmation.php" method="post">
			<p> Finish your evil purchase now!  Please fill out the form below: </p>

			<p>
				Name: <input type="text" name="name"> <br><br>
				Street Address: <input type="text" name="address"> <br><br>
				City: <input type="text" name="city"><br><br>
				State: <input type="text" name="state"><br><br>
				Zip Code: <input type="text" name="zip"><br><br>
	
				<input type="submit"> <input type="submit" value="Return to Browse" formaction="browse.php">
			</p>

		</form>

	</body>
</html>