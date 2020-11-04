<?php
	include ('../../allconfig.php');
	
	$inipoke = initial_pokemon();

	unset($_SESSION['battle_mypokemon']);
	unset($_SESSION['battle_oppokemon']);
	$_SESSION['battle_mode'] = true;

	$title = "ポケモンせんたくがめん";

	include ('../../header.php');
?>
			<div class="form-box">
				<div class="commandline">
					<P>	★じぶんの ポケモンを せんたくしてください</p>
				</div>
				<form action="../../controller.php" method="post">
					<input type="hidden" name="process" value="301">
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
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[9]->identify; ?>" id="<?php echo $inipoke[9]->identify; ?>">
						<label for="<?php echo $inipoke[9]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[9]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[9]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[10]->identify; ?>" id="<?php echo $inipoke[10]->identify; ?>">
						<label for="<?php echo $inipoke[10]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[10]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[10]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[11]->identify; ?>" id="<?php echo $inipoke[11]->identify; ?>">
						<label for="<?php echo $inipoke[11]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[11]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[11]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[12]->identify; ?>" id="<?php echo $inipoke[12]->identify; ?>">
						<label for="<?php echo $inipoke[12]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[12]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[12]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[13]->identify; ?>" id="<?php echo $inipoke[13]->identify; ?>">
						<label for="<?php echo $inipoke[13]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[13]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[13]->picture; ?>.png">
						</label>
					</div>
					<div class="alternative">
						<input type="radio" title="mypokemon" name="mypokemon" value="<?php echo $inipoke[14]->identify; ?>" id="<?php echo $inipoke[14]->identify; ?>">
						<label for="<?php echo $inipoke[14]->identify; ?>">
							<img alt="いけー！<?php echo $inipoke[14]->name; ?>！" src="../images/pokemons/<?php echo $inipoke[14]->picture; ?>.png">
						</label>
					</div>
					<br><br>
					<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="はじめにもどる">はじめにもどる</button>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
			<?php
				include ('../../footer.php');
			?>
		</div>
    </body>
</html>