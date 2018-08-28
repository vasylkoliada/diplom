<!DOCTYPE html>
<html>
<head>
	<?php
require "db.php";
$data = $_POST;
	?>
	<meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="jquery-3.2.1.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<title>Мій кабінет</title>
	<script>

    var main = function() { 
    $('.icon-mme').click(function() { 
        $('.mme').animate({   
            right: '0px' 
        }, 400); 
        $('body').animate({ 
            right: '285px' 
        }, 400); 
    });
 
    $('.icon-close',).click(function() { 
        $('.mme').animate({ 
            right: '-285px' 
        }, 400); 
    $('body').animate({ 
            right: '0px' 
        }, 400); 
    });
};
$(document).ready(main);</script>
</head>
<body>
 <h1>Адміністратор</h1>
    <ul id = "menu" class="menu1" >
      <li><a href="main.php"><img src="iujh.png" width="80" height="60"></a></li>
      <li><a href="poselenya.php">Поселення</a></li>
      <li><a href="vuselenya.php">Виселення</a></li>
      <li><a href="#">Дирекція&#9660;</a>
        <ul class="sum-menu">
          <li><a href="administrat.php">Адміністація</a></li>
          <li><a href="#">Бугалтерія</a></li>
          <li><a href="#">Відділ поселення</a></li>
        </ul>
      </li>
      <li class="a"><a href="#">Гуртожитки&#9660;</a>
        <ul class="sub-menu">
            <li >
            <div style="  display: table; width: 100%; ">
                    <div style="  display: table-cell;  ">
                     <a href="dormitory1.php">Гуртожиток 1</a>
                     <a href="dormitory2.php">Гуртожиток 3</a>
                     <a href="dormitory4.php">Гуртожиток 4</a>
                     <a href="#">Гуртожиток 5</a>
                     <a href="#">Гуртожиток 6</a>
                     </div>
                     <div style="  display: table-cell;  ">
                     <a href="#">Гуртожиток 7</a>
                     <a href="#">Гуртожиток 8</a>
                     <a href="#">Гуртожиток 9</a>
                     <a href="#">Гуртожиток 10</a>
                     </div>
                     <div style="  display: table-cell;  ">
                     <a href="#">Гуртожиток 11</a>
                     <a href="#">Гуртожиток 12</a>
                     <a href="#">Гуртожиток 13</a>
                     <a href="#">Гуртожиток 14</a>
                 </div>  
            </div>
            </li>
        </ul>
      </li>
        <li><a href="#">Документи&#9660;</a> 
          <ul class="sum-menu">
          <li><a href="#">Накази</a></li>
          <li><a href="#">Положення</a></li>
          <li><a href="#">Нормативні документи</a></li>
        </ul></li><div  style=" float: right; " height="40" class="icon-mme">
           <li><a style="border-right: none;" href="#"><img src="menu.png" width="40" height="40" ></a></li>
        </div>
    </div>
    </ul>
    <ul>
            <div class="mme" style="top: 0px;">
              <div style="  background: red; text-align: center; height: 60px;  display: flex;">        

               <form name="search"  style="padding-top: 20px; padding-left: 40px">
                <input style=" outline:0;  border-color:red; border-width:0; background: red; " type="text" name="words"  id="fsearch"  placeholder="пошук..." >
              </form>

        <div class="icon-close"  style=" background: red; padding-top: 20px; margin-left: 10px; ">
          <img  src="w128h1281338911586cross.png" width="20">
        </div>
      </div>
 
        <!-- Меню -->
       <ul class="mme" style="top: 60px;" >
      <li><a href="#">Поселення</a></li>
      <li><a href="#">Виселення</a></li>
      <li><a href="#">Адміністація</a></li>
      <li><a href="#">Бугалтерія</a></li>
      <li><a href="#">Відділ поселення</a></li>
      <li><a href="dormitory1.php">Гуртожиток 1</a></li>
      <li><a href="dormitory2.php">Гуртожиток 3</a></li>
      <li><a href="dormitory4.php">Гуртожиток 4</a></li>
      <li><a href="#">Гуртожиток 5</a></li>
      <li><a href="#">Гуртожиток 6</a></li>
      <li><a href="#">Гуртожиток 7</a></li>
      <li><a href="#">Гуртожиток 8</a></li>
      <li><a href="#">Гуртожиток 9</a></li>
      <li><a href="#">Гуртожиток 10</a></li>
      <li><a href="#">Гуртожиток 11</a></li>
      <li><a href="#">Гуртожиток 12</a></li>
      <li><a href="#">Гуртожиток 13</a></li>
      <li><a href="#">Гуртожиток 14</a></li>
      <li><a href="#">Гуртожиток 15</a></li>
      <li><a href="#">Накази</a></li>
      <li><a href="#">Положення</a></li>
      <li><a href="#">Нормативні документи</a></li>
        </ul>
    </div>
   <div style="margin-left: 140px;">
   <div style="display: flex; padding-left: 25px;">
   <div style = "margin-left: 30px;">
     <h1 style=" line-height: 1.5; margin-top: 40px;">Гуртожиток №1:</h1>
   <div>

     <p style="border: 0px; margin: 0px 0px 20px; outline: 0px; padding: 0px; vertical-align: baseline; color: #404040;">В гуртожитку проживають студенти радіофізичного факультету, електроніки та комп'ютерних систем, а також студенти юридичного факультету (5 поверх).<br />Кількість поверхів: 5
     </p>
 
<p >Кількість місць: 581<br />Гуртожиток кімнатного типу. </p>
<p>
  <strong>Завідуючий:</strong> Зварич Сергій Мирославовича<br /><strong >тел. (032) 238-60-49</strong></p>
    <strong>Адреса:</strong> вул. Бой-Желенського 14<br /> </p>
<p ><strong >   <div class="moduletable">
   </div></strong></p>
    <h2 style=" line-height: 1.5; margin-left: 40px;">Фотогалерея:</h2>
  <style type="text/css">
 
.hovergallery img{
-webkit-transform:scale(0.8); /*Webkit: уменьшаем размер до 0.8*/
-moz-transform:scale(0.8); /*Mozilla: масштабирование*/
-o-transform:scale(0.8); /*Opera: масштабирование*/
-webkit-transition-duration: 0.5s; /*Webkit: длительность анимации*/
-moz-transition-duration: 0.5s; /*Mozilla: длительность анимации*/
-o-transition-duration: 0.5s; /*Opera: длительность анимации*/
opacity: 0.7; /*Начальная прозрачность изображений*/
margin: 0 10px 5px 0; /*Интервалы между изображениями*/
}
.hovergallery img:hover{
-webkit-transform:scale(1.5); /*Webkit: увеличиваем размер до 1.2x*/
-moz-transform:scale(1.5); /*Mozilla: масштабирование*/
-o-transform:scale(1.5); /*Opera: масштабирование*/
box-shadow:0px 0px 30px gray; /*CSS3 тени: 30px размытая тень вокруг всего изображения*/
-webkit-box-shadow:0px 0px 30px gray; /*Webkit: тени*/
-moz-box-shadow:0px 0px 30px gray; /*Mozilla: тени*/
opacity: 1;}
.imgg {
    width: 330px;
    height: 200px;
    background: url(https://goo.gl/ypQyGs) no-repeat center/cover;
}

</style>

  <div class="hovergallery">
    <img src="431.jpg " class = "imgg"/>
  <img src="dorm/2.jpg" class = "imgg"/>
   <img src="dorm/4.jpg" class = "imgg" />
  <img src="dorm/4.jpg" class = "imgg"/>
  <img src="dorm/7.jpg" class = "imgg"/>
  <img src="dorm/1.jpg" class = "imgg"/>
  <img src="dorm/10.jpg" class = "imgg"/>
  <img src="dorm/4.jpg" class = "imgg"/>
</div>      
 </div>
</div>
</h2></div></div>
<hr style="margin-right: 100px;">
</div>
</body>
<footer>
    <hr style= "height: 15px; margin-top: 10px; "   class="firstt" />
    <div style="background: #eee; " class="flex-container">
        <div class="fotd">
            <h2>СТУДМІСТЕЧКО NULP</h2>
            <p>Фотографії в галереях і на слайдах:
              <a href="#">Прізвище Ім'я</a></p>
            <p>Авторські права 2018 © Студентське містечко Національного універститету "Львівська політехніка"</p>
            <p> Усі права захищені.</p>
        </div>
        <div class="fotd">
            <h2>Соцмережі:</h2>
        <p><a href="#" style="text-decoration: none; color: #4d4dff;" class="bw1"><img src = "fb.png"  class="bw " style="position:absolute;   margin-left: -30px;  margin-top: -3px;overflow : hidden ">Фейсбук</p></a>
            <p><a href="#" style="text-decoration: none; color: #4d4dff;" class="bw2"><img src = "tw.png"  class="bw " style="position:absolute;   margin-left: -30px;  margin-top: -3px;overflow : hidden ">Твітер</p></a>
            <p><a href="#" style="text-decoration: none; color: #4d4dff;" class="bw3"><img src = "gl+.png"  class="bw " style="position:absolute;   margin-left: -30px;  margin-top: -3px;overflow : hidden "> Ну "ЛП"</p></a>
        </div>
    </div>
</footer>
</html>