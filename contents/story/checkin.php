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

	$_SESSION['mypokemon'] = $mypokemon->get_identify();

	$gymleaders = gymleaders_allinstance();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>たいせんのじゅんびをしよう！</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div class="leftside">
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる！">さいしょにもどる</button>
		</div>
		<div align="center">
			<h1>たいせんのじゅんびをしよう！</h1>
			<div class="form-box">
				<div class="commandline">
					<P>	★つぎのアクションを せんたくしてください</p>
				</div>
				<form action="../../controller.php" method="post">
					<input type="hidden" name="process" value="103">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<div class="alternative">
						<h3>たたかいへいく</h3>
						<input type="radio" title="playmode" name="playmode" value="battle" id="battle" checked>
						<label for="battle">
							<img alt="ストーリーモード" src="../images/items/monsterball.png">
						</label>
					</div>
					<div class="alternative">
						<h3>ポケモンのせわをする</h3>
						<input type="radio" title="playmode" name="playmode" value="profile" id="profile">
						<label for="profile">
							<img alt="セッティング" src="../images/items/greenball.png">
						</label>
					</div>
					<br><br><br><br>
					<button type="button" class="btn-square2" onclick="location.href='mypokemon.php' "value="えらびなおし!">えらびなおし!</button>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
		</div>
    </body>
</html>
