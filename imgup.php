<?php
include 'connecting.php';
session_start();

/*if ( isset( $_GET['I_D'] ) ) {
  // Здесь $id номер изображения
  $id = (int)$_GET['I_D'];
  if ( $id > 0 ) {*/

    $query = "SELECT `picture` FROM `pic` Where I_D = 32 ";
    // Выполняем запрос и получаем файл
    $res = mysqli_query($db,$query);
    if ( mysqli_num_rows( $res ) == 1 ) {
      $image = mysqli_fetch_array($res);
      // Отсылаем браузеру заголовок, сообщающий о том, что сейчас будет передаваться файл изображения
      header("Content-type: images/*");
      // И  передаем сам файл
      echo $image['picture'];
   }

  /*}
}*/
?>