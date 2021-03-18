<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>toma</title>
		<link rel="stylesheet" href="portfolio.css">
	</head>
	<body>
		<div class="header">
			<!--<div class="header-text">ayaka toma</div>-->
			<!--<div class="header-logo">Ayaka Toma</div>-->
			<a href="http://localhost:8888/portfolio.php">ayaka toma</a>
			<input type="button" onclick="location.href='http://localhost:8888/portfolio.php'" value="遷移">
			<button onclick="location.href='http://localhost:8888/portfolio.php'">遷移</button>
		</div>

	<div class="main">
		<div class="thanks-message">お問い合わせいただきありがとうございます。</div>
		<div class="display-contact">
			
			<div class="form-title">入力内容</div>
			
			<div class="form-item">■ 名前</div>
			<!-- nameを受け取りechoしましょう -->
			<?php
			echo $_POST['name'];
			?>
			<div class="form-item">■ 内容</div>
			<!-- bodyを受け取りechoしましょう -->
			<?php
			echo $_POST['body'];
			?>
		</div>
	</div>
	</body>
</html>
