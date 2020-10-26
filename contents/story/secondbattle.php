<?php
	session_start();

	require '../../system/class/Pokemon.class.php';
    require '../../system/class/Assassinate.class.php';
	require '../../system/class/Gymleader.class.php';
	require '../../system/functions/common.php';

    if(isset($_SESSION['mypokemon'])){
		$_mypokemon = $_SESSION['mypokemon'];
	}elseif(isset($_POST['mypokemon'])){
		$_mypokemon = $_POST['mypokemon'];
    }else{
        $_mypokemon = $_GET['mypokemon'];
    }

	$mypokemon = my_instance($_mypokemon);
	list($gymleader, $pokemon1, $level1, $pokemon2, $level2, $pokemon3, $level3, $pokemon4, $level4, $pokemon5, $level5, $pokemon6, $level6, $phrases) = leaders_combination($_GET['gymleader']);

	$_SESSION['mypokemon'] = $mypokemon->identify;
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>リーダー<?php echo $gymleader->name; ?>と しょうぶ！</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div class="leftside">
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる！">さいしょにもどる</button>
		</div>
		<div align="center">
			<h1>リーダー<?php echo $gymleader->name; ?>と しょうぶ！</h1>
			<div class="alternative">
			</div>
			<div class="alternative">
				<img alt="ジムリーダー<?php echo $gymleader->name; ?>" src="../images/gymleaders/<?php echo $gymleader->picture; ?>.png">
			</div>
			<div class="alternative">
				<img alt="いけー！<?php echo $pokemon2->name; ?>！" src="../images/pokemons/<?php echo $pokemon2->picture; ?>.png">
			</div>
			<div class="form-box-non">
				<div class="commandbox">
					<div class="myposition">
						<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
					</div>
					<div class="dialoguebox">
						<div class="description">
							<p class=scroll>
								<?php echo $phrases[1]; ?>
							</p>
						</div>
					</div>
				</div>
				<form action="../../controller.php" method="post">
					<input type="hidden" name="process" value="203">
					<input type="hidden" name="orders" value="2">
					<input type="hidden" name="level" value="<?php echo $level2; ?>">
					<input type="hidden" name="gymleader" value="<?php echo $gymleader->identify; ?>">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<input type="hidden" name="oppokemon" value="<?php echo $pokemon2->identify; ?>">
					<button type="submit" class="btn-square1"><?php echo $pokemon2->name; ?>とたいけつ！</button>
				</form>
			</div>
		</div>
    </body>
</html>
