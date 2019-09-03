<?php
  $csv = 'data.csv';
  $json = 'data.json';

  $content = file_get_contents( $csv );
  $content = explode( PHP_EOL, $content);

  $titleArray = explode( ';', $content[0]);
  $prepared = [];

  for ( $i = 1; $i <= count($content); $i++ ) {
    $partArray = [];
    $assocPartArray = [];
    if ( !empty($content[$i]) ) {
      $partArray = explode( ';', $content[$i]);
      for ( $j = 0; $j < count($partArray); $j++ ) {
        $assocPartArray[$titleArray[$j]] = $partArray[$j];
      }
    $prepared[] = $assocPartArray;
    }
  }

  file_put_contents( $json, json_encode($prepared) );
?>
