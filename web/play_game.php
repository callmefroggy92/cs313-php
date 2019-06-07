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
			function unit(race, class, health, des){
				this.race = race;
				this.class = class;
				this.health = health;
				this.des = des;
			}

			function create_army(str){
				var army = [];
				var army_str = str.split(" ");
				var i;
				for(i = 0; i < army.length; i++){
				var race;
				var class;
				var health;
				var des;
					if(army_str[i][0] == "h"){
						race = "Human";
						if(army_str[i][1] == "w")
							class = "Warrior";
						else if(army_str[i][1] == "s")
							class = "Soldier";
						else if(army_str[i][1] == "r")
							class = "Sniper";
					}
					else if(army_str[i][0] == "x"){
						race = "Xenos";	
							if(army_str[i][1] == "w")
								class = "Warrior";
							else if(army_str[i][1] == "s"){
								class = "Soldier";
							}	
							else if(army_str[i][1] == "r"){
								class = "Sniper";
							}
					}
				var u = new Unit(race, class, 0, "test");
				army.push(u);
				}
			return army;			
			}			
				
			function create_player(){
				var player_content = 
					"<h3> 
						<?php echo get_player1_name(); ?> 
					</h3>
					<br><br>
					<h4> 
						<?php echo get_player1_faction(); ?>
					</h4>";

					console.log("test");
					console.log(player_content);

				document.getElementById("player1").innerHTML = player_content;
			} 
											
		</script>
	</HEAD>

	<BODY onload="create_player">

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