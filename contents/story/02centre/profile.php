<?php
	include ('../../../allconfig.php');

	if(isset($_SESSION['mypokemon'])){
		$_mypokemon = $_SESSION['mypokemon'];
	}elseif(isset($_POST['mypokemon'])){
		$_mypokemon = $_POST['mypokemon'];
    }else{
        $_mypokemon = $_GET['mypokemon'];
    }

	$mypokemon = my_instance($_mypokemon);

	$title = "ポケモンセンターてきな";

	include ('../../../header.php');
?>
			<div class="profile">
				<h3><?php echo $mypokemon->name; ?></h3>
				<div class="winner">
					<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
				</div>
			</div>
			<div class="profile">
				<table>
					<tr>
						<th>こうもく</th>
						<th>ステータス</th>
					</tr>
					<tr>
						<td>レベル</td>
						<td><?php echo $_SESSION['level']; ?></td>
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
			<br><br><br>
			<button type="button" class="btn-square2" onclick="location.href='../checkin.php' "value="メニューにもどる">メニューにもどる</button>
			<br><br><br>
			<?php
				include ('../../../footer.php');
			?>
		</div>
    </body>
</html>