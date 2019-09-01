<?php
if(session_id() === '') session_start();

function generate( $rows, $places, $chairs ) {
  if ( $rows * $places > $chairs ) return false;

  $mapRows = [];
  for ($i = 1; $i <= $rows; $i++) {
    $mapPlaces = [];
    for ($j = 1; $j <= $places; $j++) {
      $mapPlaces[$j] = false;
    }
    $mapRows[$i] = $mapPlaces;
  }
  return $mapRows;
}

function hallSee( $map ) {
  if ( $map === false ) return;
  foreach ($map as $row => $places) {
    echo 'ряд № ' . $row . '   ';
    foreach ($places as $key => $place) {
      if ( $place ) {
        echo 'заня  ';
      } else {
        echo 'своб  ';
      }
    }
    echo '</br>';
  }
}

function reserve( $map, $row, $place ) {
  if ( $map[$row][$place] ) return false;
  $map[$row][$place] = true;
  $_SESSION['map'] = $map;
  return true;
}

if ( !empty($_POST) ) {
  if ( isset( $_POST['chairs']) and isset( $_POST['rows']) and isset( $_POST['places']) ) {
    $map = generate( $_POST['rows'], $_POST['places'], $_POST['chairs'] );
    unset( $_POST['rows'] );
    unset( $_POST['places'] );
    unset( $_POST['chairs'] );
    $_SESSION['map'] = $map;
  }
}

  function logReserve($row, $place, $result){
    if ($result) {
      echo "Ваше место забронировано! Ряд $row, место $place </br></br>".PHP_EOL;
    } else {
      echo "Что-то пошло не так=( Бронь не удалась </br></br>".PHP_EOL;
    }
  }

if ( isset( $_POST['duble'])) {
  $flag = false;
  $rows = count( $_SESSION['map'] );
  for ( $i = 1; $i <= $rows; $i++) {
     $places = count( $_SESSION['map'][$i] );
     for ( $j = 2; $j <= $places; $j++ ) {
       if ( $_SESSION['map'][$i][$j] === false and $_SESSION['map'][$i][$j - 1] === false ) {
         $_SESSION['map'][$i][$j] = true;
         $_SESSION['map'][$i][$j - 1] = true;
         $k = $j - 1;
         $flag = true;
         echo "Забронировано $k и $j места в  $i ряду</br></br>";
         break 2;
       }
     }
  }
  if ( !$flag ) echo 'Похоже, что мест для двоих уже нет</br></br>';
}
// var_dump( $_POST );

// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.3.1</title>
</head>
<body>
  <?php
    if ( isset( $_SESSION['map']) and isset( $_POST['row']) and isset( $_POST['place']) ) {
      $result = reserve( $_SESSION['map'], $_POST['row'], $_POST['place'] );
      logReserve( $_POST['row'], $_POST['place'], $result );
    }

    if ( isset( $_SESSION['map'] ) and $_SESSION['map'] !== false ) {
      hallSee( $_SESSION['map'] );
      include 'formreserve.php';
      echo '</br>';
      include 'formduble.php';
    }

    if ( isset( $_SESSION['map'] ) and $_SESSION['map'] === false ) echo 'У нас нет столько кресел';

    if ( empty($_SESSION['map']) ) include 'formmap.php';
  ?>
</body>
</html>
