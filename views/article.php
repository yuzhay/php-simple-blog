<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>GeekWeek Blog</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container">
			<h1>GeekWeek Blog</h1>
			<a href="admin">Панель Администратора</a>
			<div>
				<div class="article">
					<h3><a href="article.php?id=<?=$article['id']?>"><?=$article['title'] ?></a></h3>
					<em>Опубликовано: <?=$article['date'] ?></em>
					<p><?=$article['content'] ?></p>
				</div>
			</div>
			<footer>
				<p>GeekWeek Blog<br>Copyright &copy; 2015</p>
			</footer>
		</div>
	</body>
</html>