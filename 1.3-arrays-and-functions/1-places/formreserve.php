<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
  <style type="text/css">
    input {
		display: block;
		margin-top: 10px;
	}
	button {
		margin-top: 10px;
	}
  </style>
</head>
<body>
<form action="index.php" method="post">
  <input type="text" name="row" placeholder="Ряд" required>
  <input type="text" name="place" placeholder="Место в ряду" required>
  <button type="submit">Забронировать место</button>
</form>
</body>
</html>
