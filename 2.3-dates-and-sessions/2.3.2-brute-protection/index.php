<?php
session_start();

$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000',
    'nik' => 'nik'
];

function createDirForLog( $log ) {
  if ( !is_dir($log) ) {
      mkdir($log, 0777);
  }
}

function createFileForLog( $name, $content, $log = '.' . DIRECTORY_SEPARATOR . 'log' ) {
  createDirForLog( $log );
  $fileLog = fopen( $log . DIRECTORY_SEPARATOR . $name . '.txt', 'a+');
  fwrite( $fileLog, date('d.m.Y H:i:s', $content) . PHP_EOL );
  fclose( $fileLog );
}

function writeLog( $count, $pause, $number = 1 ) {
  $_SESSION[$_POST['login']]['count' . $number]++;
  $time = (int)$_SESSION[$_POST['login']]['time' . $number];

  if ( (int)$_SESSION[$_POST['login']]['count' . $number] >= $count ) {
    if ( (int)time() - $time <= $pause ) {
      createFileForLog( $_POST['login'], time() );
      $_SESSION[$_POST['login']]['time' . $number] = time();
      $_SESSION[$_POST['login']]['count' . $number] = 1;
      exit();
    }
      $_SESSION[$_POST['login']]['time' . $number] = time();
  }
}

if ( isset( $_POST['login'] ) && isset( $_POST['password'] ) ) {
  $login = array_key_exists( $_POST['login'], $users );
  if ( $login ) {
    if ( !isset($_SESSION[$_POST['login']]) ) {
      $array = [];
      $array['count1'] = 0;
      $array['count2'] = 0;
      $array['time1'] = time();
      $array['time2'] = time();
      $_SESSION[$_POST['login']] = $array;
    }
    writeLog( 2, 5 );
    writeLog( 3, 60, 2 );

    if ($users[$_POST['login']] === $_POST['password']) {
      echo 'Авторизация прошла успешно';
    }
  }
}

// var_dump( $_POST );
// var_dump( $_SESSION );
// $_SESSION = [];

include 'form.html';
