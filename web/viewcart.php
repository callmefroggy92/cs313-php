<html>
	<head>
	</head>

	<body>
		<form action="checkout.php" method="post">
			<?php
				echo "Shopping cart: <br> <form action='viewcart.php' method='post'>";
				echo $_POST["test"];
				if(isset($_POST["superdeathray"])){
					echo "<p> Super Death Ray -- $1,000,000 
						<br> Item in cart: <input type='checkbox' name='superdeathray' checked> </p>";
				}
			
				if(isset($_POST["superdeathrobot"])){
					echo "<p> Super Death Robot -- $250,000 
						<br> Item in cart: <input type='checkbox' name='superdeathrobot' checked> </p> ";
				}
				echo "<input type='submit' value='Update Cart'></form>"
			?>

			<input type='submit' value='Proceed to Checkout'>
		</form>

	</body>
</html>