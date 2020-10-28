<?php
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

	if(isset($_POST['oppokemon'])){
		$_oppokemon = $_POST['oppokemon'];
    }else{
        $_oppokemon = $_GET['oppokemon'];
	}

	if(isset($_GET['gymleader']) || isset($_POST['gymleader'])){
        $_gymleader = $_GET['gymleader'];
        $_gymleader = $_POST['gymleader'];
    }

	if(isset($_GET['orders']) || isset($_POST['orders'])){
        $orders = $_GET['orders'];
        $orders = $_POST['orders'];
    }

	if(isset($_GET['level']) || isset($_POST['level'])){
        $_oplevel = $_GET['level'];
        $_oplevel = $_POST['level'];
    }

	$mypokemon = my_instance($_mypokemon, 15);
	$gymleader = gymleader_instance($_gymleader);
	$oppokemon = leaders_pokemon_instance($_oppokemon, $_oplevel);
	list($myassass1, $myassass2, $myassass3, $myassass4, $opassass1, $opassass2, $opassass3, $opassass4) = weapon_instance($_mypokemon, $_oppokemon);

	if(isset($_SESSION['winner'])){
		unset($_SESSION['winner']);
		$mypower = $mypokemon->get_power();
		$oppower = $oppokemon->get_power();
	} elseif($_GET['mypokemon']) {
		$mypower = $mypokemon->get_power();
		$oppower = $oppokemon->get_power();
	} else {
		$mypower = $_POST['mypower'];
		$oppower = $_POST['oppower'];

		if(isset($_POST["command"])){
			$mycommand = $_POST["command"];
		}

    	list($mycommand, $opcommand, $myattack, $mycure, $opattack, $opcure) = battle_sequence($mycommand, $myassass1, $myassass2, $myassass3, $myassass4, $opassass1, $opassass2, $opassass3, $opassass4);
		list($mypower, $oppower, $myattack, $opattack) = battle_calculation($mypower, $oppower, $myattack, $mycure, $opattack, $opcure);
	}

	if($oppower < 61 && $orders == 2){
		list($oppokemon, $opattack, $opcure) = strengthen($oppokemon, $opattack, $opcure);
	}

    if($mypower < 1){
        header('Location: ../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=212"."&gymleader=".$gymleader->identify, true, 307);
    } elseif($oppower < 1){
    		if($orders > 1){
    			header('Location: ../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=211"."&gymleader=".$gymleader->identify, true, 307);
    		} else {
    			header('Location: ../../controller.php?mypokemon='.$mypokemon->identify."&oppokemon=".$oppokemon->identify."&process=202"."&gymleader=".$gymleader->identify, true, 307);
    		}
	}

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
                        <h3><?php echo $mypokemon->name; ?>は「<?php echo $mycommand; ?>」を繰り出した！<br><?php echo $myattack; ?>のダメージを与えた！</h3>
                    </div>
                    <div class="description">
                        <h3><?php echo $oppokemon->name; ?>は「<?php echo $opcommand; ?>」を繰り出してきた！<br><?php echo $opattack; ?>のダメージを与えた！</h3>
                    </div>
                </div>
				<?php
					}
				?>
                <div class="commandline">
					<P>	★攻撃を選択してください</p>
				</div>
				<form action="battle.php" method="post">
					<input type="hidden" name="gymleader" value="<?php echo $gymleader->identify; ?>">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<input type="hidden" name="oppokemon" value="<?php echo $oppokemon->identify; ?>">
					<input type="hidden" name="mypower" value="<?php echo $mypower; ?>">
					<input type="hidden" name="oppower" value="<?php echo $oppower; ?>">
					<input type="hidden" name="orders" value="<?php echo $orders; ?>">
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
