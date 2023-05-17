<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>KOCKE</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="images/icon.png">
</head>
<body>

<div id="slikastopnick">
	

<?php


function rezultat(){
	if($_SESSION["vs"] > $_SESSION["vsdva"] && $_SESSION["vs"]>$_SESSION["vstri"])
	{
		echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px;">' . $_SESSION["uporabnik1"] . '</span>';
		
		if($_SESSION["vsdva"] > $_SESSION["vstri"])
		{
				echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-right:500px">' . $_SESSION["uporabnik2"] . '</span>';
				echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-left:500px">' . $_SESSION["uporabnik3"] . '</span>';
		}
		else
		{
			echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-right:500px">' . $_SESSION["uporabnik3"] . '</span>';
			echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-left:500px">' . $_SESSION["uporabnik2"] . '</span>';
		}
		
	}
	if($_SESSION["vsdva"] > $_SESSION["vs"] && $_SESSION["vsdva"]>$_SESSION["vstri"])
	{
		echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px;">' . $_SESSION["uporabnik2"] . '</span>';
		
		if($_SESSION["vs"] > $_SESSION["vstri"])
		{
				echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-right:500px">' . $_SESSION["uporabnik1"] . '</span>';
				echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-left:500px">' . $_SESSION["uporabnik3"] . '</span>';
		}
		else
		{
			echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-left:500px">' . $_SESSION["uporabnik3"] . '</span>';
			echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-right:500px">' . $_SESSION["uporabnik1"] . '</span>';
		}
		
	}
	if($_SESSION["vstri"] > $_SESSION["vs"] && $_SESSION["vstri"]>$_SESSION["vsdva"])
	{
		echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px;">' . $_SESSION["uporabnik3"] . '</span>';
		
		if($_SESSION["vsdva"] > $_SESSION["vs"])
		{
				echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-right:500px">' . $_SESSION["uporabnik2"] . '</span>';
				echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-left:500px">' . $_SESSION["uporabnik1"] . '</span>';
		}
		else
		{
			echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-right:500px">' . $_SESSION["uporabnik1"] . '</span>';
			echo '<span style="font-size: 50px; display: block; margin: 0 auto; text-align: center; top:200px; margin-left:500px">' . $_SESSION["uporabnik2"] . '</span>';
		}
		
	}	
}
rezultat();
?>
</div>

<?php
  header("refresh:5; url=index.php");           
?>

</body>
</html>