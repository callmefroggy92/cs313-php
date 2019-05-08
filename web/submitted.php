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
			if(isset($_POST["antartica"])){
				echo "Antartica";
				}
			if(isset($_POST["australia"])){
				echo "australia";
				}
			if(isset($_POST["asia"])){
				echo "asia";
				}
			if(isset($_POST["europe"])){
				echo "Europe";
				}
			if(isset($_POST["northAmerica"])){
				echo "North America";
				}
			if(isset($_POST["southAmerica"])){
				echo "South America";
				}
			?>
	</body>
</html>