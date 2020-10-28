<?php
	session_start();
	
	require '../../system/class/Pokemon.class.php';
	require '../../system/functions/base.php';

    $winner = winner_pokemon($_SESSION['winner']);
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
            <button class="btn-square1" onclick="location.href='battle.php'">>>もう いっかい たたかう<<</button>
            <button class="btn-square2" onclick="location.href='<?php echo $root; ?>'">>>さいしょに もどる<<</button>
		</div>
    </body>
</html>