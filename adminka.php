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
	<script>
$(document).ready(main); 
  function sendReport(){
  			var nam = document.getElementById("nam").value;
  			var surname = document.getElementById("surname").value;
  			var email = document.getElementById("email").value;
  	 		var tel = document.getElementById("tel").value;
  	  	var us = document.getElementById("us").value;
  	  	var caf = document.getElementById("caf").value;
  	    var image = document.getElementById("image").value;
    $.ajax({
    url:"cabinets.php", 
    type: "POST", 
    data: {nam : nam , surname: surname , email: email, tel: tel, us: us, caf: caf, image: image }, 
    success:function(data) {
      $('#aass').html(data); 
    },
    error: function(html){
      $('#aass').html(data);   
    }
    }); 
};
</script>
</head>
<body>
 <h1>Адміністратор</h1>
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
      </ul>
    </div>
<div style="margin-left: 140px;">
<form  id = "af" method="POST">
<div style="display: flex; padding-left: 25px;">
  <div style = "margin-left: 30px;">
  <p><strong>№</strong>:</p>
  <?php 
           $lo = R::getCol( 'SELECT login FROM cabinets' );
               for ($i = 0; $i < count($lo); $i++) 
                    { 
                    print  "<p>".$i.")<hr></p>";
                    
                    }    

      ?></div> 
  <div style = "margin-left: 30px;">
  <p><strong>Ім'я</strong>:</p>

  <?php
           $a = R::getCol( 'SELECT nam FROM cabinets' );
               for ($i = 0; $i < count($a); $i++) 
                    { 
                      print "<p>".$a[$i]."<hr></p>"; 
                    } 
      ?>
    </div>
    <div style = "margin-left: 30px;">
  <p><strong>Прізвище</strong>:</p>
  <?php 
           $lo = R::getCol( 'SELECT login FROM cabinets' );
               for ($i = 0; $i < count($lo); $i++) 
                    { 
                       if(R::getCell("SELECT checked FROM ankets Where  login ='".$lo[$i]."'" ) !=NULL){
                          $r = R::getCell("SELECT checked FROM ankets Where  login ='".$lo[$i]."'");
                                     print  "<p > <a  class='ar' rel ='$i' value = '$i' href='#'style = 'margin-left: 30px; 
                      text-align: center;'>".$lo[$i]." </a><span style = 'float:right; margin-left: 60px; 
                    text-align: center;'>".$r."</span>  <hr></p>";
                                  
                     }else{
                          print  "<p> <a  class='ar' rel ='$i' value = '$i' href='#'style = 'margin-left: 30px; 
                      text-align: center;'>".$lo[$i]." </a>  <hr>  </p>";
                     }     
         }    

      ?>

   


  <script>
    $(function(){
      $(".ar").click(function(){
              var iid = $(this).attr("rel"); 
              
         
            $.ajax({
            url:"rr.php", 
            type: "POST", 
            data: {action : 'ff', iid:iid }, 
            success:function(data) {
            }

    });            
              window.location.href = "mycabinet.php";       
     });       
    });
      </script>


 </div>
</div>
</form>
</div>

<div style = "margin-left:  85%; ">
<a href="loguotadm.php" class="button button1" >Вийти </a></div>
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