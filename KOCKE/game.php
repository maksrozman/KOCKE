<?php
	session_start();



if (isset($_POST["stevilokock"])) {
    $_SESSION["stevilokock"] = $_POST["stevilokock"];
}

if (isset($_POST["steviloiger"])) {
    $_SESSION["steviloiger"] = $_POST["steviloiger"];
}

if (isset($_POST["uporabnik1"])) {
    $_SESSION["uporabnik1"] = $_POST["uporabnik1"];
}

if (isset($_POST["uporabnik2"])) {
    $_SESSION["uporabnik2"] = $_POST["uporabnik2"];
}

if (isset($_POST["uporabnik3"])) {
    $_SESSION["uporabnik3"] = $_POST["uporabnik3"];
}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>KOCKE</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="images/icon.png">
</head>
<body>


<?php 
	
	
	function slike(){
		
		$imagePath1 = 'images/1.png'; 
		$imagePath2 = 'images/2.png'; 
		$imagePath3 = 'images/3.png'; 
		$imagePath4 = 'images/4.png'; 
		$imagePath5 = 'images/5.png'; 
		$imagePath6 = 'images/6.png'; 

		$random=(int)rand(1,6);
		if($random==1)
		{
			echo '<img src="' . $imagePath1 . '" alt="Slika">';
			$_SESSION["vs"]=$_SESSION["vs"]+1;
		}
		if($random==2)
		{
			echo '<img src="' . $imagePath2 . '" alt="Slika">';
			$_SESSION["vs"]=$_SESSION["vs"]+2;
		}
		if($random==3)
		{
			echo '<img src="' . $imagePath3 . '" alt="Slika">';
			$_SESSION["vs"]=$_SESSION["vs"]+3;
		}
		if($random==4)
		{
			echo '<img src="' . $imagePath4 . '" alt="Slika">';
			$_SESSION["vs"]=$_SESSION["vs"]+4;
		}
		if($random==5)
		{
			echo '<img src="' . $imagePath5 . '" alt="Slika">';
			$_SESSION["vs"]=$_SESSION["vs"]+5;
		}
		if($random==6)
		{
			echo '<img src="' . $imagePath6 . '" alt="Slika">';
			$_SESSION["vs"]=$_SESSION["vs"]+6;
		}
			
	}	
	
?>


<?php 
	
	
	function slike2(){
		
		$imagePath1 = 'images/1.png'; 
		$imagePath2 = 'images/2.png'; 
		$imagePath3 = 'images/3.png'; 
		$imagePath4 = 'images/4.png'; 
		$imagePath5 = 'images/5.png'; 
		$imagePath6 = 'images/6.png'; 

		$random=(int)rand(1,6);
		if($random==1)
		{
			echo '<img src="' . $imagePath1 . '" alt="Slika">';
			$_SESSION["vsdva"]=$_SESSION["vsdva"]+1;
		}
		if($random==2)
		{
			echo '<img src="' . $imagePath2 . '" alt="Slika">';
			$_SESSION["vsdva"]=$_SESSION["vsdva"]+2;
		}
		if($random==3)
		{
			echo '<img src="' . $imagePath3 . '" alt="Slika">';
			$_SESSION["vsdva"]=$_SESSION["vsdva"]+3;
		}
		if($random==4)
		{
			echo '<img src="' . $imagePath4 . '" alt="Slika">';
			$_SESSION["vsdva"]=$_SESSION["vsdva"]+4;
		}
		if($random==5)
		{
			echo '<img src="' . $imagePath5 . '" alt="Slika">';
			$_SESSION["vsdva"]=$_SESSION["vsdva"]+5;
		}
		if($random==6)
		{
			echo '<img src="' . $imagePath6 . '" alt="Slika">';
			$_SESSION["vsdva"]=$_SESSION["vsdva"]+6;
		}
			
	}	
	
?>


<?php 
	
	
	function slike3(){
		
		$imagePath1 = 'images/1.png'; 
		$imagePath2 = 'images/2.png'; 
		$imagePath3 = 'images/3.png'; 
		$imagePath4 = 'images/4.png'; 
		$imagePath5 = 'images/5.png'; 
		$imagePath6 = 'images/6.png'; 

		$random=(int)rand(1,6);
		if($random==1)
		{
			echo '<img src="' . $imagePath1 . '" alt="Slika">';
			$_SESSION["vstri"]=$_SESSION["vstri"]+1;
		}
		if($random==2)
		{
			echo '<img src="' . $imagePath2 . '" alt="Slika">';
			$_SESSION["vstri"]=$_SESSION["vstri"]+2;
		}
		if($random==3)
		{
			echo '<img src="' . $imagePath3 . '" alt="Slika">';
			$_SESSION["vstri"]=$_SESSION["vstri"]+3;
		}
		if($random==4)
		{
			echo '<img src="' . $imagePath4 . '" alt="Slika">';
			$_SESSION["vstri"]=$_SESSION["vstri"]+4;
		}
		if($random==5)
		{
			echo '<img src="' . $imagePath5 . '" alt="Slika">';
			$_SESSION["vstri"]=$_SESSION["vstri"]+5;
		}
		if($random==6)
		{
			echo '<img src="' . $imagePath6 . '" alt="Slika">';
			$_SESSION["vstri"]=$_SESSION["vstri"]+6;
		}
			
	}	
	
?>


<div id="tester">
    <?php
	echo '<span style="font-size: 40px; display: block; margin: 0 auto; text-align: center;">' . $_SESSION["uporabnik1"] . '</span>';
	echo "<br>";
	
    if (array_key_exists('button1', $_POST)) {
		if($_SESSION["stevilokock"]==1)
		{
			slike();
			    echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vs"] . '</span>';
		}
		else if($_SESSION["stevilokock"]==2){
			slike();
			slike();
			echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vs"] . '</span>';
		}
		else{
			slike();
			slike();
			slike();
			echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vs"] . '</span>';
		}
	}
	

    ?>
</div>

<div id="tester">
    <?php
		echo '<span style="font-size: 40px; display: block; margin: 0 auto; text-align: center;">' . $_SESSION["uporabnik2"] . '</span>';
		echo "<br>";
		if (array_key_exists('button1', $_POST)) {
			if($_SESSION["stevilokock"]==1)
			{
				slike2();
				echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vsdva"] . '</span>';
				
			}
			else if($_SESSION["stevilokock"]==2){
				slike2();
				slike2();
				echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vsdva"] . '</span>';
				
			}
			else{
				slike2();
				slike2();
				slike2();
				echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vsdva"] . '</span>';
			}
		}
    ?>
</div>

<div id="tester">
    <?php
		echo '<span style="font-size: 40px; display: block; margin: 0 auto; text-align: center;">' . $_SESSION["uporabnik3"] . '</span>';
		echo "<br>";
		
		if (array_key_exists('button1', $_POST)) {
		if($_SESSION["stevilokock"]==1)
		{
			slike3();
			echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vstri"] . '</span>';

		}
		else if($_SESSION["stevilokock"]==2){
			slike3();
			slike3();
			echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vstri"] . '</span>';
		}
		else{
			slike3();
			slike3();
			slike3();
			echo '<div style="text-align: center; font-size: 40px; margin-top:20px;">VSOTA KOCK:</div>';
			echo '<span style="font-size: 30px; display: block; margin: 0 auto; text-align: center; margin-top:30px;">' . $_SESSION["vstri"] . '</span>';
		}
	}
    ?>
</div>


<?php
if (isset($_POST['button1'])) {
    $_SESSION["enka"] += 1; // Increment $_SESSION["enka"] on button1 click
}

$isDisabledButton1 = ($_SESSION["enka"] >= $_SESSION["steviloiger"] + 1) ? 'disabled' : ''; // Check if $_SESSION["enka"] is greater than or equal to a certain value (e.g., 15)

$isDisabledButton2 = ($_SESSION["enka"] >= $_SESSION["steviloiger"] + 1) ? '' : 'disabled'; // Check if $_SESSION["enka"] is less than the specified value

?>

<form method="post">
    <input type="submit" name="button1" class="buttona" value="MET KOCK" <?php echo $isDisabledButton1; ?> />
</form>

<form method="post" action="win.php" name="izhod">
    <input type="submit" name="button2" class="buttonc" value="REZULTAT" <?php echo $isDisabledButton2; ?> />
</form>


	<form method="post2" action="index.php" name="izhod" >
        
        <input type="submit" name="button2" class="buttonb" value="NAZAJ"></input>
    </form>	

<!-- navadna forma brez disejblanja za gumb  -->
<!--

<form method="post" action="game.php">
    <input type="submit" name="button1" class="buttona" value="MET1" />
<!--    <input type="submit" name="button2" class="button" value="MET2" />		
</form>  -->

</body>
</html>