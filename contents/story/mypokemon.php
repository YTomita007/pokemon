<?php
	session_start();

	unset($_SESSION['mypokemon']);
	
	require '../../system/class/Pokemon.class.php';
	require '../../system/functions/common.php';

	$inipoke = initial_pokemon();

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>たたかえ！ジムリーダー編</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div class="leftside">
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる！">さいしょにもどる</button>
		</div>
		<div align="center">
			<h1>たたかえ！ジムリーダー編</h1>
			<div class="form-box">
				<div class="commandline">
					<P>	★自分のポケモンを選択してください</p>
				</div>
				<form action="selectleader.php" method="post">
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[0]->identify; ?>" id="<?php echo $inipoke[0]->identify; ?>" checked>
						<label for="<?php echo $inipoke[0]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[0]->name; ?>" src="../images/pokemons/<?php echo $inipoke[0]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[1]->identify; ?>" id="<?php echo $inipoke[1]->identify; ?>">
						<label for="<?php echo $inipoke[1]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[1]->name; ?>" src="../images/pokemons/<?php echo $inipoke[1]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[2]->identify; ?>" id="<?php echo $inipoke[2]->identify; ?>">
						<label for="<?php echo $inipoke[2]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[2]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[2]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[3]->identify; ?>" id="<?php echo $inipoke[3]->identify; ?>">
						<label for="<?php echo $inipoke[3]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[3]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[3]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[4]->identify; ?>" id="<?php echo $inipoke[4]->identify; ?>">
						<label for="<?php echo $inipoke[4]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[4]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[4]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[5]->identify; ?>" id="<?php echo $inipoke[5]->identify; ?>">
						<label for="<?php echo $inipoke[5]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[5]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[5]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
		</div>
    </body>
</html>