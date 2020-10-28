<?php
	session_start();

	require '../../../system/class/Pokemon.class.php';
    require '../../../system/class/Assassinate.class.php';
	require '../../../system/class/Gymleader.class.php';
	require '../../../system/functions/common.php';

	if(isset($_SESSION['mypokemon'])){
		$_mypokemon = $_SESSION['mypokemon'];
	}elseif(isset($_POST['mypokemon'])){
		$_mypokemon = $_POST['mypokemon'];
    }else{
        $_mypokemon = $_GET['mypokemon'];
    }

	$mypokemon = my_instance($_mypokemon);

	if(isset($_GET['badge']) || isset($_POST['badge'])){
        $badge = $_GET['badge'];
        $badge = $_POST['badge'];
	}

	$level = $_SESSION['level'];
	$status = $_SESSION['evolution_status'];
	$_SESSION['evolution_status'] = $status + 1;
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>やったー！レベルアップだ！</title>
		<link rel="stylesheet" href="../../../system/css/style.css">
	</head>
    <body>
		<div align="center">
			<br><br>
			<?php
				if(30 < $level && $status == 0){
			?>
				<div class="myposition">
					<img alt="いけー！<?php echo $mypokemon->get_prename1(); ?>！" src="../../images/pokemons/<?php echo $mypokemon->get_preform1(); ?>.png">
				</div>
			<?php
				} elseif(50 < $level && $status == 1) {
			?>
				<div class="myposition">
					<img alt="いけー！<?php echo $mypokemon->get_prename2(); ?>！" src="../../images/pokemons/<?php echo $mypokemon->get_preform2(); ?>.png">
				</div>
			<?php
				} else {
			?>
				<div class="myposition">
					<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
				</div>
			<?php
				}
			?>
			<br><br>
			<?php
				if (30 < $level && $status == 0){
			?>
				<div class="form-box">
					<div class="commandline">
						<h3>おや、<?php echo $mypokemon->get_prename1(); ?>のようすが・・・？
						<form action="../../../controller.php" method="post">
							<input type="hidden" title="process" name="process" value="222" id="evolution" checked>
							<input type="hidden" name="evocomp" value="1" ?>
							<button type="submit" class="btn-square1">つぎへすすむ</button>
						</div>
					</div>
				</div>
			<?php
				} elseif (50 < $level && $status == 1){
			?>
				<div class="form-box">
					<div class="commandline">
						<h3>おや、<?php echo $mypokemon->get_prename1(); ?>のようすが・・・？
						<form action="../../../controller.php" method="post">
							<input type="hidden" title="process" name="process" value="222" id="evolution" checked>
							<input type="hidden" name="evocomp" value="2" ?>
							<button type="submit" class="btn-square1">つぎへすすむ</button>
						</div>
					</div>
				</div>
			<?php
				} else {
			?>
				<div class="commandbox">
					<div class="dialoguebox">
						<div class="description">
								<h3>
									<?php echo $mypokemon->name; ?>のレベルが<?php echo $level; ?>になった！<br><br>
									たいりょくが <?php echo $mypokemon->get_power(); ?>に なった！<br>
									こうげきが <?php echo $mypokemon->get_offensive(); ?>に なった！<br>
									ぼうぎょが <?php echo $mypokemon->get_defense(); ?>に なった！<br>
									すばやさが <?php echo $mypokemon->get_speed(); ?>に なった！<br>
								</h3>
						</div>
					</div>
				</div>
				<button type="button" class="btn-square1" onclick="location.href='selectleader.php' "value="リーダーのせんたくがめんにもどる">せんたくがめんにもどる</button>
			<?php
				}
			?>
		</div>
    </body>
</html>