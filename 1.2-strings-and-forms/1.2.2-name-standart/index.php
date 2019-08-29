<?php
  function formValue( $val ) {
    $str = trim( $val );
    $str = mb_strtolower( $str ); //mb
    $firstSimbol = firstSimbol( $str );
    $str = mb_substr($str, 1); //mb
    return $firstSimbol . $str;
  }

  function firstSimbol( $str ) {
    return mb_strtoupper( mb_substr($str, 0, 1) ); //mb
  }

  $fullName ='';
  $fio ='';

  if ( isset( $_POST['firstName'] ) and  isset( $_POST['lastName'] ) and isset( $_POST['middleName'] ) ) {
    $fullName = '\'' . formValue( $_POST['firstName'] ) . ' ' . formValue( $_POST['lastName'] ) . ' ' . formValue( $_POST['middleName'] ) . '\'';
    $fio = '\'' . firstSimbol( $_POST['firstName'] ) . '.' . firstSimbol( $_POST['lastName'] ) . '.' . firstSimbol( $_POST['middleName'] ) . '.' .'\'';
    $surnameAndInitials = '\'' . formValue( $_POST['lastName'] ) . ' ' . firstSimbol( $_POST['firstName'] ) . '.' . firstSimbol( $_POST['middleName'] ) . '.' .'\'';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.2.2</title>
</head>
<body>
  <?php
    if ($_POST) {
      ?>
        <?= 'Полное имя:  ' . $fullName; ?> </br>
        <?= 'Фамилия и инициалы:  ' . $surnameAndInitials; ?> </br>
        <?= 'Аббревиатура:  ' . $fio; ?> </br>
        </br>
        <a href="index.php">Назад к форме</a>
      <?php
    } else {
      include 'form.html';
    }
  ?>
</body>
</html>
