<?php
include_once 'autoload.php';
/**
 * Доступные страницы на сайте
 *
 * @var array $availableLinks
 */
$availableLinks = include './availableLinks.php';
$router = new Router( $availableLinks );

if ( isset( $_GET['page']) ) {
  try {
    if ( $router->isAvailablePage( $_GET['page'] ) ) {
      echo 'Вы находитесь на странице ' . $_GET['page'];
    }
  } catch ( ErrorParam $e ) {
    // header('Location: error.php', true, 400 ); //Эта запись взята из презентации, почему-то не работает
    header( 'Location: error.php' );
  } catch ( ErrorPage $e ) {
    header( 'Location: 404.php' );
  }
}
