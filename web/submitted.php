<html>
	<head>
	</head>

	<body>
		<p> Hello, <?php echo $_POST["name"]; ?><br>
		Email: <?php echo $_POST["email"]; ?><br>
		Major: <?php echo $_POST["major"]; ?><br>
		Comments: <?php echo $_POST["comments"]; ?><br></p>

		<p> Places visited: 
			<?php 
			if(isset($_POST["africa"])){
				echo "Africa";
				}
			?>
	</body>
</html>