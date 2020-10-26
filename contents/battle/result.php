<?php
	session_start();
	
	require '../../system/class/Pokemon.class.php';
	require '../../system/functions/common.php';

    $winner = winner_pokemon($_SESSION['winner']);
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>ポケモンバトル結果</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div align="center">
			<h1>ポケモンバトル結果</h1>
			<br><br>
			<h2><?php echo $winner->name; ?>の勝ち！</h2>
			<div class="winner">
				<img alt="いけー！<?php echo $winner->name; ?>！" src="../images/pokemons/<?php echo $winner->picture; ?>.png">
			</div>
			<br><br>
            <button class="btn-square1" onclick="location.href='battle.php'">>>もう一回たたかう<<</button>
            <button class="btn-square2" onclick="location.href='<?php echo $root; ?>'">>>最初に戻る<<</button>
		</div>
    </body>
</html>