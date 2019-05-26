<HTML>
	<HEAD>
		<style>
			#player{
				width:60%;
				background-color:#CCC;
				margin:10px;
				padding:10px;
			}
		</style>
	</HEAD>

	<BODY>

		<?php

			class Character{

				public function __construct($str){
					$this->health = intval($str[2]);
					if ($str[0] == 'h'){
						$this->race = 'Human';
					
						if ($str[1] == 's'){
							$this->class = 'Solider';
							$this->desc = "A powerful and trained human soldier, disciplined in the arts of shooting and guerrila warfare.";
						}
						elseif($str[1] == 'w'){
							$this->class = 'Warrior';
							$this->desc = "A power warrior, specializing in all forms of hand-to-hand combat.";
						}
						elseif($str[1] == 'r'){
							$this->class = "Sniper";
							$this->desc = "A human trained in covert ops.  A sniper specializes in taking out high-priority targets.";
						}
					}

					elseif($str[0] == 'x'){
						$this->race = 'Xenos';
				
						if ($str[1] == 's'){
							$this->class = 'Soldier';
							$this->desc = "A foot soldier for the Xenos, wielding advanced weaponry.";
						}
						elseif ($str[1] == 'w'){
							$this->class = 'Warrior';
							$this->desc = "A Xenos brute.  He has strength and speed surpassing any creature native to Terra.";
						}
					}
				}

				public function show(){
					echo "<br><br>" . $this->race . " -- " . $this->class;
					echo "<br> Health Remaining: " . $this->health;
					echo "<br> " . $this->desc;
					
				}
			}
			try
			{
  				$dbUrl = getenv('DATABASE_URL');

  				$dbOpts = parse_url($dbUrl);

  				$dbHost = $dbOpts["host"];
  				$dbPort = $dbOpts["port"];
  				$dbUser = $dbOpts["user"];
  				$dbPassword = $dbOpts["pass"];
  				$dbName = ltrim($dbOpts["path"],'/');

  				$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$player1 = "testPlayer1";
			$player2 = "testPlayer2";

			foreach ($db->query("SELECT * FROM player WHERE name ='$player1' or name ='$player2'") as $row){
				echo "<div id='player'>";
				echo '<h1>';
				echo 'Player Name: ' . $row['name'];
				echo '</h1><h2>';
				echo ' Faction: ' . $row['faction'];
				echo '</h2>';
				$army = explode(" ", $row['army']);				

				foreach($army as $line){
					$c = new Character($line);
					$c->show();
					echo '<br/>';
				}
				echo "</div>";
			}			

			}
			catch (PDOException $ex){
  				echo 'Error!: ' . $ex->getMessage();
  				die();
			}
		?>
	</BODY>
</HTML>	