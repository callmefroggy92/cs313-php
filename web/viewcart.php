<html>
	<head>
	</head>

	<body>
		
		<?php
			echo "Shopping cart: <br>";
			if(isset($_POST["superdeathray"]))
				echo "Super Death Ray -- $1,000,000";
			if(isset($_POST["superdeathrobot"]))
				echo "Super Death Robot -- $250,000";
		?>

	</body>
</html>