<?php
include_once 'autoload.php';

$work = new JsonFileAccessModel('data');

// $work->write('запись21111');
echo $work->read();
// $work->writeJson('{"Name":"Товар 1","Art":"1001","Price":"10639"}');
// echo $work->readJson();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>bPHP - 2.2.1</title>
  </head>
  <body>

  </body>
</html>
