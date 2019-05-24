<HTML>
	<HEAD>
	</HEAD>

	<BODY>

		<?php
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

				echo 'Success!';
  				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			foreach ($db->query('SELECT * FROM player') as $row)
			{
				echo 'test';
				echo 'Player Name: ' . $row['name'];
				echo ' Faction: ' . $row['faction'];
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