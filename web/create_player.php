<HTML>
	<HEAD>
		<script>
			army = "";
			army_des = "";
				function add_to_army(val, des){
					army_des += des;
					army_des += "<br>";
					army += val;
					document.getElementById("armySpan").innerHTML = army_des;
					document.cookie = "army="+army+";domain=;path=/";
				}
		</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	</HEAD>
	<BODY>
		<div id="content">
		<h3> Create your Army Below!  Enter your information, then use the buttons to add units! </h3>
		<form action="player_confirmation.php" method="post">
			<input type="text" name="name">
			<input type="text" name="faction">
			<input type="submit">
		</form>
		<br><br>
		<div id="armyButtons">
			<p> Human Warrior <button onclick="add_to_army('hw3 ', 'Human Warrior')">ADD</button></p>
			<p> Human Soldier <button onclick="add_to_army('hs3 ', 'Human Soldier')">ADD</button></p>
			<p> Human Sniper <button onclick="add_to_army('hr3 ', 'Human Sniper')">ADD</button></p>
			<p> War Hound <button onclick="add_to_army('hh3 ', 'War Hound')">ADD</button></p>	
			<p> Human Tactician <button onclick="add_to_army('ht3 ', 'Human Tactician')">ADD</button></p>	
			<p> Human Guerrilla <button onclick="add_to_army('hg3 ', 'Human Guerrilla')">ADD</button></p>				
			<p> Xenos Warrior <button onclick="add_to_army('xw3 ', 'Xenos Warrior')">ADD</button></p>
			<p> Xenos Soldier <button onclick="add_to_army('xs3 ', 'Xenos Soldier')">ADD</button></p>
			<p> Xenos Sniper <button onclick="add_to_army('xr3 ', 'Xenos Sniper')">ADD</button></p>
			<p> Xenos Warlord <button onclick="add_to_army('xl3 ', 'Xenos Warlord')">ADD</button></p>
			<p> Xenos Sniper <button onclick="add_to_army('xr3 ', 'Xenos Thrasher')">ADD</button></p>


		</div>
		<br>
		<span id="armySpan"></span>
		</div>
	</BODY>
</HTML>