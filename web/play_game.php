<HTML>
	<HEAD>
	</HEAD>

	<BODY>

		<?php
try
{
  $user = 'postgres';
  $password = 'password';
  $db = new PDO('pgsql:host=localhost;dbname=Logan', $user, $password);

  // this line makes PDO give us an exception when there are problems,
  // and can be very helpful in debugging! (But you would likely want
  // to disable it for production environments.)
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
			foreach ($db->query('SELECT * FROM player') as $row)
			{
				echo 'Player Name: ' . $row['ame'];
				echo ' Faction: ' . $row['faction'];
				echo '<br/>';
			}
		?>
	</BODY>
</HTML>	