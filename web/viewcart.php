<html>
	<head>
	
	</head>

	<body>
		<?php
			echo "Shopping cart: <br> <form action='viewcart.php' method='post'>";
			echo $_POST["test"];
			if(isset($_POST["superdeathray"])){
				echo "<p> Super Death Ray -- $1,000,000 
					<br> Item in cart: <input type='checkbox' name='superdeathray' value='Super Death Ray' checked> </p>";
			} if(isset($_POST["superdeathrobot"])){
				echo "<p> Super Death Robot -- $250,000 
					<br> Item in cart: <input type='checkbox' name='superdeathrobot' value='Super Death Robot' checked> </p> ";
			} if(isset($_POST["evilchair"])){
				echo "<p> Super Death Robot -- $5,000 
					<br> Item in cart: <input type='checkbox' name='superdeathrobot' value='Super Death Robot' checked> </p> ";
			} if(isset($_POST["spikepit"])){
				echo "<p> Super Death Robot -- $75,000 
					<br> Item in cart: <input type='checkbox' name='superdeathrobot' value='Super Death Robot' checked> </p> ";
			} if(isset($_POST["jellyfishtank"])){
				echo "<p> Super Death Robot -- $50,000 
					<br> Item in cart: <input type='checkbox' name='superdeathrobot' value='Super Death Robot' checked> </p> ";
			} if(isset($_POST["selfdestructbutton"])){
				echo "<p> Super Death Robot -- $1,000 
					<br> Item in cart: <input type='checkbox' name='superdeathrobot' value='Super Death Robot' checked> </p> ";
			}
			echo "<input type='submit' value='Update Cart' formaction='viewcart.php'> <input type='submit' value='Proceed to Checkout' formaction='checkout.php'></form>"
		?>
	</body>
</html>