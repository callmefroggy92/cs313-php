<HTML>
	<HEAD>
		<script>
			army = "";

				function add_to_army(val){
					army += val;
					document.getElementById("armySpan").innerHTML = army;
					document.cookie = "army="+army+";domain=;path=/";
				}
		</script>
	</HEAD>

	<BODY>
		<form action="player_confirmation.php" method="post">
			<input type="text" name="name">
			<input type="text" name="faction">
			<input type="submit">
		</form>

		<br><br>
		<div id="armyButtons">
			<p> Human Warrior <button onclick="add_to_army('hw3 ')">ADD</button></p>

			<p> Human Soldier <button onclick="add_to_army('hs3 ')">ADD</button></p>

			<p> Human Sniper <button onclick="add_to_army('hr3 ')">ADD</button></p>
		</div>

		<br>
		<span id="armySpan"></span>


	</BODY>
</HTML>