<?php
	require '../../system/class/Pokemon.class.php';
    require '../../system/class/Assassinate.class.php';
	require '../../system/class/Gymleader.class.php';
	require '../../system/functions/base.php';

	$nextaction = $_GET['process'];
	$process = $_GET['process'];

	if($nextaction == 301){
		$_mypokemon = $_GET['mypokemon'];
        $mypokemon = battle_single($_mypokemon, 17);
		$nextaction = 302;
	} elseif($nextaction == 303) {
		$mypokelevel = $_GET['pokelevel'];
		$_mypokemon = $_GET['mypokemon'];
		$_oppokemon = $_GET['oppokemon'];
        $mypokemon = battle_single($_mypokemon, $mypokelevel);
        $oppokemon = battle_single($_oppokemon, 17);
		$nextaction = 304;
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>ポケモンのレベルちょうせいしつ</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div class="leftside">
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる！">さいしょにもどる</button>
		</div>
		<div align="center">
			<form action="../../controller.php" method="post">
				<input type="hidden" name="process" value="<?php echo $nextaction; ?>">
				<input type="hidden" name="mypokelevel" value="<?php echo $mypokelevel; ?>">
				<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
				<input type="hidden" name="oppokemon" value="<?php echo $oppokemon->identify; ?>">
				<div class="profile">
					<?php
						if($process == 301) {
					?>
						<h3><?php echo $mypokemon->name; ?></h3>
						<div class="winner">
							<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
						</div>
					<?php
						} elseif($process == 303) {
					?>
						<h3><?php echo $oppokemon->name; ?></h3>
						<div class="winner">
							<img alt="いけー！<?php echo $oppokemon->name; ?>！" src="../images/pokemons/<?php echo $oppokemon->picture; ?>.png">
						</div>
					<?php
						}
					?>
				</div>
				<div class="profile">
				<select name= "pokelevel">
					<option value = "nonbadge">レベル17</option>
					<option value = "graybadge">レベル22</option>
					<option value = "bluebadge">レベル27</option>
					<option value = "orangebadge">レベル33</option>
					<option value = "rainbowbadge">レベル39</option>
					<option value = "pinkbadge">レベル45</option>
					<option value = "goldbadge">レベル51</option>
					<option value = "crimsonbadge">レベル57</option>
					<option value = "greenbadge">レベル63</option>
				</select>
				</div>
				<br><br><br>
				<button type="submit" class="btn-square1">けってい！</button>
			</form>
			<br><br><br>
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="メニューにもどる">メニューにもどる</button>
		</div>
    </body>
</html>