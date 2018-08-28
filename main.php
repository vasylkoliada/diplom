<!DOCTYPE html>
<html>
<head>
    <?php
	require "db.php";
	?><meta charset="UTF-8">
	  <link href="style.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="jquery-3.2.1.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<title>Головна</title>
	<script>

</script>
</head>
<body>
  <div id ="dfg">
    <div style="top:0px;">
   <div class="firsttop" >
    <a href="regestration.php" class="tty" style="text-decoration: none; ">Реєстрація</a> 
    	<?php if(isset($_SESSION['logged_user'])) :?>
          <a href="mycabinet.php" class="tty" style="text-decoration: none;" >
					 <?php echo $_SESSION['logged_user']->login; ?></a>
					 <?php else : ?>   <a href="login.php" class="tty" style="text-decoration: none;" >Вхід</a><?php endif;?>
					 	<?php if(isset($_SESSION['logged'])) :?>
     <a href="adminka.php" class="tty" style="text-decoration: none;" >
     	<?php echo $_SESSION['logged']->login; ?></a>
     	 <?php else : ?>   <a href="openadm.php" class="tty" style="text-decoration: none;" >Admin</a><?php endif;?>
   </div>
   <div class="jumbotron text-center ffa" style = "  opacity: 0.75;  background: #c7b39b url(431.jpg)   no-repeat center/cover; 
    color: #fff;
      text-shadow: 1px 1px 2px black, 0 0 1em black;">
   

  <h1><img src="iujh.png" width="130" height="140" style="box-shadow: -2px 4px 10px 2px black;" >   Поселення в гуртожиток</h1>
  <p>Веб ресурс з питань поселення в гуртожитки НУ "ЛП"</p> 

</div>
<hr style= "height: 25px"   class="firsttop" />
</div>
	<ul id = "menu"  >
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
     
    </ul>
			<div class="flex-container">
			  <div class="cl1">
			  	<div class="ez">
			  		<h1 style="text-align: center;
			font-family: sans-serif;
			line-height: 49px; padding: 20px;">
			  		Електронна заява на поселення в гуртожиток</h1>
			  	</div>

			  		<div style="background: #FF0D00; padding: 10px 30px;">
			  		<h3 style="text-align: center;
			font-family: sans-serif;
			line-height: 49px;">Шановні студенти!</h3>
			<div  style="  text-align: justify;">
			  	<p>	Студентське містечко є структурним 
			  	підрозділом «Львівської політехніки» і керується
			  	 у своїй діяльності чинними законодавчими актами 
			  	 України, типовим положенням про студентський
			  	 гуртожиток навчального закладу Міністерства 
			  	освіти та науки України, Статутом «Львівської 
			  політехніки» та Положенням про Студмістечко.</p>

				<p>	13 студентських гуртожитків (один з яких призначений для проживання сімей) утворюють житлово-побутовий комплекс, де більш як 8 тис. студентів та аспірантів проживають, навчаються та відпочивають. В студентському містечку функціонує 3 спортивні майданчики, спортивні зали, створені умови для обслуговування студентів, на території розташована студентська поліклініка, функціонує Студентський клуб.</p>
			</div>
			  	</div>
			  </div>
			  <div class="cl2">	
			  	<h2 style="text-align: left;
			font-family: sans-serif;
			color: #000000;
			line-height: 49px; ">
			  		Заповнити анкету на поселення
			  	</h2>	
			  	<p>
			  		 Я ознайомився з умовами прийому
			  	</p>
			  	<p>
			  		 Я ознайомлений шз вимогами, що ставляться до осіб, котрі мають можливість скористатися системою "Електронна подача документів на поселення в гуртоиток"
			  	</p>
			  		<p>
			  		 Я усвідомлюю що подані мною персональні дані (інформація про особу) будуть використані Національним університетом "Львівська політехніка"
			  	</p>
			  	<a  href="regestration.php" style="text-decoration: none;" ><span class="hr" >Зареєстуватися <span style="font-size:16px;">&rArr;</span></a></span>
			  </div>
			  <div class="cl3">	
			  	  <p><a href="#">Вимоги до осіб що мають можливість скористатися сервісом</a></p>
			  	  <p><a href="#">Закон України "Про захист персональних даних"</p></a>
			  	  <p><a href="#">Порядок подання та розгляду заяв в електронні формі</p></a>
			  </div>
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