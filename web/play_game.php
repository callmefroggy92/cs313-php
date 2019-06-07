<HTML>
	<HEAD>
		<style>
			#player{
				width:60%;
				background-color:#222;
				margin:10px;
				padding:10px;
				color: white;
			}

			body{
				background-color:#CCC;
			}
			
		</style>

		<script>
											
		</script>
	</HEAD>

	<BODY>

		<?php
  				$dbUrl = getenv('DATABASE_URL');

  				$dbOpts = parse_url($dbUrl);

  				$dbHost = $dbOpts["host"];
  				$dbPort = $dbOpts["port"];
  				$dbUser = $dbOpts["user"];
  				$dbPassword = $dbOpts["pass"];
  				$dbName = ltrim($dbOpts["path"],'/');

  				$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			function get_player1_name(){
				$player1 = (int)$_GET["player1"];
				echo $db->query("SELECT name FROM player WHERE id='$player1'");
			}

			function get_player1_faction(){
				$player1 = (int)$_GET["player1"];
				echo $db->query("SELECT faction FROM player WHERE id='$player1'");
			}
			
			function get_player1_army(){
				$player1 = (int)$_GET["player1"];
				echo $db->query("SELECT army FROM player WHERE id='$player1'");
			}			

			function get_player2_name(){
				$player2 = (int)$_GET["player2"];
				echo $db->query("SELECT name FROM player WHERE id='$player2'");
			}

			function get_player2_faction(){
				$player2 = (int)$_GET["player2"];
				echo $db->query("SELECT faction FROM player WHERE id='$player2'");
			}
			
			function get_player2_army(){
				$player2 = (int)$_GET["player2"];
				echo $db->query("SELECT army FROM player WHERE id='$player2'");
			}			

		?>

		<div id="player1" class="player">
		</div>

		<br><br>

		<div id="player2" class="player">
		</div>

	</BODY>
</HTML>	