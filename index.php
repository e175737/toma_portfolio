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
			<a href="http://localhost:8888/portfolio.php">ayaka toma</a>
			<!--<div class="header-logo">Ayaka Toma</div>-->
			
			<div class="icon">
				<img src="icon.jpg" width="100px">
			</div>
			<div class="header-logo">Ayaka Toma</div>

			<div class="header-list">
			<ul>
				<li>About</li>
				<li>Works</li>
				<li>Contact</li>
			</ul>
			</div>
		</div>
		
		<div class="main">
			
			<div class="contents">
				<article>
					<h1 class="section-title">About</h1>
					
					<div class="contents-item">
						<ul>
							<li>名前 : 當間 彩加（Ayaka Toma）</li>
							<li>誕生日 : 1998年11月12日</li>
							<li>出身地 : 沖縄県石垣市</li>
							<li>趣味 :  脱出ゲーム、謎解き</li>
							<li></li>
							<!-- <li>twitter :<a href="https://twitter.com/ayakat1012">KaT</a></li> -->
						</ul>
					</div>
						
					<h1 class="section-title">Works</h1>
						
				</article>
					
					
				<article>
					<h2 class="section-title">Contact</h2>
				
					<div class="contact-form">
						<p>メッセージがありましたら、以下のフォームよりお送りください。</p>
						<form method="post" action="sent.php">
							<div class="form-item">名前</div>
							<input type="text" name="name">
							
							<div class="form-item">メールアドレス</div>
							<input type="text" name="email">
							
							<div class="form-item">メッセージ</div>
							<textarea name="body"></textarea>
							
							<!-- この下に送信ボタンを作りましょう -->
							<input type="submit" value="送信">
							
						</form>
					</div>
				</article>
				
			</div>
			
		</div>
		
		<div class="footer">
			<hr>
			<!--<div class="footer-logo">"Copyright(c) 2021 Ayaka Toma All Rights Reserved."</div> -->
		</div>
		
	</body>
</html>
