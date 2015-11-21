<?php
	$id = 0;
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>GeekWeek Blog</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" href="../style.css">
	</head>

	<body>
		<div class="container">
			<h1>GeekWeek Blog</h1>
			<a href="admin">Панель Администратора</a>
			<div>
				<form action="index.php?action=<?=$_GET['action']?>&id=<?=$id ?>" method="post">
					<label>
						Название
						<input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
					</label>
					<label>
						Дата
						<input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
					</label>
					<label>
						Содержимое
						<textarea class="form-item" name="content" required><?=$article['content']?></textarea>
					</label>
					<input type="submit" value="Сохранить" class="btn">
				</form>
			</div>
			<footer>
				<p>GeekWeek Blog<br>Copyright &copy; 2015</p>
			</footer>
		</div>
	</body>
</html>