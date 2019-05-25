<HTML>
	<HEAD>
	</HEAD>

	<BODY>

		<?php

			class Character{

				public function __construct($str){
					if ($str[0] == 'h'){
						$this->race = 'human';
					}
					if ($str[1] == 's'){
						$this->class = 'solider';
					}
					elseif($str[1] == 'w'){
						$this->class = 'warrior';
					}
				}

				public function show(){
					echo "<br><br>" . $this->race . " -- " . $this->class;
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

			$player1 = "testPlayer3";
			$player2 = "testPlayer4";

			foreach ($db->query("SELECT * FROM player WHERE name ='$player1'") as $row)
			{
				echo 'Player Name: ' . $row['name'];
				echo ' Faction: ' . $row['faction'];
				$army = explode(" ", $row['army']);
				
				foreach($army as $line){
					echo $line;
					$c = new Character($line);
					$c->show();
					echo '<br/>';
				}
			}

			

			}
			catch (PDOException $ex)
			{
  				echo 'Error!: ' . $ex->getMessage();
  				die();
			}
		?>
	</BODY>
</HTML>	