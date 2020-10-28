<?php
	require '../../system/functions/base.php';
	
	if(isset($_GET['message'])){
		$message = $_GET['message'];
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=encoding">
		<title>セッティング</title>
		<link rel="stylesheet" href="../../system/css/style.css">
	</head>
    <body>
		<div align="center">
			<h1>セッティングがめん</h1>
			<?php if(isset($_GET['message'])){ ?>
				<div class="description">
					<h2><?php echo $message; ?></h2>
				</div>
			<?php } ?>
			<div class="form-box">
				<form action="../../controller.php" method="post">
					<input type="hidden" name="process" value="901">
					<div class="selectcommand">
						<div class="commandline">
							<P>	しゅとくしたバッジや<br>
								ポケモンのレベルをクリアしますか？</p>
						</div>
					</div>
					<div class="selectcommand">
						<input type="checkbox" name="dataclear" value="yes" id="togglelabel" style="display:none;">
						<label class="togglelabel" for="togglelabel">YES!</label>
					</div>
					<br><br>
					<div class="selectcommand">
						<div class="commandline">
							<P>	ゲームの なんいんど を せっていしてください？</p>
						</div>
					</div>
					<br>
					<div class="selectcommand">
						<h3>かんたん</h3>
						<input type="radio" title="degrees" name="degrees" value="easy" id="easy">
						<label for="easy">
							<img alt="ストーリーモード" src="../images/items/nyasu1.png">
						</label>
					</div>
					<div class="selectcommand">
						<h3>それなり</h3>
						<input type="radio" title="degrees" name="degrees" value="moderate" id="moderate" checked>
						<label for="moderate">
							<img alt="バトルモード" src="../images/items/nyasu2.png">
						</label>
					</div>
					<div class="selectcommand">
						<h3>むづいよ</h3>
						<input type="radio" title="degrees" name="degrees" value="hard" id="hard">
						<label for="hard">
							<img alt="セッティング" src="../images/items/nyasu3.png">
						</label>
					</div>
					<br><br><br><br>
					<button type="button" class="btn-square2" onclick="location.href='<?php echo $root; ?>' "value="さいしょにもどる">さいしょにもどる</button>
					<button type="submit" class="btn-square1">けってい！</button>
				</form>
			</div>
		</div>
    </body>
</html>
