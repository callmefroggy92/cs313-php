<?php session_start(); ?>
<html>
	<head>

	</head>

	<body>

		<p> Thank you for your patronage!  Your order is being prepared and will be sent to <?php echo $_POST['address'] . ', ' . $_POST['city'] . ', ' . $_POST['state'] . ' ' . $_POST['zip']; ?> </p>

		<p> Your order: <br>

		<?php 
			foreach ($_SESSION as $param_name => $param_val) {
    				echo $param_val;
			}	
		?>
		<p> We look forward to assisting you on future evil projects! </p>

	</body>
</html>