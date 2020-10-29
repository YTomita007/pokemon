<?php
    session_start();

    require '../../system/class/Pokemon.class.php';
    require '../../system/class/Assassinate.class.php';
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

	$mypokelevel = $_POST['mypokelevel'];
	$oppokelevel = $_POST['oppokelevel'];

	$mypokemon = battle_single($_mypokemon, $mypokelevel);
	$oppokemon = battle_single($_oppokemon, $oppokelevel);

	// list($mypokemon, $oppokemon) = battle_instance($_mypokemon, $_oppokemon);
	list($myassass1, $myassass2, $myassass3, $myassass4, $opassass1, $opassass2, $opassass3, $opassass4) = weapon_instance($_mypokemon, $_oppokemon);

	if(isset($_POST["command"])){
		$mypower = $_POST['mypower'];
		$oppower = $_POST['oppower'];

		if(isset($_POST["command"])){
			$mycommand = $_POST["command"];
		}

    	list($mycommand, $opcommand, $myattack, $mycure, $opattack, $opcure) = battle_sequence($mycommand, $myassass1, $myassass2, $myassass3, $myassass4, $opassass1, $opassass2, $opassass3, $opassass4);
		list($mypower, $oppower, $myattack, $opattack) = battle_calculation($mypower, $oppower, $myattack, $mycure, $opattack, $opcure);

	} else {
		$mypower = $mypokemon->get_power();
		$oppower = $oppokemon->get_power();

	}

	if(($mypower < 1) || ($oppower < 1)){
		battle_done($mypokemon, $oppokemon, $mypower, $oppower, $mypokelevel, $oppokelevel);
	}
	// if($mypokemon->get_speed() < $oppokemon->get_speed()){
	// 	if($mypower < 1){
	// 		$_SESSION['winner'] = $oppokemon->identify;
	// 		header('Location: result.php', true, 307);
	// 	} elseif($oppower < 1){
	// 		$_SESSION['winner'] = $mypokemon->identify;
	// 		header('Location: result.php', true, 307);
	// 	}
	// } else {
	// 	if($oppower < 1){
	// 		$_SESSION['winner'] = $mypokemon->identify;
	// 		header('Location: result.php', true, 307);
	// 	} elseif($mypower < 1){
	// 		$_SESSION['winner'] = $oppokemon->identify;
	// 		header('Location: result.php', true, 307);
	// 	}
	// }
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
			<h1>ポケモンバトル！</h1>
			<br><br>
			<div class="battle">
                <div class="leftside">
					<h3><?php echo $mypokemon->name; ?></h3>
                    <h3>HP：<?php echo $mypower; ?>です</h3>
					<img alt="いけー！<?php echo $mypokemon->name; ?>" src="../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
				</div>
				<div class="rightside">
					<h3><?php echo $oppokemon->name; ?></h3>
                    <h3>HP：<?php echo $oppower; ?>です</h3>
					<img alt="いけー！<?php echo $oppokemon->name; ?>" src="../images/pokemons/<?php echo $oppokemon->picture; ?>.png">
				</div>
			</div>
			<br><br>
			<div class="form-box">
				<?php
					if(isset($mycommand)){
				?>
                <div class="situation">
                    <div class="description">
                        <h3><?php echo $mypokemon->name; ?>は「<?php echo $mycommand; ?>」をくりだした！<br><?php echo $myattack; ?>のダメージをあたえた！</h3>
                    </div>
                    <div class="description">
                        <h3><?php echo $oppokemon->name; ?>は「<?php echo $opcommand; ?>」をくりだしてきた！<br><?php echo $opattack; ?>のダメージをあたえた！</h3>
                    </div>
                </div>
				<?php
					}
				?>
                <div class="commandline">
					<P>	★こうげきを せんたくしてください</p>
				</div>
				<form action="battle.php" method="post">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<input type="hidden" name="oppokemon" value="<?php echo $oppokemon->identify; ?>">
					<input type="hidden" name="mypokelevel" value="<?php echo $mypokelevel; ?>">
					<input type="hidden" name="oppokelevel" value="<?php echo $oppokelevel; ?>">
					<input type="hidden" name="mypower" value="<?php echo $mypower; ?>">
					<input type="hidden" name="oppower" value="<?php echo $oppower; ?>">
					<div class="battlecommand">
                        <input type="radio" title="command" name="command" value="<?php echo $myassass1->name; ?>" id="electric" checked>
                        <label for="electric"><?php echo $myassass1->display; ?></label>
                    </div>
                    <div class="battlecommand">
                        <input type="radio" title="command" name="command" value="<?php echo $myassass2->name; ?>" id="whistle">
                        <label for="whistle"><?php echo $myassass2->display; ?></label>
                    </div>
                    <div class="battlecommand">
                        <input type="radio" title="command" name="command" value="<?php echo $myassass3->name; ?>" id="waves">
                        <label for="waves"><?php echo $myassass3->display; ?></label>
                    </div>
                    <div class="battlecommand">
                        <input type="radio" title="command" name="command" value="<?php echo $myassass4->name; ?>" id="lightning">
                        <label for="lightning"><?php echo $myassass4->display; ?></label>
                    </div>
					<br><br>
					<button type="submit" class="btn-square1">たたかう</button>
				</form>
			</div>
		</div>
    </body>
</html>
