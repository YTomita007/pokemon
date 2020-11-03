<?php
	include ('../../allconfig.php');

	if(isset($_SESSION['winner'])){
		$_mypokemon = $_POST['mypokemon'];
		$_oppokemon = $_POST['oppokemon'];
		$mypokelevel = $_POST['mypokelevel'];
		$oppokelevel = $_POST['oppokelevel'];
	} else {
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
	
		if(isset($_POST['mypokelevel'])){
			$mypokelevel = $_POST['mypokelevel'];
			$oppokelevel = $_POST['oppokelevel'];
			$oppokelevel = $_GET['pokelevel'];
		} else {
			$mypokelevel = $_GET['mypokelevel'];
			$oppokelevel = $_GET['pokelevel'];
		}	
	}	    

	$mypokemon = battle_single($_mypokemon, $mypokelevel);
	$oppokemon = battle_single($_oppokemon, $oppokelevel);

	$_SESSION['battle_mypokemon'] = $mypokemon->identify;
	$_SESSION['battle_oppokemon'] = $oppokemon->identify;

	$title = "ポケモンバトル";

	include ('../../header.php');
?>
			<div class="form-box">
				<form action="battle.php" method="post">
					<input type="hidden" name="mypokemon" value="<?php echo $mypokemon->identify; ?>">
					<input type="hidden" name="oppokemon" value="<?php echo $oppokemon->identify; ?>">
					<input type="hidden" name="mypokelevel" value="<?php echo $mypokelevel; ?>">
					<input type="hidden" name="oppokelevel" value="<?php echo $oppokelevel; ?>">
					<input type="hidden" name="mypower" value="<?php echo $mypokemon->get_power(); ?>">
					<input type="hidden" name="oppower" value="<?php echo $oppokemon->get_power(); ?>">
					<div class="ready">
						<div class="leftside">
							<h3>じぶんの えらんだポケモンは<?php echo $mypokemon->name; ?>です</h3>
							<h3>HP：<?php echo $mypokemon->get_power(); ?>です</h3>
							<img alt="いけー！<?php echo $mypokemon->name; ?>！" src="../images/pokemons/<?php echo $mypokemon->picture; ?>.png">
						</div>
						<div class="rightside">
							<h3>あいての えらんだポケモンは<?php echo $oppokemon->name; ?>です</h3>
							<h3>HP：<?php echo $oppokemon->get_power(); ?>です</h3>
							<img alt="いけー！<?php echo $oppokemon->name; ?>！" src="../images/pokemons/<?php echo $oppokemon->picture; ?>.png">
						</div>
					</div>
					<br><br>
					<div class="parallel">
						<button type="button" class="btn-square2" onclick="location.href='mypokemon.php' "value="えらびなおし">えらびなおし</button>
						<button type="submit" class="btn-square1">けってい！</button>
					</div>
				</form>
			</div>
			<?php
				include ('../../footer.php');
			?>
		</div>
    </body>
</html>