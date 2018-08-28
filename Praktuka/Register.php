<?php


require_once 'config.php';
require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <link rel="shortcut icon" href="1008897.jpg" type="image/jpg">
<link rel="stylesheet" href="filecss.css">
       <script src="jquery-3.2.1.min.js"></script>
       <script src="scrSave.js"></script>
 
  <title>Лавриківська ЗОШ</title>
</head>
<body>

  <div style="float:right; padding-top: 10px; margin-right:200px;">
  
 <form name="search" method="post" action="sear.php">
  <input type="text" name="words"  id="fsearch"  placeholder="пошук..." >
  <button class="button" type="submit" name="bsearch"> <img src="magnifying-glass.png"></button>
</form>
</div>
   <div style='float: left; margin-left: 200px; padding-top: 5px;'>
    <a href="#"><img src="987.jpg" alt="Лавриківська ЗОШ" title="Лавриківська ЗОШ"> 
   </div>
   <div style="margin-right: 350px">
    <h2 ><a href ="#" style="text-decoration: none;"><span class="spandiv">Лавриківська Загальноосвітня Школа </a></span>
    </h2>
    <h3 ><span class="spans">*школа з поглибленим вивченням англійської мови</span></h3>

</div>
<nav class="top-menu">
<ul class="menu-main">
  <li><a href="http://localhost/Praktuka/first.php" class="current">Головна</a></li>
  <li><a href="http://localhost/Praktuka/about_school.php"">Про школу</a></li>
  <li><a href="" style="position: relative;"><span class="symbolmenu">&#9660;</span> Розклад</a>
  <ul class="submenu" >

        <li><a href="http://localhost/Praktuka/RozkladYch.php">Для Учнів</a></li>
        <li><a href="http://localhost/Praktuka/RozkladTeach.php" >Для Вчителів</a></li>

  </ul>
  </li>
  <li><a href="http://localhost/Praktuka/teachers.php">Вчителі</a></li>
  <li><a href="http://localhost/Praktuka/for_parents.php">Для Батьків</a></li>
</ul>
</nav>

<div style="margin-left: 200px;">
<section>
<?php if(empty($_COOKIE['login']) && empty($_COOKIE['user_id'])) { 
  //echo "очищено!";
  ?>
  <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    
  <p>
    <p><strong>Ваш логін<span style="color: red;">*</span></strong></p>
    <input class="res" type="text" name="login" >
  </p>
    <p>
    <p><strong>Ваш пароль<span style="color: red;">*</span></strong></p>
    <input  class="res"  type="password"  name="password" >

  </p>
     <p>
       
       <button type="submit"  name="submit">Увійти</button>
     </p>

  </form>
  <?php
} else{
         // echo "кукі не видалено";
    ?>

    <p style="color: green;"> Ви авторизовані!</p>
        <p><a href="close.php"> Вийти</a></p>
  <?php
}
?>
</section>
<script>

$(document).ready(function(){
$('form input[type="text"], form input[type="password"], form textarea').val('');
})
 
</script>
</div>





<div size="60"  style="   background-color:#DC143C;margin-top: 100px; height: 40px; text-align: center;border: none; ">
 <p><span style="         font-style: normal;
                    font-weight: 400;
                    font-variant: small-caps;
                  font-family:Courier, monospace;
                
        font-size: 30px;
      color: white;">Share with The World</p></span>
</div>

</body>
<footer >

        <div class="clfooter">
       
        <div class="onefooter">
        <div class="footerstyle">
    <p>Школа в соцмережах</p>
    <p><a href="#" style="text-decoration: none; color: #4d4dff;" class="bw1"><img src = "fb.png"  class="bw " style="position:absolute;   margin-left: -30px;  margin-top: -3px;overflow : hidden ">Facebook</p></a>

    <p><a href="#"  style="text-decoration: none; color: #4d4dff;" class="bw2"><img src = "tw.png" class="bw "  style="position:absolute; margin-left: -30px;  margin-top: -3px;">Twitter</p></a>
    <p><a href="#"  style="text-decoration: none; color: #4d4dff;" class="bw3"><img src = "gl+.png"  class="bw " style="position:absolute; margin-left: -30px;  margin-top: -3px;">Google+</p></a>

    </div>
    </div>

        <div class="twofooter">
       <p><a href="#"><img src="4r.png" class="blur"  style="position:absolute; margin-left: -186px; margin-top: 6px;"></p></a>
        <div class="footerstyle">
     
        <a href="file:///D:/Sublime%20Text%203/Paraktuka/Location.html" style=" text-decoration: none; color: #4d4dff; "> Лавриківська ЗОШ</a>
           <br>
           <p>
          Юридична адреса: 80335, Львівська обл.,<br> Жовківський р-н, с. Лавриків</p>
        <p> Телефон:(03252) 69123</p>
        <p> e-mail: lavrykiv1882@gmail.com</p>

        </div></div>
  
        </div>

  <div class="fot">
      <div style="float: right; padding-right: 200px; padding-top: 13px; " >
        <a href="#" class="tty" style="text-decoration: none;  margin-right: 10px;">Увiйти</a> 
        <a href="http://localhost/Praktuka/Location.html" class="tty" style="text-decoration: none;" >Розташуваня</a>
        </div>
   <div style=" font-style: normal;
                    font-weight: 400;
                     font-variant: small-caps;
                  font-family:Courier, monospace;
                  color: white;
                  margin-left: 200px;
                  padding-top: 10px;
        font-size: 20px;">© 2017 Vasyl Koliada</div>
    </div>

</footer>


</html>

