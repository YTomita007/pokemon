<?php
	include ('allconfig.php');

	unset($_SESSION['winner']);
	unset($_SESSION['battle_mypokemon']);
	unset($_SESSION['battle_oppokemon']);
	unset($_SESSION['battle_mode']);

	$title = "ポケモンであそぼう";
	include ('header.php');
?>
			<div class="form-box">
				<div class="commandline">
					<P>	★あそびたいモードを せんたくしてください</p>
				</div>
				<form action="controller.php" method="post">
					<input type="hidden" name="process" value="101">
					<div class="alternative">
						<h3>ストーリーモード</h3>
						<input type="radio" title="playmode" name="playmode" value="rollplay" id="rollplay" checked>
						<label for="rollplay">
							<img alt="ストーリーモード" src="contents/images/items/monsterball.png">
						</label>
					</div>
					<div class="alternative">
						<h3>バトルモード</h3>
						<input type="radio" title="playmode" name="playmode" value="battle" id="battle">
						<label for="battle">
							<img alt="バトルモード" src="contents/images/items/superball.png">
						</label>
					</div>
					<div class="alternative">
						<h3>セッティング</h3>
						<input type="radio" title="playmode" name="playmode" value="setting" id="setting">
						<label for="setting">
							<img alt="セッティング" src="contents/images/items/greenball.png">
						</label>
					</div>
					<br><br><br><br>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
			<?php
				include ('footer.php');
			?>
        </div>
    </body>
</html>
	