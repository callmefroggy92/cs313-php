<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	

	<body>
		<div id="content">
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
					echo "<h3>Your player ID is: " . $id . "</h3>";
					echo "<h4>You can create another player, or input two player IDs below and hit START GAME to begin the game!</h4>";
				
				}
				catch (PDOException $ex){
  					echo 'Error!: ' . $ex->getMessage();
  					die();
				}
			}
		?>

		<br><br>
		<form action="create_player.php">
			<input type="submit" value="Create Another Player">
		</form>
		<br><br>
		<form action="play_game.php" method="get">
			<input type="text" name="player1" placeholder="Enter Player 1 ID">
			<input type="text" name="player2" placeholder="Enter Player 2 ID">
			<input type="submit" value="Start Game">
		</form>
		</div>
	</body>
</html>