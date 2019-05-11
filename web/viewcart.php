<html>
	<head>
	</head>

	<body>
		
		<?php
			echo "Shopping cart: <br> <form action='viewcart.php' method='post'>'";
			echo $_POST["test"];
			if(isset($_POST["superdeathray"])){
				echo "<p> Super Death Ray -- $1,000,000 
					<br> <input type='checkbox' name='superdeathray' ischeck=true> </p>";
			}
			
			if(isset($_POST["superdeathrobot"])){
				echo "<p> Super Death Robot -- $250,000 
					<br> <input type='checkbox' name='superdeathrobot' ischecked=true> </p> ";
			}
			echo "<input type='submit'></form>"
		?>

	</body>
</html>