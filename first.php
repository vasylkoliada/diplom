<?php
include 'connecting.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>first</title>
</head>
<body>
	 <div>
  <form name="test" method="post" action="input1.php">
  <p><b>Ваше і'мя:</b><br>
   <input type="text" size="40" name="name" placeholder="шотатам..">
  </p>
    <p><b>Ваше прізвище:</b><br>
   <input type="text" size="40" name = "surname" placeholder="шотатам..">
  </p>
    <p><b>Місце проживання:</b><br>
   <input type="text" size="40" name = "location" placeholder="шотатам..">
  </p>
    <input name="picture" enctype="multipart/form-data" type="file"  />
  <p><b>Комент</b><Br>
   <textarea type ="text"  cols="10" name="comment"  rows="3"></textarea></p>
  <p><input type="submit" value="Відправити">
   <input type="reset" value="Очистити"></p>
 </form>
<form enctype="multipart/form-data" method="post" action="images.php">
Изображение: <input type="file" name="image" />
<input type="submit" value="Загрузить" />
</form>

       
 <img src="imgup.php?id=17" alt="" />
     

	</div>

</body>
</html>