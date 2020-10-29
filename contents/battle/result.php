<?php
	session_start();
	
	require '../../system/class/Pokemon.class.php';
	require '../../system/functions/base.php';

	if(isset($_SESSION['battle_mypokemon'])){
		$_mypokemon = $_SESSION['battle_mypokemon'];
	}elseif(isset($_POST['mypokemon'])){
		$_mypokemon = $_POST['mypokemon'];
    }else{
        $_mypokemon = $_GET['mypokemon'];
    }
	
	if(isset($_SESSION['battle_oppokemon'])){
		$_oppokemon = $_SESSION['battle_oppokemon'];
	}elseif(isset($_POST['oppokemon'])){
		$_oppokemon = $_POST['oppokemon'];
    }else{
        $_oppokemon = $_GET['oppokemon'];
	}

	if(isset($_POST['mypokelevel'])){
		$mypokelevel = $_POST['mypokelevel'];
		$oppokelevel = $_POST['oppokelevel'];
	} else {
		$mypokelevel = $_GET['mypokelevel'];
		$oppokelevel = $_GET['pokelevel'];
	}

	$mypokemon = battle_single($_mypokemon, $mypokelevel);
	$oppokemon = battle_single($_oppokemon, $oppokelevel);

	$winner = winner_pokemon($_SESSION['winner']);
	unset($_SESSION['battle_mypokemon']);
	unset($_SESSION['battle_oppokemon']);
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>ポケモンバトルのけっか</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div align="center">
			<h1>ポケモンバトルのけっか</h1>
			<br><br>
			<h2><?php echo $winner->name; ?>のかち！</h2>
			<div class="winner">
				<img alt="いけー！<?php echo $winner->name; ?>！" src="../images/pokemons/<?php echo $winner->picture; ?>.png">
			</div>
			<br><br>
			<form action="onmarks.php" method="post">
				<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
				<input type="hidden" name="oppokemon" value="<?php echo $oppokemon->identify; ?>">
				<input type="hidden" name="mypokelevel" value="<?php echo $mypokelevel; ?>">
				<input type="hidden" name="oppokelevel" value="<?php echo $oppokelevel; ?>">
	            <button type="submit" class="btn-square1">>>もう いっかい たたかう<<</button>
			</form>
            <button class="btn-square2" onclick="location.href='<?php echo $root; ?>'">>>さいしょに もどる<<</button>
		</div>
    </body>
</html>