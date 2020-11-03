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
	list($gymleader, $pokemon1, $level1, $pokemon2, $level2, $pokemon3, $level3, $pokemon4, $level4, $pokemon5, $level5, $pokemon6, $level6, $phrases) = leaders_combination($_GET['gymleader']);

	$_SESSION['mypokemon'] = $mypokemon->identify;

	$title = "リーダー{$gymleader->name}と しょうぶ！";

	include ('../../../header.php');
?>
			<div class="alternative">
				<img alt="いけー！<?php echo $pokemon1->name; ?>！" src="../../images/pokemons/<?php echo $pokemon1->picture; ?>.png">
			</div>
			<div class="alternative">
				<img alt="ジムリーダー<?php echo $gymleader->name; ?>" src="../../images/gymleaders/<?php echo $gymleader->picture; ?>.png">
			</div>
			<div class="alternative">
				<img alt="いけー！<?php echo $pokemon2->name; ?>！" src="../../images/pokemons/<?php echo $pokemon2->picture; ?>.png">
			</div>
			<div class="form-box-non">
				<div class="commandbox">
					<div class="myposition">
						<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
					</div>
					<div class="dialoguebox">
						<div class="description">
							<p class=scroll>
								<?php echo $phrases[3]; ?>
							</p>
						</div>
					</div>
				</div>
				<button class="btn-square1" onclick="location.href='../../../controller.php?mypokemon=<?php echo $mypokemon->identify ?>&process=105&gymleader=<?php echo $gymleader->identify ?>'">>>もういちどたたかう<<</button>
	            <button class="btn-square2" onclick="location.href='../checkin.php'">>>さいしょにもどる<<</button>
			</div>
			<?php
				include ('../../../footer.php');
			?>
		</div>
    </body>
</html>
