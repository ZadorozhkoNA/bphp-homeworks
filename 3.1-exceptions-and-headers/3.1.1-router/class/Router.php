<?php
class Router {
  public $availableLinks;

  public function __construct( array $availableLinks )
  {
      $this->availableLinks = $availableLinks;
  }

  public function isAvailablePage( $namePage = '' ) {
    $arrayPages = $this->availableLinks;
    if ( $namePage === '' ) {
      echo 'Нет параметра';
      throw new ErrorParam('Нет параметра');
    }

    if ( in_array( $namePage, $arrayPages, true ) ) {
      return true;
    } else {
      echo 'Нет страницы';
      throw new ErrorPage('Такой страницы нет');
    }
  }
}


?>
