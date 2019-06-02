<html>
	<head>
	</head>
	

	<body>
		<?php           
			if($_SERVER['REQUEST_METHOD']=='POST'){
				try{
  					$dbUrl = getenv('DATABASE_URL');
	
  					$dbOpts = parse_url($dbUrl);
	
  					$dbHost = $dbOpts["host"];
  					$dbPort = $dbOpts["port"];
  					$dbUser = $dbOpts["user"];
  					$dbPassword = $dbOpts["pass"];
  					$dbName = ltrim($dbOpts["path"],'/');

	  				$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	  				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$name = $_POST["name"];
					$faction = $_POST["faction"];
					$army = $_COOKIE["army"];
					$id = rand(00000,99999);
					$vp = 0;
					$db->exec("INSERT INTO player VALUES('$name','$faction','$army','$vp','$id');");

					echo "Your player ID is: " . $id;
				
				}
				catch (PDOException $ex){
  					echo 'Error!: ' . $ex->getMessage();
  					die();
				}
			}
		?>

		<br><br>
		<form action="create_player.php">
			<input type="submit" text="Create Another Player">
		</form
		<br><br>
		<form action="play_game.php" method="post">
			<input type="number">
			<input type="number">
			<input type="submit" text="Start Game">
		</form>
	</body>
</html>