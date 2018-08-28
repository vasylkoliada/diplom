<?php
include 'connecting.php';
include 'rr.php';

$e =$_SESSION['logged_user']->login;

if( !empty( $_FILES['image']['name'] ) ) {
  
  if ( $_FILES['image']['error'] == 0 ) {
    // Если файл загружен успешно, то проверяем - графический ли он
    if( substr($_FILES['image']['type'], 0, 5)=='image' ) {
      // Читаем содержимое файла
        $image = file_get_contents( $_FILES['image']['tmp_name'] );
        $image1 = file_get_contents( $_FILES['image1']['tmp_name'] );
        $image2 = file_get_contents( $_FILES['image2']['tmp_name'] );
      // Экранируем специальные символы в содержимом файла
          $image = mysqli_real_escape_string($db,$image );
          $image1 = mysqli_real_escape_string($db,$image1 );
          $image2 = mysqli_real_escape_string($db,$image2 );
      // Формируем запрос на добавление файла в базу данных
      $query="INSERT INTO passports(picture ,picture1, picture2,login) 
      VALUES('$image','$image1','$image2', '$e')";
      // После чего остается только выполнить данный запрос к базе данных
      mysqli_query($db, $query );
    }
  
  }
  

  header("Location: http://localhost/Diplom/mycabinet.php");
}



?>