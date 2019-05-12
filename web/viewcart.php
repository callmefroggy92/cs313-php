<html>
	<head>
	
	</head>

	<body>
		<?php
			echo "Shopping cart: <br> <form action='viewcart.php' method='post'>";
			echo $_POST["test"];
			if(isset($_POST["superdeathray"])){
				echo "<p> Super Death Ray -- $150,000 
					<br> Item in cart: <input type='checkbox' name='superdeathray' value='Super Death Ray' checked> </p>";
			} if(isset($_POST["superdeathrobot"])){
				echo "<p> Super Death Robot -- $100,000 
					<br> Item in cart: <input type='checkbox' name='superdeathrobot' value='Super Death Robot' checked> </p> ";
			} if(isset($_POST["evilchair"])){
				echo "<p> Evil High-backed Chairt -- $5,000 
					<br> Item in cart: <input type='checkbox' name='evilchair' value='Evil High-backed Chair' checked> </p> ";
			} if(isset($_POST["spikepit"])){
				echo "<p> Spike Pit -- $75,000 
					<br> Item in cart: <input type='checkbox' name='spikepit' value='Spike Pit' checked> </p> ";
			} if(isset($_POST["jellyfishtank"])){
				echo "<p> Jellyfish Tank -- $50,000 
					<br> Item in cart: <input type='checkbox' name='jellyfishtank' value='Jellyfish Tank' checked> </p> ";
			} if(isset($_POST["selfdestructbutton"])){
				echo "<p> Self Destruct Button -- $1,000 
					<br> Item in cart: <input type='checkbox' name='selfdestructbutton' value='Self Destruct Button' checked> </p> ";
			}
			echo "<input type='submit' value='Return to Browse' formaction='browse.php'> <input type='submit' value='Update Cart' formaction='viewcart.php'> <input type='submit' value='Proceed to Checkout' formaction='checkout.php'></form>"
		?>
	</body>
</html>