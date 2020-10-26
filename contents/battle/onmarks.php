<?php
	session_start();

	require '../../system/class/Pokemon.class.php';
	require '../../system/class/Assassinate.class.php';
	require '../../system/functions/common.php';
	    
	if(isset($_SESSION['mypokemon'])){
		$_mypokemon = $_SESSION['mypokemon'];
	}elseif(isset($_POST['mypokemon'])){
		$_mypokemon = $_POST['mypokemon'];
    }else{
        $_mypokemon = $_GET['mypokemon'];
    }
	
	if(isset($_SESSION['oppokemon'])){
		$_oppokemon = $_SESSION['oppokemon'];
	}elseif(isset($_POST['oppokemon'])){
		$_oppokemon = $_POST['oppokemon'];
    }else{
        $_oppokemon = $_GET['oppokemon'];
	}

	list($mypokemon, $oppokemon) = battle_instance($_mypokemon, $_oppokemon);

	$_SESSION['oppokemon'] = $oppokemon->identify;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>ポケモンバトル</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div class="leftside">
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる！">さいしょにもどる</button>
		</div>
		<div align="center">
			<h1>ポケモン選択画面！</h1>
			<div class="form-box">
				<form action="battle.php" method="post">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<input type="hidden" name="oppokemon" value="<?php echo $oppokemon->identify; ?>">
					<input type="hidden" name="mypower" value="<?php echo $mypokemon->power; ?>">
					<input type="hidden" name="oppower" value="<?php echo $oppokemon->power; ?>">
					<div class="ready">
						<div class="leftside">
							<h3>じぶんの えらんだポケモンは<?php echo $mypokemon->name; ?>です</h3>
							<h3>HP：<?php echo $mypokemon->power; ?>です</h3>
							<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
						</div>
						<div class="rightside">
							<h3>あいての えらんだポケモンは<?php echo $oppokemon->name; ?>です</h3>
							<h3>HP：<?php echo $oppokemon->power; ?>です</h3>
							<img alt="いけー！<?php echo $oppokemon->name; ?>！" src="../images/pokemons/<?php echo $oppokemon->picture; ?>.png">
						</div>
					</div>
					<br><br>
					<div class="parallel">
						<button type="button" class="btn-square2" onclick="location.href='oppokemon.php' "value="えらびなおし!">えらびなおし!</button>
						<button type="submit" class="btn-square1">けってい！</button>
					</div>
				</form>
			</div>
		</div>
    </body>
</html>