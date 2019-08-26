<?php


$time = date("H");
$day = date("N");

switch ( $time ):
  case 0: $text = 'Добрый ночи'; $image = 'img/4.jpg';  break;
  case 1: $text = 'Добрый ночи'; $image = 'img/4.jpg';  break;
  case 2: $text = 'Добрый ночи'; $image = 'img/4.jpg';  break;
  case 3: $text = 'Добрый ночи'; $image = 'img/4.jpg';  break;
  case 4: $text = 'Добрый ночи'; $image = 'img/4.jpg';  break;
  case 5: $text = 'Добрый ночи'; $image = 'img/4.jpg';  break;

  case 6: $text = 'Доброе утро'; $image = 'img/2.jpg';  break;
  case 7: $text = 'Доброе утро'; $image = 'img/2.jpg';  break;
  case 8: $text = 'Доброе утро'; $image = 'img/2.jpg';  break;
  case 9: $text = 'Доброе утро'; $image = 'img/2.jpg';  break;
  case 10: $text = 'Доброе утро'; $image = 'img/2.jpg';  break;

  case 11: $text = 'Добрый день'; $image = 'img/1.jpg';  break;
  case 12: $text = 'Добрый день'; $image = 'img/1.jpg';  break;
  case 13: $text = 'Добрый день'; $image = 'img/1.jpg';  break;
  case 14: $text = 'Добрый день'; $image = 'img/1.jpg';  break;
  case 15: $text = 'Добрый день'; $image = 'img/1.jpg';  break;
  case 16: $text = 'Добрый день'; $image = 'img/1.jpg';  break;
  case 17: $text = 'Добрый день'; $image = 'img/1.jpg';  break;

  case 18: $text = 'Добрый вечер'; $image = 'img/3.jpg';  break;
  case 19: $text = 'Добрый вечер'; $image = 'img/3.jpg';  break;
  case 20: $text = 'Добрый вечер'; $image = 'img/3.jpg';  break;
  case 21: $text = 'Добрый вечер'; $image = 'img/3.jpg';  break;
  case 22: $text = 'Добрый вечер'; $image = 'img/3.jpg';  break;

  case 23: $text = 'Добрый ночи'; $image = 'img/4.jpg';  break;
endswitch;

switch ( $day ):
  case 1: $textDay = 'Сегодня понедельник'; break;
  case 2: $textDay = 'Сегодня вторник'; break;
  case 3: $textDay = 'Сегодня среда'; break;
  case 4: $textDay = 'Сегодня четверг'; break;
  case 5: $textDay = 'Сегодня пятница'; break;
  case 6: $textDay = 'Сегодня суббота'; break;
  case 7: $textDay = 'Сегодня воскресенье'; break;
endswitch;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.0</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1>
              <?= $text; ?>
            <hr>
              <?= $textDay; ?>
            </h1>
        </div>
    </div>
</body>
</html>
