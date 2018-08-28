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
        </ul></li>
       <div  style=" float: right; " height="40" class="icon-mme">
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
           <li><a href="poselenya.php">Поселення</a></li>
      <li><a href="vuselenya.php">Виселення</a></li>
      <li><a href="administrat.php">Адміністація</a></li>
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
   <h1 style=" line-height: 1.5; margin-top: 40px;">Поселення:</h1>
  <section  style=" line-height: 1.5;">
   
<h4>Алгоритм поселення до студентських гуртожитків Національного університету "Львівська політехніка"</h4>
<p><a class="hasTooltip" href="/documents/orders/266-2017-2018" data-original-title="Edit">Наказ Про поселення в студентські гуртожитки Університету у 2017/2018 навчальному році</a></p>

<ol style="margin-left: 40px;">
<li>Крок <strong> Удома:</strong><br />
<ul style="margin-left: 40px;">
<li >Якщо Ви рекомендовані до зарахування і надаєте оригінали документів для зарахування на навчання, то підготуйте заздалегідь та візьміть із собою  пакет документів, необхідних для поселення: 
<ol style="margin-left: 40px;">
<li>Заява на поселення (роздрукувати <a href="/images/ZAYAVA.doc" target="_blank" rel="noopener noreferrer">бланк</a> та заповнити за <a href="/images/Zrazok-zayavi.jpg" target="_blank" rel="noopener noreferrer">зразком</a>).</li>
<li>Копії документів, які підтверджують пільги (за наявності).</li>
<li>Договір на проживання (роздрукувати <a href="/images/dogovir-progyvannya.docx">договір</a>, та <a href="/images/dodatok-do-dogovoru-progyvannya.doc" target="_blank" rel="noopener noreferrer">додаток до договору</a>,  заповнити договір за зразком) – 2 примірники.</li>
<li>Копія паспорта (1, 2 та 11 сторінки).</li>
<li>Копія ідентифікаційного коду.</li>
<li>Оригінал довідки про проходження флюорографічного огляду, який пройдено не більше року тому.</li>
<li>Фотокартки  3 x 4 — 6 шт.</li>
<li>Заява на утримання зі стипендії оплати за проживання в гуртожитку (роздрукувати <a href="/images/salary-claim.doc">бланк заяви,</a> заповнити за <a href="/images/20160708_093153_002.jpg" target="_blank" rel="noopener noreferrer">зразком</a>) – 1 примірник (лише для студентів бюджетної форми навчання).</li>
</ol>
</li>
<li>Копії та оригінали документів, які підтверджують пільги, необхідно надати ОБОВ’ЯЗКОВО!</li>
</ul>
</li>
<li>Крок <strong> Комісія з поселення:</strong>
<ul style="margin-left: 40px;">
<li>Комісії з поселення факультету/інституту буде сформовано при відповідних Приймальних комісіях, тобто в тих самих приміщеннях. Усе, що потрібно Вам зробити — це уточнити номер кабінету.</li>
<li>Якщо Ви є в списку на поселення, то надаєте комісії з поселення такі документи:
<ol style="margin-left: 40px;">
<li>Заява на поселення.</li>
<li>Копії документів, які підтверджують пільги (за наявності).</li>
</ol>
</li>
<li >Після цього, Комісія надає Вам  направлення на поселення.</li>
</ul>
</li>
<li>Крок <strong>3. Дирекція студентського містечка:</strong>
<ul>
<li style="margin-left: 40px;">Після отримання направлення на поселення, Ви прямуєте до Дирекції студентського містечка (вул. Ломоносова, 59 гуртожиток № 6), де отримуєте тимчасову перепустку до гуртожитку. До 01.09.2017 р. (доки Ви не є студентом Університету) мешкати в гуртожитку Ви можете лише як категорія «Інші». З 01.09.2017 р. Вас автоматично переведуть в категорію «Студент» і Ви мешкатимете в гуртожитку на загальних засадах. Постійну перепустку Ви отримаєте пізніше (упродовж вересня). Середня вартість проживання категорії «Інші» орієнтовно 800 грн./міс. Вартість проживання категорія «Студент» 440 грн./міс.</li>
<li style="margin-left: 40px;">Перелік необхідних документів, які потрібно надати інспектору відділу поселення:
<ol style="margin-left: 40px;">
<li>Направлення на поселення (видане комісією з поселення).</li>
<li>Заява на поселення.</li>
<li>Копія паспорта.</li>
<li>Копія ідентифікаційного коду.</li>
<li> Фотокартки  3 x 4 — 3 шт.</li>
</ol>
</li>
</ul>
</li>
<li>Крок <strong>4. Гуртожиток:</strong>
<ul>
<li style="margin-left: 40px;">Отримавши тимчасову перепустку, Ви рушаєте до Вашого гуртожитку. Номер гуртожитку та номер кімнати будуть зазначені в перепустці.</li>
<li style="margin-left: 40px;">Сформувати пакет документів, які необхідно надати адміністрації гуртожитку:
<ol style="margin-left: 40px;">
<li>Тимчасова перепустка (видана відділом поселення).</li>
<li>Договір на поселення — 2 примірники.</li>
<li>Оригінал довідки про проходження флюорографічного огляду, який пройдено не більше року тому.</li>
<li>Фотокартки  3 x 4 — 3 шт.</li>
<li>Квитанції про сплату за проживання.</li>
</ol>
</li>
<li style="margin-left: 40px;">Завідувач гуртожитком проводить інструктажі з Техніки безпеки та ознайомлює із  Правилами внутрішнього розпорядку в студентських гуртожитках (під підпис), видає повідомлення на оплату першого місяця проживання в гуртожитку та ключ від кімнати, у яку Ви були направлені Комісією з поселення.</li>
<li style="margin-left: 40px;">Ви в гуртожитку. Ласкаво просимо!</li>
</ul>
</li>
</ol> </section>

        



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