<!DOCTYPE html>
<html>
<head>
	<?php
require "db.php";
include "connecting.php";
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
$(document).ready(main);
   function sendReport(){
           var hi= confirm("Ви перевірили дані?");
    if (hi== true){
       
   
  			var nam = document.getElementById("nam").value;
  			var surname = document.getElementById("surname").value;
  			var email = document.getElementById("email").value;
  	 		var tel = document.getElementById("tel").value;
  	  	var us = document.getElementById("us").value;
  	  	var caf = document.getElementById("caf").value;
        var st = document.getElementById("st").value;lpase
        var lpase = document.getElementById("lpase").value;
        var mk = document.getElementById("mk").value;
        $('#op').css('opacity', '1');  
        $('#pos').css('opacity', '1');     
        $.ajax({
        url:"cabinets.php", 
        type: "POST", 
        data: {action:'zaz',nam : nam , surname: surname , email: email, 
        tel: tel, us: us, caf: caf, st:st,lpase:lpase, mk:mk  }, 
        success:function(data) {
          $('#aass').html(data); 
        },
        error: function(html){
          $('#aass').html(data);   
        }
        }); 
         }else{
        alert("Перевірте дані");
    }
    }
function Opens(){

 document.location.href = "http://localhost/Diplom/campus.php";

}
 
  function sendAdm(){
    
    
  var instructions = document.getElementById("ttt").value;
    $.ajax({
    url:"cabinets.php", 
    type: "POST", 
    data: {action:'adm', instructions: instructions }, 
    success:function(data) {
      $('#aass').html(data); 
    },
    error: function(html){
      $('#aass').html(data);   
    }
    });
    };
function ch(){
 
          var ch = document.getElementById("ch").value;

   $.ajax({
    url:"cabinets.php", 
    type: "POST", 
    data: {action:'but', ch: ch }, 
    success:function(data) {
      $('#aass').html(data); 
    },
    error: function(html){
      $('#aass').html(data);   
    }
    });
   document.location.href = "http://localhost/Diplom/mycabinet.php";

}
function crrh(){
  
       var ch = document.getElementById("crrh").value;

   $.ajax({
    url:"cabinets.php", 
    type: "POST", 
    data: {action:'but', ch: ch }, 
    success:function(data) {
      $('#aass').html(data); 
    },
    error: function(html){
      $('#aass').html(data);   
    }
    });
       document.location.href = "http://localhost/Diplom/mycabinet.php";
 
}
</script>
<style>

input[type=password],input[type=text],input[type=email],input[type=tel]  {
    width: 20%;
    padding: 8px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid grey;
    border-radius: 4px;
    outline:none;
}
select {
     width: 20%;
    padding: 8px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid grey;
    border-radius: 4px;
    outline:none;
}

  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 13px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
     outline:none;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button1:hover {
    background-color: #f44336;
    color: white;
}
.buttonn {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}


.buttonn1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
 <h1>Мій кабінет</h1>

    <ul id = "menu" class="menu1" >
      <li><a href="main.php"><img src="iujh.png" width="80" height="60"></a></li>
      <li><a href="#">Поселення</a></li>
      <li><a href="#">Виселення</a></li>
      <li><a href="#">Дирекція&#9660;</a>
        <ul class="sum-menu">
          <li><a href="#">Адміністація</a></li>
          <li><a href="#">Бугалтерія</a></li>
          <li><a href="#">Відділ поселення</a></li>
        </ul>
      </li>
      <li class="a"><a href="#">Гуртожитки&#9660;</a>
        <ul class="sub-menu">
            <li >
            <div style="  display: table; width: 100%; ">
                    <div style="  display: table-cell;  ">
                     <a href="#">Гуртожиток 1</a>
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
                <input style=" outline:0;  border-color:red; border-width:0; background: red; " type="txt" name="words"  id="fsearch"  placeholder="пошук..." >
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
      <li><a href="#">Гуртожиток 1</a></li>
      <li><a href="#">Гуртожиток 3</a></li>
      <li><a href="#">Гуртожиток 4</a></li>
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
   
<div style="margin-left: 100px;">
<div style="margin-left: 40px;">
<div id ="aass"></div>
<div id ="ds"></div>
<?php if(!(R::findOne ('cabinets','login = ?',array($_SESSION['logged_user']->login)))) :?>
    <h1>Введіть свої дані:</h1>
 <form  id = "af" method="POST">
	<p>
	<p><strong>Ім'я</strong>:</p>
	<input type="text" name="nam" id="nam" value="<?php echo @$data['nam'];?>"  placeholder="Ім'я">
    </p>
    <p>
	<p><strong>Прізвище</strong>:</p>
	<input type="text" name="surname" id = "surname" value="<?php echo @$data['surname'];?>"  placeholder="Прізвище">
    </p> 
    <p><strong>Електронна пошта</strong>:</p>
	<input type="email" name="email" id = "email" value="<?php echo @$data['email'];?>"  placeholder="e-mail">
    </p> 
     <p><strong>Номер телефону</strong>:</p>
	<input type="tel" name="tel" id = "tel" value="<?php echo @$data['tel'];?>"  placeholder="+380(_______)">
    </p>
    <form  >
      <p><strong>Статус</strong>:</p>
      <select  name="st" id = "st"  value="<?php echo $data['st'];?>">
      <option value="0">Вибрати:</option>
      <option  value="Студент">Студент</option>
      <option value="Викладач">Викладач</option>
      </select>
    </form>
    <p><strong>Місто/село проживання</strong>:</p>
  <input type="text" name="lpase" id = "lpase" value="<?php echo @$data['lpase'];?>"  placeholder="місце проживання">
    </p>
     <p><strong>Приблизна відстань до Львова</strong>:</p>
  <input type="text" name="mk" id = "mk" value="<?php echo @$data['mk'];?>"  placeholder="відстань"><span style="font-size: 18px;">км</span>
    </p>
		<form>
			<p><strong>Інститут</strong>:</p>
			<select name="us" id = "us"  value="<?php echo $data['us'];?>">
			<option value="0">Вибрати:</option>
			<option value="ІКНІ">ІКНІ</option>
			<option value="ІНЕМ">ІНЕМ</option>
			<option value="ІТРЕ">ІТРЕ</option>
			<option value="ІБІД">ІБІД</option>
			<option value="ІКТА">ІКТА</option>
      <option value="ІХХТ">ІХХТ</option>
      <option value="ІГСН">ІГСН</option>
      <option value="ІАРХ">ІАРХ</option>
			</select>
		</form>
		<form >
			<p><strong>Кафедра</strong>:</p>
			<select name="caf" id = "caf"  value="<?php echo $data['caf'];?>"  >
			<option value="0">Вибрати:</option>
			<option value="програмне забезпечення">програмне забезпечення</option>
			<option value="радіоелектронні апарати">радіоелектронні апарати</option>
			<option value="енергетика та водопостачання">енергетика та водопостачання</option>
			<option value="автоматизація систем управлін">автоматизація систем управління</option>
			<option value="5">інше</option>
			</select>
		</form>
	

    

<!--<p><input type="submit"  id = 'bt' name="nazvanie_knopki" value="Увійти" />Увійти</p>-->
</form>
<p><button type="button" class="button button1"  id = "send_button" onclick="sendReport()" style="text-align: center;" >
Відіслати анкету</button></p>
 <h2>Паспорт:</h2>
 <div id= "op" style="opacity: 0.6;">  
    <form enctype="multipart/form-data" method="post" action="images.php">
Сторінка 1: <input  type="file" name="image" class="buttonn1 buttonn" />
Сторінка 2: <input type="file" name="image1" class="buttonn1 buttonn"  />
Сторінка 11: <input  type="file" name="image2"   class="buttonn1 buttonn"/>
<input type="submit" class="button button1" value="Завантажити" />
    </form></div>
     <h2>Посвічення (пільгове або викладацьке):</h2>
 <div id= "pos" style="opacity: 0.6;">  <p><strong>Посвічення</strong>:</p>
    <form enctype="multipart/form-data" method="post" action="certificate.php">
Сторінка 1: <input type="file" name="image" class="buttonn1 buttonn"  />
Сторінка 2: <input type="file" name="image1" class="buttonn1 buttonn"  />
<input type="submit" class="button button1"  value="Завантажити" />
    </form></div>
<?php else : ?>
	<h1>Ваша заява обробляється</h1>
<?php if(!(R::findOne ('ankets','login = ?',array($_SESSION['logged_user']->login)))) :?>
  <?php if(isset($_SESSION['logged']->login)) :?>
  <div id ="form_dom" style=" float: right ; margin-right: 200px; margin-top: 0px; ">
    <form > 
          <p><button type="button" class="button button1"  id = "ll" onclick="Opens()" 
          style="text-align: center;" >
          Вибрати місце для поселення</button></p></p>
        <div>
     
     
  </div></div>
  <?php else : ?>
     <div id ="form_dom" style=" float: right; margin-right: 200px; margin-left: 400px; margin-top: 0px; padding:10px 10px 10px 10px; background-color: #f44336;">
    
      <h4><strong>Тут буде зображено<br> рішення щодо поселення</strong>:</h4>
      <p><strong>Гуртожиток:</strong></p>
      <select name="dormi" id = "dormi"  value="<?php echo $data['dormi'];?>">
  
   
      </select>
   
     <p><strong>Кімната</strong>:</p>

     <p><strong>Поверх</strong>:</p>
           </div>
         <?php endif ; ?>
<?php else : ?>
   <div id ="form_dom" style=" float: right; margin-right: 200px; margin-left: 400px; margin-top: 0px; padding:10px 10px 10px 10px; background-color: #4CAF50;">
    
      <h4><strong>Рішення щодо поселення</strong>:</h4>
      <p><strong>Гуртожиток:</strong></p>
      <select name="dormi" id = "dormi" style="width: auto; value="<?php echo $data['dormi'];?>">
      <option <p><?php print R::getCell('SELECT dormi FROM ankets Where login = ?', array($_SESSION['logged_user']->login));
      ?></p></option>
      </select>
   
     <p><strong>Кімната</strong>:</p>
     <?php print R::getCell('SELECT room FROM ankets Where login = ?', array($_SESSION['logged_user']->login));
      ?>
         <p><strong>Поверх</strong>:</p>
        <?php print R::getCell('SELECT dormi FROM ankets Where login = ?', array($_SESSION['logged_user']->login));
      ?> 
     <p>
      <?php error_reporting(0); if((R::getCell('SELECT checked FROM ankets Where login = ?', array($_SESSION['logged_user']->login))) ==NULL && !$_SESSION['logged']){
           print"  <button type='button'  id = 'ch' value = 'Підтверджено' onclick='ch()' >Підтвердити</button>
             <button id = 'crrh' value = 'Відмінено' onclick='crrh()'>Відмінити</button></p>";} 
             else print R::getCell('SELECT checked FROM ankets Where login = ?',
              array($_SESSION['logged_user']->login))
             ?>
    
  </div>
<?php endif;?>
	 <form  id = "af" method="POST">
	<p>
	<p><strong>Ім'я</strong>:</p>

	<p><?php print R::getCell('SELECT nam FROM cabinets Where login = ?', array($_SESSION['logged_user']->login));
	    ?></p>
    </p>
    <p>

	<p><strong>Прізвище</strong>:</p>
	<p><?php print R::getCell('SELECT surname FROM cabinets Where login = ?',
   array($_SESSION['logged_user']->login));
	?></p>
    </p> 
    <p><strong>Електронна пошта</strong>:</p>
	<p><?php print R::getCell('SELECT email FROM cabinets Where login = ?', array($_SESSION['logged_user']->login));
	 ?></p>
    </p> 
     <p><strong>Номер телефону</strong>:</p>
	<p><?php print R::getCell('SELECT tel FROM cabinets Where login = ?', array($_SESSION['logged_user']->login));
	    ?></p>
    </p>
    <form  >
      <p><strong>Статус</strong>:</p>
      <select name="st" id = "st"  value="<?php echo $data['st'];?>">
      <option><p><?php
       print R::getCell( 'SELECT st FROM cabinets Where login = ?', array($_SESSION['logged_user']->login) );
            ?></p> </option>
      
      </select>
    </form>
    <p><strong>Місто/село проживання</strong>:</p>
<p><?php print R::getCell('SELECT lpase FROM cabinets Where login = ?', array($_SESSION['logged_user']->login));
      ?></p>
    </p>
     <p><strong>Приблизна відстань до Львова</strong>:</p>
<p><?php print R::getCell('SELECT mk FROM cabinets Where login = ?', array($_SESSION['logged_user']->login));
      ?><span>км</span></p>
    </p>
		<form  >
			<p><strong>Інститут</strong>:</p>
			<select name="us" id = "us"  value="<?php echo $data['us'];?>">
			<option <p><?php
       print R::getCell( 'SELECT us FROM cabinets Where login = ?', array($_SESSION['logged_user']->login) );
	  			  ?></p>
				</option>
			
			</select>
		</form>
		<form >
			<p><strong>Кафедра</strong>:</p>
			<select name="caf" id = "caf"  value="<?php echo $data['caf'];?>"  >
			
			<option <p><?php print R::getCell( 'SELECT caf FROM cabinets Where login = ?', array($_SESSION['logged_user']->login));
	  			  ?></p></option>
			
			</select>
		</form>

		<p><strong>Паспорт 1 сторінка</strong>:</p>
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
    width: 600px;
    height: 400px;
    background: url(https://goo.gl/ypQyGs) no-repeat center/cover;
}



</style>
		<div class="hovergallery" style="text-align: center;">
		   <p> <?php 
       $query = "SELECT picture,picture1,picture2  FROM passports 
       Where login='".$_SESSION['logged_user']->login."'";
   
    $res = mysqli_query($db,$query);
 
if ( mysqli_num_rows( $res ) > 0 ){
    while( $img = mysqli_fetch_array( $res ) ){
        print '<img   src="data:image/jpeg;base64,'.base64_encode($img['picture']).'" class = "imgg"/>';
        print '<img  src="data:image/jpeg;base64,'.base64_encode($img['picture1']).'" class = "imgg"/>';
        print '<img  src="data:image/jpeg;base64,'.base64_encode($img['picture2']).'" class = "imgg"/>';}
      } 

  else  { print '<div id= "op" style="opacity: 1;"> 
    <form enctype="multipart/form-data" method="post" action="images.php">
Паспорт 1: <input type="file" name="image"  class="buttonn1 buttonn" />
Паспорт 2: <input type="file" name="image1"  class="buttonn1 buttonn" />
Паспорт 11: <input type="file" name="image2" class="buttonn1 buttonn"  />
<input type="submit" class="button1 button"  value="Завантажити" style = "margin-right:70%;"/>
    </form></div>'; }
	  			  ?></p>
            <p><strong>Посвічення</strong>:</p>
    
       <p> <?php 
         
       $query = "SELECT posv1, posw2  FROM certificate 
       Where login='".$_SESSION['logged_user']->login."'";
   
    $ree = mysqli_query($db,$query);
 
if ( mysqli_num_rows( $ree ) > 0 ){
    while( $img = mysqli_fetch_array( $ree ) ){
        print '<img  src="data:image/jpeg;base64,'.base64_encode($img['posv1']).'"  class = "imgg"/>';
        print '<img  src="data:image/jpeg;base64,'.base64_encode($img['posw2']).'"  class = "imgg"/>';
      }
      } 

  else  { print '<div> <form enctype="multipart/form-data" method="post" action="certificate.php">
    <input type="file" name="image" class="buttonn1 buttonn" />
     <input type="file" name="image1" class="buttonn1 buttonn" />
    <input type="submit" class="button1 button"  value="Завантажити" style = "margin-right:70%;" />
    </form></div>'; }
   
            ?></p>
</div>


		
		



<?php endif;?>
</div><div style = "margin-left: 85%; ">
<a href="logout.php" class="button button1" >Вийти </a></div>
</div>


</body>
<footer>
    
    <hr style= "height: 15px; margin-top: 10px; "   class="firstt" />
    <div style="background: #eee; " class="flex-container">
        <div class="fotd">
            <h2>СТУДМІСТЕЧКО NULP</h2>
            <p>Фотографії в галереях і на слайдах:
              <a href="#">Прізвище Ім'я</a>    </p>

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