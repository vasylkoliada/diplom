<!DOCTYPE html>
<html>
<head>

<?php
require "db.php";
?>
	<meta charset="UTF-8">
      <link href="style.css" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="jquery-3.2.1.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<title>Вхід</title>
	<script>
var main = function() { //главная функция
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
  function Login(){
  	var login = document.getElementById("login").value;
  	var password = document.getElementById("password").value;
    $.ajax({
    url:"rr.php", 
    type: "POST", 
    data: {action : 'log',login : login , password: password }, 
    success:function(data) {
    if (data =='<div style = "color:green;">Ви авторизовані!</div> <hr>'){
    window.location = 'http://localhost/Diplom/mycabinet.php';
     $('#aa').html(data); 
    }
    $('#aa').html(data); 
    },
    error: function(data){
    $('#aa').html(data);   }
    }); 

};

</script>
<style> 
input[type=text] {
    width: 20%;
    padding: 8px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid grey;
    border-radius: 4px;
    outline:none;
}
input[type=password] {
    width: 20%;
    padding: 8px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid grey;
    border-radius: 4px;
    outline:none;
}
</style>
</head>
<body>


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
                <input style=" outline:0;  border-color:red; border-width:0; background: red; " type="text" name="words"  id="fsearch"  placeholder="пошук..." >
              </form>

        <!-- Иконка меню -->
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
<h1 style="text-align: left;
            font-family: sans-serif;
            line-height: 49px; padding-top: 40px;padding-left:  40px;">
                    Вхід :</h1>

<div id="aa" style="margin-left: 20px;"></div>
<div style="margin-left: 40px;">

<form  id = "af" method="POST"  >
	<p>
	<p><strong>Логін</strong>:</p>
	<input type="text" name="login" id="login" value="<?php echo @$data['login'];?>">
    </p>
    <p>
	<p><strong>Пароль</strong>:</p>
	<input type="password" name="password" id = "password" value="<?php echo $data['password'];?>">
    </p> 
</form>
<button type="button" class="button button1" onclick="Login()" >Увійти</button>
<style>
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
</style>
</div>
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


