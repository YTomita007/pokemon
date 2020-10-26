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
	
	$mypokemon = my_instance($_mypokemon);

	$inipoke = initial_pokemon();

	$_SESSION['mypokemon'] = $mypokemon->identify;;
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
			<div class="leftside">
				<P>	★じぶんの えらんだポケモンは<b><?php echo $mypokemon->name; ?></b>です</p>
				<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
			</div>
			<br>
			<div class="form-box">
				<div class="commandline">
					<P>	★あいての ポケモンを せんたくしてください</p>
				</div>
				<form action="onmarks.php" method="post">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<div class="alternative">
						<input type="radio" title="oppokemon" name="oppokemon" value="<?php echo $inipoke[0]->identify; ?>" id="<?php echo $inipoke[0]->identify; ?>" checked>
						<label for="<?php echo $inipoke[0]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[0]->name; ?>" src="../images/pokemons/<?php echo $inipoke[0]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="oppokemon" name="oppokemon" value="<?php echo $inipoke[1]->identify; ?>" id="<?php echo $inipoke[1]->identify; ?>">
						<label for="<?php echo $inipoke[1]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[1]->name; ?>" src="../images/pokemons/<?php echo $inipoke[1]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="oppokemon" name="oppokemon" value="<?php echo $inipoke[2]->identify; ?>" id="<?php echo $inipoke[2]->identify; ?>">
						<label for="<?php echo $inipoke[2]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[2]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[2]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<div class="alternative">
						<input type="radio" title="oppokemon" name="oppokemon" value="<?php echo $inipoke[3]->identify; ?>" id="<?php echo $inipoke[3]->identify; ?>">
						<label for="<?php echo $inipoke[3]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[3]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[3]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="oppokemon" name="oppokemon" value="<?php echo $inipoke[4]->identify; ?>" id="<?php echo $inipoke[4]->identify; ?>">
						<label for="<?php echo $inipoke[4]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[4]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[4]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="oppokemon" name="oppokemon" value="<?php echo $inipoke[5]->identify; ?>" id="<?php echo $inipoke[5]->identify; ?>">
						<label for="<?php echo $inipoke[5]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[5]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[5]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[6]->identify; ?>" id="<?php echo $inipoke[6]->identify; ?>">
						<label for="<?php echo $inipoke[6]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[6]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[6]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[7]->identify; ?>" id="<?php echo $inipoke[7]->identify; ?>">
						<label for="<?php echo $inipoke[7]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[7]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[7]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[8]->identify; ?>" id="<?php echo $inipoke[8]->identify; ?>">
						<label for="<?php echo $inipoke[8]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[8]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[8]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<button type="button" class="btn-square2" onclick="location.href='mypokemon.php' "value="えらびなおし!">えらびなおし!</button>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
		</div>
    </body>
</html>