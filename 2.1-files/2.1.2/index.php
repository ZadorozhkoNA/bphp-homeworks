<?php
$uploadsDir = 'img';

if (!empty( $_FILES ) && $_FILES['img']['error'] === UPLOAD_ERR_OK ) {
  if ( is_uploaded_file($_FILES['img']['tmp_name']) ) {
    $pathParts = pathinfo($_FILES['img']['name']);

    if ( $pathParts['extension'] === 'png' || $pathParts['extension'] === 'gif'
    || $pathParts['extension'] === 'jpeg' || $pathParts['extension'] === 'jpg' ) {
      move_uploaded_file(
      $_FILES['img']['tmp_name'],
      $uploadsDir. DIRECTORY_SEPARATOR .$pathParts['basename']
      );
    } else { echo 'Загрузите рисунок в формате jpg, jpeg или png'; }
  }
}

function openImgs( $dir ) {
  $files = scandir( $dir );
  foreach ($files as $file) {
    if ( $file !== '.' && $file !== '..' ) {
      echo '<img src="' . $dir . DIRECTORY_SEPARATOR . $file . '">';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>bPHP - 2.1.2</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="index.php" method="POST">
      <p>Загрузить изображение</p>
        <input type="file" name="img" />
        <input type="submit" value="Отправить" />
    </form>
    <?php
      openImgs( $uploadsDir );
    ?>
  </body>
</html>
