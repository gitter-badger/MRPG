<?php
	session_start();
	
	require "GameData/Race.php";
	require "GameData/Skills.php";
	
	if ($_POST['CharFormalName'] && $_POST['CharName'] && $_POST['CharFaction']){
		//Not First Time on session
		
		
	}else{
		//First Time on session
		$_SESSION['Playing'] = true;
		echo "<form action='StartNewChar.php' method='post'>FullName of you <b>CHARACTER</b><input type='text' name='CharFormalName'><br>
		NickName of you <b>CHARACTER</b><input type='text' name='CharName' value='". $_POST['CharName'] . "'><br>
		What (Team/Faction/Clan) is <b>CHARACTER</b> a part of [leave blank if loner]<input type='text' name='CharFaction' value='". $_POST['CharFaction']. "'><br>
		Starter Skill <select name='CharStarterSkill' value='". $_POST['CharStarterSkill'] ."'>";
		
		// List out all avalbel Skills for starter.
			$i = 0;
			while(count($SkillName) > $i){
				if ($SkillMinLevel[$i] < 11){
					echo "<option value='". $SkillId[$i] ."'>". $SkillName[$i] ." [Rep ".$SkillRep[$i]."]</option>";
				}
				$i++;
			}
		
		echo "</select><br>
		<b>CHARACTER STAT POINT<br>You have 100 points to spend.</b><br>
		HP HEALTH <input type='number' size='3' name='CharHP' value='". $_POST['CharHP'] ."'><br>
		HP REGEN <select name='CharHPRegen' value='". $_POST['CharHPRegen'] ."'>
			<option value='1'>(+1 HP/t) Simple Regen [cost 10 points]</option>
			<option value='0'>No Regen</option>
		</select><br>
		IP INTELLIGENCE <input type'number' name='CharIntelligence' value='". $_POST['CharIntelligence'] ."'><br>
		SP STRENGTH <input type='number' size='3' name='CharStrength' value='". $_POST['CharStrength'] ."'><br>
		SP SPEED <input type='number' size='3' name='CharSpeed' value='". $_POST['CharSpeed'] ."'><br>
		SP SPEECH <input type='number' size='3' name='CharSpeech' value='". $_POST['CharSpeech'] ."'><br>
		LP LUCK <input type='number' size='3' name='CharLuck' value='". $_POST['CharLuck'] ."'><br>
		MP MAGIC <input type='number' size='3' name='CharMagic' value='". $_POST['CharMagic'] ."'><br>
		HP MAGIC <select name='CharMagicRegen' value='". $_POST['CharMagicRegen'] ."'>
			<option value='1'>(+1 MA/t) Simple Regen [cost 20 points]</option>
			<option value='0'>No Regen</option>
		</select><br>
		Race <select name='CharRace' value='". $_POST['CharRace'] ."'>";
		
		// List out all of the games Races.
			$i = 0;
			while(count($Race) > $i){
				echo "<option value='". $i ."'>". $Race[$i] ." [cost ". $RaceCost[$i] ." points]</option>";
				$i++;
			}
			
		echo "</select><br>
		<input type='submit' value='Submit'></form>";
	}
	if($_GET['reset']){
		$_SESSION['Playing'] = false;
	}
?>