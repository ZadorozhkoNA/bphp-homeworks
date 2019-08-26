<?php
// 1
// 'one'
// true
// 3.14
// null

$variable = false;

if ( is_float ( $variable ) ) {
  $type = "$variable is float";
} elseif ( is_bool ( $variable ) ) {
    if ( $variable ) $type = 'true is bool';
    if ( $variable === false ) $type = 'false is bool';
} elseif ( is_int ( $variable ) ) {
  $type = "$variable is int";
} elseif ( is_string ( $variable ) ) {
  $type = "$variable is string";
} elseif ( is_null ( $variable ) ) {
  $type = "null is null";
} else {
  $type = 'Тут что-то другое';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$type?></p>
</body>
</html>
