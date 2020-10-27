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

	$mypokemon = my_instance($_mypokemon);

	if(isset($_GET['badge']) || isset($_POST['badge'])){
        $badge = $_GET['badge'];
        $badge = $_POST['badge'];
	}
	
	$level = $_SESSION['level'];

	if(isset($_GET['process']) || isset($_POST['process'])){
        $process = $_GET['process'];
        $process = $_POST['process'];
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>やったー！レベルアップだ！</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div align="center">
			<br><br>
			<div class="alternative">
			</div>
			<div class="myposition">
				<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
			</div>
			<div class="alternative">
			</div>
			<br><br>
			<div class="commandbox">
				<div class="dialoguebox">
					<div class="description">
						<?php
							if($process == 222){
						?>
							<h3>
								<?php echo $mypokemon->name; ?>にしんかした！
								<br><br>
								<?php echo $mypokemon->name; ?>のレベルが<?php echo $level; ?>になった！<br><br>
								たいりょくが <?php echo $mypokemon->power; ?>に なった！<br>
								こうげきが <?php echo $mypokemon->offensive; ?>に なった！<br>
								ぼうぎょが <?php echo $mypokemon->defense; ?>に なった！<br>
								すばやさが <?php echo $mypokemon->speed; ?>に なった！<br>
							</h3>
						<?php
							} else {
						?>
							<h3>
								<?php echo $mypokemon->name; ?>のようすがおさまった！
								<br><br>
								<?php echo $mypokemon->name; ?>のレベルが<?php echo $level; ?>になった！<br><br>
								たいりょくが <?php echo $mypokemon->power; ?>に なった！<br>
								こうげきが <?php echo $mypokemon->offensive; ?>に なった！<br>
								ぼうぎょが <?php echo $mypokemon->defense; ?>に なった！<br>
								すばやさが <?php echo $mypokemon->speed; ?>に なった！<br>
							</h3>
						<?php
							}
						?>
					</div>
				</div>
			</div>
			<button type="button" class="btn-square1" onclick="location.href='selectleader.php' "value="リーダーのせんたくがめんにもどる">せんたくがめんにもどる</button>
		</div>
    </body>
</html>