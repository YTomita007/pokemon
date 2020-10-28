<?php
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
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>やったー！レベルアップだ！</title>
		<link rel="stylesheet" href="../../../system/css/style.css">
	</head>
    <body>
		<div class="leftside">
			<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる！">さいしょにもどる</button>
		</div>
		<div align="center">
			<div class="alternative">
				<P>	★じぶんの えらんだポケモンは<b><?php echo $mypokemon->name; ?></b>です</p>
				<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
			</div>
			<div class="alternative">
				<table>
					<tr>
						<th>こうもく</th>
						<th>ステータス</th>
					</tr>
					<tr>
						<td>たいりょく</td>
						<td><?php echo $mypokemon->get_power(); ?></td>
					</tr>
					<tr>
						<td>こうげきりょく</td>
						<td><?php echo $mypokemon->get_offensive(); ?></td>
					</tr>
					<tr>
						<td>ぼうぎょりょく</td>
						<td><?php echo $mypokemon->get_defense(); ?></td>
					</tr>
					<tr>
						<td>すばやさ</td>
						<td><?php echo $mypokemon->get_speed(); ?></td>
					</tr>
					<tr>
						<td>しゅうとくわざ１</td>
						<td></td>
					</tr>
					<tr>
						<td>しゅうとくわざ２</td>
						<td></td>
					</tr>
					<tr>
						<td>しゅうとくわざ３</td>
						<td></td>
					</tr>
					<tr>
						<td>しゅうとくわざ４</td>
						<td></td>
					</tr>
				</table>
			</div>
			<button type="button" class="btn-square2" onclick="location.href='../checkin.php' "value="もとにもどる">もとにもどる</button>
		</div>
    </body>
</html>