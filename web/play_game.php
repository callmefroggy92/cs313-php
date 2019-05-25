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
				}

				public function show(){
					echo $this->race . " -- " . $this->class;
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

			foreach ($db->query('SELECT * FROM player') as $row)
			{
				echo 'Player Name: ' . $row['name'];
				echo ' Faction: ' . $row['faction'];
				$c = new Character($row['army']);
				$c->show();
				echo '<br/>';
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