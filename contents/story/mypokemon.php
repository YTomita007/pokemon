<?php
	include ('../../allconfig.php');

	unset($_SESSION['mypokemon']);

	$inipoke = initial_pokemon();

	$title = "ポケモンせんたくがめん";
	
	include ('../../header.php');
?>
			<div class="form-box">
				<div class="commandline">
					<P>じぶんの ポケモンを せんたくしてください</p>
				</div>
				<div class="commandline">
					<P>	いまのレベルは『<?php echo $_SESSION['level']; ?>』です</p>
				</div>
				<form action="checkin.php" method="post">
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[0]->identify; ?>" id="<?php echo $inipoke[0]->identify; ?>" checked>
						<label for="<?php echo $inipoke[0]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[0]->name; ?>" src="../images/pokemons/<?php echo $inipoke[0]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[1]->identify; ?>" id="<?php echo $inipoke[1]->identify; ?>">
						<label for="<?php echo $inipoke[1]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[1]->name; ?>" src="../images/pokemons/<?php echo $inipoke[1]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[2]->identify; ?>" id="<?php echo $inipoke[2]->identify; ?>">
						<label for="<?php echo $inipoke[2]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[2]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[2]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[3]->identify; ?>" id="<?php echo $inipoke[3]->identify; ?>">
						<label for="<?php echo $inipoke[3]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[3]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[3]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[4]->identify; ?>" id="<?php echo $inipoke[4]->identify; ?>">
						<label for="<?php echo $inipoke[4]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[4]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[4]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[5]->identify; ?>" id="<?php echo $inipoke[5]->identify; ?>">
						<label for="<?php echo $inipoke[5]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[5]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[5]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[6]->identify; ?>" id="<?php echo $inipoke[6]->identify; ?>">
						<label for="<?php echo $inipoke[6]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[6]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[6]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[7]->identify; ?>" id="<?php echo $inipoke[7]->identify; ?>">
						<label for="<?php echo $inipoke[7]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[7]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[7]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[8]->identify; ?>" id="<?php echo $inipoke[8]->identify; ?>">
						<label for="<?php echo $inipoke[8]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[8]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[8]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
			<?php
				include ('../../footer.php');
			?>
		</div>
    </body>
</html>