<HTML>
	<HEAD>
		<script>
			army = "";

				function add_to_army(val){
					army += val;
					document.getElementById("armySpan").innerHTML = army;
				}
		</script>
	</HEAD>

	<BODY>
		<form action="create_player.php" method="post">
			<input type="text" name="name">
			<input type="text" name="faction">
			<input type="text" name="army">
			<input type="submit">
		</form>

		<br><br>
		<div id="armyButtons">
			<p> Human Warrior <button onclick="add_to_army('hs3')"></p>
		</div>
		<br>
		<span id="armySpan"></span>
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
				$army = $_POST["army"];
				$id = rand(00000,99999);
				$vp = 0;
				$db->exec("INSERT INTO player VALUES('$name','$faction','$army','$vp','$id');");
				
			}
			catch (PDOException $ex){
  				echo 'Error!: ' . $ex->getMessage();
  				die();
			}
			}
		?>

	</BODY>
</HTML>