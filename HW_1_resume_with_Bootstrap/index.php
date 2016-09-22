<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="resume, php, javascript, mysql, html, css">
	<meta name="description" content="The first resume">
	<meta name="author" content="Igor Pelekhatyy">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My first resume</title>
	<link rel="stylesheet" href="styles/bootstrap-theme.min.css">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">
	<script src="/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<a href="../index.php">Back</a>
			<h1>Junior PHP Developer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-3 photo">
					<img src="images/avatar.jpg" alt="My photo" class="img-rounded img-responsive photo " width="100%">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-5 about">
					<h3>Пелехатий Ігор Степанович</h3>
					<p>20 січня 1990 р.</p>
					<ul> 
						<li class="tel">
							<img src="images/phone_50.png">066-632-17-71
							</li>
						<li class="email">
							<img src="images/message_50.png">ihorinho@gmail.com
						</li>
						<li class="skype">
							<img src="images/skype_50.png">ihorinho
						</li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-2 col-md-4 social">
					<a href="https://vk.com/ihorinho"><img src="images/vk.png" alt="vkontakte logo"></a>
					<a href="https://www.facebook.com/profile.php?id=100006651168809"><img src="images/fb.png" alt="facebook logo"></a>
					<a href="https://twitter.com/ihorinho"><img src="images/tt.png" alt="twitter logo"></a>
					<a href="https://plus.google.com/u/0/107218877659342969829"><img src="images/gg.png" alt="google+ logo"></a>
				</div>
			</div>
		
			<div class="table-responsive">
				<table class="table">
					<tr>
						<td>Навики</td>
						<td>
							<ul>
								<li>HTML5, CSS3</li>
								<li>Javascript/jQuery</li>	
								<li>PHP</li>
								<li>MYSQL</li>
								<li>Intermediate English</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>Освіта</td>
						<td>2007-2012рр - Національний авіаційний університет, Факультет комп'ютерних систем</td>
					</tr>
					<tr>
						<td>Досвід роботи</td>
						<td>2012-2015рр - Пенсійний фонд України, Системний адміністратор</td>
					</tr>
					<tr>
						<td>Інтереси</td>
						<td><ul>
							<li>Футбол</li>
							<li>Мото</li>
							<li>Рибалка</li>
						</ul></td>
					</tr>
				</table>
			</div>
		</div>
	</main>
	<footer>
			<div class="container">
				<p>Copyright &copy; 2016 Igor Pelekhatyy</p>
			</div>
	</footer>
</body>
</html>