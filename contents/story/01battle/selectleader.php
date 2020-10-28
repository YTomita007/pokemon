<?php
	session_start();

	require '../../../system/class/Pokemon.class.php';
	require '../../../system/class/Assassinate.class.php';
	require '../../../system/class/Gymleader.class.php';
	require '../../../system/functions/base.php';

    if(isset($_SESSION['mypokemon'])){
		$_mypokemon = $_SESSION['mypokemon'];
	}elseif(isset($_POST['mypokemon'])){
		$_mypokemon = $_POST['mypokemon'];
    }else{
        $_mypokemon = $_GET['mypokemon'];
    }

	$mypokemon = my_instance($_mypokemon);

	$_SESSION['mypokemon'] = $mypokemon->get_identify();

	$gymleaders = gymleaders_allinstance();

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>たたかえ！ジムリーダー！</title>
		<link rel="stylesheet" href="../../../system/css/style.css">
	</head>
    <body>
		<div class="leftside">
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる！">さいしょにもどる</button>
		</div>
		<div align="center">
			<h1>たたかえ！ジムリーダー！</h1>
			<div class="leftside">
				<P>	★じぶんの えらんだポケモンは<b><?php echo $mypokemon->name; ?></b>です</p>
				<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
			</div>
			<div class="form-box">
				<div class="commandline">
					<P>	★たいせんする ジムリーダーを せんたくしてください</p>
				</div>
				<form action="../../../controller.php" method="post">
					<input type="hidden" name="process" value="105">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[0]->identify; ?>" id="<?php echo $gymleaders[0]->identify; ?>" checked>
						<label for="<?php echo $gymleaders[0]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[0]->name; ?>" src="../../images/gymleaders/<?php echo $gymleaders[0]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['graybadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[0]; ?>" src="../../images/items/<?php echo $badge_ids[0]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[1]->identify; ?>" id="<?php echo $gymleaders[1]->identify; ?>">
						<label for="<?php echo $gymleaders[1]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[1]->name; ?>" src="../../images/gymleaders/<?php echo $gymleaders[1]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['bluebadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[1]; ?>" src="../../images/items/<?php echo $badge_ids[1]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[2]->identify; ?>" id="<?php echo $gymleaders[2]->identify; ?>">
						<label for="<?php echo $gymleaders[2]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[2]->name; ?>！" src="../../images/gymleaders/<?php echo $gymleaders[2]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['orangebadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[2]; ?>" src="../../images/items/<?php echo $badge_ids[2]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[3]->identify; ?>" id="<?php echo $gymleaders[3]->identify; ?>">
						<label for="<?php echo $gymleaders[3]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[3]->name; ?>！" src="../../images/gymleaders/<?php echo $gymleaders[3]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['rainbowbadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[3]; ?>" src="../../images/items/<?php echo $badge_ids[3]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<br><br>
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[4]->identify; ?>" id="<?php echo $gymleaders[4]->identify; ?>">
						<label for="<?php echo $gymleaders[4]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[4]->name; ?>！" src="../../images/gymleaders/<?php echo $gymleaders[4]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['pinkbadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[4]; ?>" src="../../images/items/<?php echo $badge_ids[4]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[5]->identify; ?>" id="<?php echo $gymleaders[5]->identify; ?>">
						<label for="<?php echo $gymleaders[5]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[5]->name; ?>！" src="../../images/gymleaders/<?php echo $gymleaders[5]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['goldbadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[5]; ?>" src="../../images/items/<?php echo $badge_ids[5]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[6]->identify; ?>" id="<?php echo $gymleaders[6]->identify; ?>">
						<label for="<?php echo $gymleaders[6]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[6]->name; ?>！" src="../../images/gymleaders/<?php echo $gymleaders[6]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['crimsonbadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[6]; ?>" src="../../images/items/<?php echo $badge_ids[6]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<div class="alternative">
						<input type="radio" title="gymleader" name="gymleader" value="<?php echo $gymleaders[7]->identify; ?>" id="<?php echo $gymleaders[7]->identify; ?>">
						<label for="<?php echo $gymleaders[7]->identify; ?>">
							<img alt="ジムリーダー<?php echo $gymleaders[7]->name; ?>！" src="../../images/gymleaders/<?php echo $gymleaders[7]->picture; ?>.png">
						</label>
						<?php if(isset($_SESSION['greenbadge'])){ ?>
							<div class="badge">
								<img alt="<?php echo $badge_names[7]; ?>" src="../../images/items/<?php echo $badge_ids[7]; ?>.png">
							</div>
						<?php } ?>
					</div>
					<br><br>
					<button type="button" class="btn-square2" onclick="location.href='../checkin.php' "value="えらびなおし!">えらびなおし!</button>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
		</div>
    </body>
</html>
