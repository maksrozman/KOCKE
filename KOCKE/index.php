<?php
	session_start();
	
	$_SESSION["enka"] = 1;
	$_SESSION["vs"]=0;
	$_SESSION["vsdva"]=0;
	$_SESSION["vstri"]=0;
/*	 if (isset($_POST['submit'])) {
    $_SESSION['user'] = $_POST['ime1'];
    /* $_SESSION['email'] = $_POST['email']; 
}  */
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>KOCKE</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="images/icon.png">
</head>
<body>


<h1 id="naslovPrvaStran"> GAMBLING ROOM</h1>
<div id="meni">
	<form action="game.php" method="post">
		<div id="prviIgralec" class="player">
				<div class="naslovIgralci">UPORABNIK 1</div>				
				<input id="ime1" name="uporabnik1" maxlength="10" required></input>
		</div>
		
		<div id="drugiIgralec" class="player">
				<div class="naslovIgralci">UPORABNIK 2</div>				
				<input name="uporabnik2" maxlength="10" required></input>
		</div>
		
		<div id="tretjiIgralec" class="player">
				<div class="naslovIgralci">UPORABNIK 3</div>				
				<input name="uporabnik3" maxlength="10" required></input>
		</div>
		
		<div id="izbiraIgre">
			<div id="steviloKock">
				<p style="font-size:30px;"> ŠTEVILO KOCK </p>
					<select name="stevilokock" id="select1">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  
					</select>
			</div>
		
			<div id="steviloIger">
				<p style="font-size:30px;">  ŠTEVILO IGER </p>
				<select name="steviloiger" id="select2">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
				</select>
			</div>
		</div>	
		
<!--		<div id="igrajGumb" type="submit" value="START" onclick="location.href='game.php';" type="submit">
			<p> suck dis nuts </p>
		</div>   -->
		
		<input id="igrajGumb" type="submit" name="submit" value="IGRAJ">
		
		</input>
		
	
	</div>
	
	</form>
</div>
<!--    <button onclick="location.href='game.php';"> aaa</button>   -->



<?php
//  header("refresh:5; url=game.php");                TIMED HEADER


 
?>

</body>
</html>