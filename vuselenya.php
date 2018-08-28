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
                     <a href="#">Гуртожиток 3</a>
                     <a href="#">Гуртожиток 4</a>
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
          </ul>
      </li> <div  style=" float: right; " height="40" class="icon-mme">
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
   <h1 style=" line-height: 1.5; margin-top: 40px;">Виселення:</h1>
<section style=" line-height: 1.5;" >
    <p>При виселенні з гуртожитку, мешканець ЗОБОВ’ЯЗАНИЙ:</p>
<p><strong>1. Написати заяву встановленої форми (роздрукувати та заповнити за зразком, <a href="/images/2018/zrazky_zayav/Zayava_2.docx">ЗАЯВА</a>, <a href="/images/2018/zrazky_zayav/Zrazok2.jpg">ЗРАЗОК</a>) та отримати відповідні підписи:</strong></p>
<ul style="margin-left: 40px;">
<li>заступника декана/директора з виховної роботи факультету/інституту де навчається;</li>
<li>завідувача гуртожитку ВОГ де проживає.</li>
</ul>
<p><strong>2. Особисто здати паспорт для зняття з реєстрації місця проживання до Центру надання адміністративних послуг (ЦНАП), що знаходиться за адресою: вул.дор, 42 к. 101;</strong></p>
<p>Графік прийому громадян Центром надання адміністративних послуг:</p>
<ul style="margin-left: 40px;">
<li>понеділок, середа: з 9:00 до 18:00</li>
<li>вівторок, четвер: з 9:00 до 20:00 (згідно талонів зареєстрованих до 19:00)</li>
<li>п'ятниця: з 9:00 до 16:45</li>
<li>субота: з 9:00 до 16:00</li>
</ul>
<p>Прийом здійснюється без перерви на обід.</p>
<p>Перелік документів, які необхідно мати при собі:</p>
<ol style="margin-left: 40px;">
<li>Копія паспорта та оригінал;</li>
<li>Копія приписного свідоцтва або військового квитка з відміткою про зняття з обліку в Франківському РВК (для чоловіків).</li>
<li>Квитанція про оплату адміністративного збору, сума та реквізити надаються безпосередньо в ЦНАП.</li>
</ol>
<p>Для зняття з військового обліку (для чоловіків) необхідно:</p>
<ul style="margin-left: 40px;">
<li>особисто звернутися до Франківському військового комісаріату, що знаходиться за адресою: вул. вімавм, 104Б, .</li>
</ul>
<p>Графік прийому Франківського військового комісаріату:</p>
<ul style="margin-left: 40px;">
<li>Вівторок, Четвер: з 9:00 до 13:00</li>
</ul>
<p>Перелік документів, які необхідно мати при собі:</p>
<ol style="margin-left: 40px;">
<li>Копія паспорта та його оригінал;</li>
<li>Приписне свідоцтво (військовий квиток);</li>
<li>Форма 5 (довідка з наступного місця реєстрації );</li>
<li>Конверт формату А4.</li>
</ol>
<p>та стаєте на військовий обік.</p>
<p><strong>3. Звернутися до завідувача гуртожитку ВОГ або до заступника завідувача гуртожитку ВОГ з виховної роботи (в ГУРТОЖИТКУ де ВИ проживаєте) та отримати обхідний лист під особистий підпис в журналі реєстрації обхідних листів;</strong></p>
<p><strong>4. Звернутися до дирекції студентського містечка (м. Львів, вул. Лукаша, 9): </strong></p>
<p>Бухгалтерія (каб. 102) – отримати підпис бухгалтера (свідчить про відсутність заборгованості).</p>
<p>Графік роботи:</p>
<ul style="margin-left: 40px;">
<li>понеділок-четвер: з 9:30 до 17:30</li>
<li>п’ятниця: з 9:30 до 16:00</li>
<li>з 13:00-14:00 –обідня перерва.</li>
<li>Паспортист (каб. 104) – отримати підпис паспортиста (свідчить, що ви зняті з реєстрації місця проживання за адресою гуртожитку).</li>
</ul>
<p>Графік роботи:</p>
<ul style="margin-left: 40px;">
<li>понеділок-четвер: з 9:00 до 17:30</li>
<li>п’ятниця: з 9:00 до 16:00</li>
<li>з 13:00-14:00 –обідня перерва.</li>
</ul>
<p>Перелік документів, який потрібно мати при собі:</p>
<ol style="margin-left: 40px;">
<li>Оригінал паспорту (витягу або довідки, якщо паспорт ID зразка);</li>
<li>Копію паспорту (1,2, 12 сторінки) або витягу/довідки, (якщо паспорт ID зразка) з відміткою про зняття з реєстрації.</li>
</ol>
<p><strong>5. Звернутися до завідувача гуртожитку ВОГ та здати:</strong></p>
<ul style="margin-left: 40px;">
<li>Заяву про виселення з гуртожитку (здають всі, окрім випускників ОС «Бакалавр» та ОС «Магістр», а також мешканців, які виселені за порушення умов Договору на проживання);</li>
<li>Обхідний лист з відміткою паспортиста та бухгалтера;</li>
<li>Перепустку до гуртожитку (якщо перепустку втрачено, мешканець пише заяву про втрату перепустки, роздрукувати та заповнити за зразком, <a href="/images/2018/zrazky_zayav/Zayava_1.docx">ЗАЯВА</a>, <a href="/images/2018/zrazky_zayav/Zrazok1.jpg">ЗРАЗОК</a>);</li>
<li>Матеріальні цінності, які зазначені в Додатку до Договору на проживання, кімнату в належному стані, м’який інвентар, відповідно до умов Договору;</li>
<li>Ключі від кімнати.</li>
</ul>
<p><strong> Вітаємо Ваше виселення успішно завершено!</strong></p>  </section>
        

        



 </div>
</div>
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