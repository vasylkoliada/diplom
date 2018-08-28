<?php
include 'connecting.php';
include 'rr.php';


$e =$_SESSION['logged_user']->login;
if( !empty( $_FILES['image']['name'] ) ) {
  
  if ( $_FILES['image']['error'] == 0 ) {
    // Если файл загружен успешно, то проверяем - графический ли он
    if( substr($_FILES['image']['type'], 0, 5)=='image' ) {
      // Читаем содержимое файла
        $image3 = file_get_contents( $_FILES['image']['tmp_name'] );
        $image4 = file_get_contents( $_FILES['image1']['tmp_name'] );
        
      // Экранируем специальные символы в содержимом файла
          $image3 = mysqli_real_escape_string($db,$image3 );
          $image4 = mysqli_real_escape_string($db,$image4 );
   
      // Формируем запрос на добавление файла в базу данных
      $query="INSERT INTO certificate (posv1 ,posw2,login) 
      VALUES('$image3','$image4', '$e')";
      // После чего остается только выполнить данный запрос к базе данных
      mysqli_query($db, $query );
    }
  
  }
  

  header("Location: http://localhost/Diplom/mycabinet.php");
}



?>