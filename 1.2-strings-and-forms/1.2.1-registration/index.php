<?php
  if ( isset( $_POST['login'] ) ) {
    $login = trim($_POST['login']);
    preg_match('/[^@\/\*?,;:]+/', $login, $array );
    if ( strcmp( $login, $array[0] ) !== 0 ) {
      echo 'Логин не должен содержать символы: @ / * ? , ; : </br>';
    }
  }

  if ( isset( $_POST['password'] ) ) {
    $password = trim($_POST['password']);
    preg_match('/.{8}u/', $password, $array );
    if ( !isset( $array[0] ) ) {
      echo 'В пароле должно быть 8 символов или более </br>';
    }
  }

  if ( isset( $_POST['email'] ) ) {
    $email = trim($_POST['email']);
    preg_match('/@+/', $email, $arrayDog );
    preg_match('/\.+/', $email, $arrayPoint );
    if ( !isset( $arrayDog[0] ) or !isset( $arrayPoint[0] ) ) {
      echo 'В адресе почты должны быть @ и точка </br>';
    }

  }

  if ( isset( $_POST['firstName'] ) ) {
    $firstName = trim($_POST['firstName']);
    preg_match('/./', $firstName, $array );
    if ( !isset( $array[0] ) ) {
      echo 'В имени должен быть хоть один символ </br>';
    }
  }

  if ( isset( $_POST['lastName'] ) ) {
    $lastName = trim($_POST['lastName']);
    preg_match('/./', $lastName, $array );
    if ( !isset( $array[0] ) ) {
      echo 'В фамилии должен быть хоть один символ </br>';
    }
  }

  if ( isset( $_POST['middleName'] ) ) {
    $middleName = trim($_POST['middleName']);
    preg_match('/./', $middleName, $array );
    if ( !isset( $array[0] ) ) {
      echo 'В отчестве должен быть хоть один символ </br>';
    }
  }

  $code = 'nd82jaake';
  if ( isset( $_POST['code'] ) ) {
    $codePost = trim($_POST['code']);
    if ( strcmp( $codePost, $code ) !== 0 ) {
      echo 'Кодовое слово введено не верно </br>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.2.1</title>
</head>
<body>
  <?php
    if ($_POST) {
      ?>
        </br>
        <a href="index.php">Назад к форме</a>
      <?php
    } else {
      include 'form.html';
    }
  ?>
</body>
</html>
