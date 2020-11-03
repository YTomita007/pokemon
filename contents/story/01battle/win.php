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

	$badge = badge_awards($_GET['gymleader']);

	$title = "リーダー{$gymleader->name}に しょうり！";

	include ('../../../header.php');
?>
			<div class="alternative">
			</div>
			<div class="alternative">
				<img alt="ジムリーダー<?php echo $gymleader->name; ?>" src="../../images/gymleaders/<?php echo $gymleader->picture; ?>.png">
			</div>
			<div class="alternative">
				<img alt="ジムリーダー<?php echo $gymleader->name; ?>" src="../../images/items/<?php echo $badge; ?>.png">
			</div>
			<div class="form-box-non">
				<div class="commandbox">
					<div class="myposition">
						<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
					</div>
					<div class="dialoguebox">
						<div class="description">
							<p class=scroll>
								<?php echo $phrases[2]; ?>
							</p>
						</div>
					</div>
				</div>
				<form action="../../../controller.php" method="post">
					<input type="hidden" name="process" value="221">
					<input type="hidden" name="badge" value="<?php echo $badge; ?>">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<button type="submit" class="btn-square1">せんたくがめんにもどる</button>
				</form>
			</div>
			<?php
				include ('../../../footer.php');
			?>
		</div>
    </body>
</html>
