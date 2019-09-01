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
  <input type="text" name="chairs" placeholder="Всего кресел" required>
  <input type="text" name="rows" placeholder="Всего рядов" required>
  <input type="text" name="places" placeholder="Мест в ряду" required>
  <button type="submit">Сформировать зал</button>
</form>
</body>
</html>
