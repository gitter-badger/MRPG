<?php
	session_start();
	//test
	$Race[] = "Mechanical_Man","Sky_Person";
	
	if ($_POST['CharFormalName'] && $_POST['CharName'] && $_POST['CharFaction']){
		//Not First Time on session
		
		
	}else{
		//First Time on session
		$_SESSION['Playing'] = true;
		echo "<form action='StartNewChar.php' method='post'>FullName of you <b>CHARACTER</b><input type='text' name='CharFormalName'><br>
		NickName of you <b>CHARACTER</b><input type='text' name='CharName' value='". $_POST['CharName'] . "'><br>
		What (Team/Faction/Clan) is <b>CHARACTER</b> a part of [leave blank if loner]<input type='text' name='CharFaction' value='". $_POST['CharFaction']. "'><br>
		<b>CHARACTER STAT POINT</b><br>
		HP HEALTH <input type='number' size='3' name='CharHP' value='". $_POST['CharHP'] ."'><br>
		HP REGEN <select name='CharHPRegen' value='". $_POST['CharHPRegen'] ."'>
			<option value='1'>(+1 HP/t) Simple Regen [cost -10 points]</option>
			<option value='0'>No Regen</option>
		</select><br>
		SP Strength <input type='number' size='3' name='CharStrength' value='". $_POST['CharStrength'] ."'><br>
		SP Speed <input type='number' size='3' name='CharSpeed' value='". $_POST['CharSpeed'] ."'><br>
		LP Luck <input type='number' size='3' name='CharLuck' value='". $_POST['CharLuck'] ."'><br>
		
		Race <select name='CharRace' value='". $_POST['CharRace'] ."'>
			<option value='1'>Mechanical Man [cost -10 points]</option>
			<option value='0'>Sky Person [cost -30 points]</option>
		</select><br>
		
		<input type='submit' value='Submit'></form>";
	}
	if($_GET['reset']){
		$_SESSION['Playing'] = false;
	}
?>