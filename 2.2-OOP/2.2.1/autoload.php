<?php
spl_autoload_register(function ($class) {
  $dirs = ['classes', 'config'];
  foreach ( $dirs as $dir ) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
  }
});
?>
