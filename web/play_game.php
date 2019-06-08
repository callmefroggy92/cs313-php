<HTML>
	<HEAD>
	<link rel="stylesheet" type="text/css" href="style.css">

		<script>
			<?php
			$db = null;
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
			}
			catch (PDOException $ex){
  				echo 'Error!: ' . $ex->getMessage();
  				die();
			} 
			?>
		
			function updateP1Points(inc){
				p1 = document.getElementById("p1");
				p1Points = 0;
				if(inc == '+'){
					p1Points = <?php
						$id = (int)$_GET["player1"];
						$points = ((int)$db->query("SELECT victory_points FROM player WHERE id='$id'")) + 1;
						?>
					loadP1Points();
				}

				else if(inc == '-'){
				p1 = document.getElementById("p1");
				p1Points = 0;
				if(inc == '+'){
					p1Points = <?php
						$id = (int)$_GET["player1"];
						$points = ((int)$db->query("SELECT victory_points FROM player WHERE id='$id'")) - 1;
						?>
					loadP1Points();
				}

			}		
					
			
		</script>
	</HEAD>

	<BODY>

		<div id="header">
			<h2> SHADOWS OF THE SUN </h2>
			<br>
			Victory Points Player 1: <span id="p1">0</span> **** </span> <span id="turn"> Turn 1 </span> ****  Victory Points Player 2: <span id="p2">0</span>
			<br>
			<button>-</button><button>+</button> <button>Next Turn</button> <button>-</button><button>+</button>
		</div><br><br>
		<?php
			class Character{
				public function __construct($str){
					$this->health = intval($str[2]);
					if ($str[0] == 'h'){
						$this->race = 'Human';
					
						if ($str[1] == 's'){
							$this->class = 'Solider';
							$this->desc = "A powerful and trained human soldier, disciplined in the arts of shooting and guerrila warfare.";
							$this->stats = "Move -> 6   Armor -> 7  Strength -> 7  Bravery -> 11   Marksmanship -> 12";
							$this->weapon = "Equipment: Standard Assault Rifle --  Range -> 18  Strength -> 9";
						}
						elseif($str[1] == 'w'){
							$this->class = 'Warrior';
							$this->desc = "A power warrior, specializing in all forms of hand-to-hand combat.";
							$this->stats = "Move -> 7   Armor -> 9  Strength -> 10  Bravery -> 12   Marksmanship -> 7";
							$this->weapon = "Equipment: .50 Pistol --  Range -> 6  Strength -> 12";
						}
						elseif($str[1] == 'r'){
							$this->class = "Sniper";
							$this->desc = "A human trained in covert ops.  A sniper specializes in taking out high-priority targets.";
							$this->stats = "Move -> 5   Armor -> 5  Strength -> 6  Bravery -> 7   Marksmanship -> 16";
							$this->weapon = "Equipment: Antique Sniper Rifle --  Range -> 36  Strength -> 12";
						}elseif($str[1] == 'h'){
							$this->class = "Hound";
							$this->desc = "A near feral hound trained by human masters to hunt down their enemies";
							$this->stats = "Move -> 12   Armor -> 5  Strength -> 8  Bravery -> 13   Marksmanship -> 0";
							$this->weapon = "Equipment: None";
						}elseif($str[1] == 't'){
							$this->class = "Tactician";
							$this->desc = "A veteran of the war, prized for his ability to analyze and deploy forces with surgical skill";
							$this->stats = "Move -> 6   Armor -> 5  Strength -> 6  Bravery -> 10   Marksmanship -> 11";
							$this->weapon = "Equipment: Standard Assault Rifle --  Range -> 18  Strength -> 9";
						}elseif($str[1] == 'g'){
							$this->class = "Guerrilla";
							$this->desc = "Guerrilla fighters use whatever means necessary to take down their targets";
							$this->stats = "Move -> 7   Armor -> 5  Strength -> 8  Bravery -> 14   Marksmanship -> 7";
							$this->weapon = "Equipment: Makeshift Explosives --  Range -> 9  Strength -> 10   Radius -> 4";
						}
					}
					elseif($str[0] == 'x'){
						$this->race = 'Xenos';
				
						if ($str[1] == 's'){
							$this->class = 'Soldier';
							$this->desc = "A foot soldier for the Xenos, wielding advanced weaponry.";
							$this->stats = "Move -> 6   Armor -> 7  Strength -> 7  Bravery -> 9   Marksmanship -> 9";
							$this->weapon = "Equipment: Lasgun --  Range -> 12  Strength -> 10";
						}
						elseif ($str[1] == 'w'){
							$this->class = 'Warrior';
							$this->desc = "A Xenos brute.  He has strength and speed surpassing any creature native to Terra.";
							$this->stats = "Move -> 9   Armor -> 12  Strength -> 10  Bravery -> 14   Marksmanship -> 3";
							$this->weapon = "Equipment: Power Sword --  Range -> 2  Strength -> +3";
						}elseif ($str[1] == 'l'){
							$this->class = 'Warlord';
							$this->desc = "A commander in the Xenos force.  While his main asset is his tactical ability, his foes know not to underestimate his fighting capacities.";
							$this->stats = "Move -> 5   Armor -> 6  Strength -> 6  Bravery -> 14   Marksmanship -> 11";
							$this->weapon = "Equipment: Incinerator Pistol --  Range -> 6  Strength -> 12";
						}elseif ($str[1] == 't'){
							$this->class = 'Thrasher';
							$this->desc = "A Xenos of astounding size.  The mere sight of him terrifies all but the most steeled warriors.";
							$this->stats = "Move -> 7   Armor -> 13  Strength -> 15  Bravery -> 18   Marksmanship -> 0";
							$this->weapon = "None";
						}
					}
				}
				public function show(){
					echo "<br><br>" . $this->race . " -- " . $this->class;
					echo "<br> Health Remaining: " . $this->health;
					echo "<br> " . $this->desc;
					echo "<br>" . $this->stats;
					echo "<br>" . $this->weapon;
					
				}
			}
			
				$player1 = (int)$_GET["player1"];
				$player2 = (int)$_GET["player2"];
				foreach ($db->query("SELECT * FROM player WHERE id='$player1' or id='$player2'") as $row){
					echo "<div id='content'>";
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
				echo "<br><br></div>";
				}
						
			
		?>
	</BODY>
</HTML>	