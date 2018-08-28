<!DOCTYPE html>
<html>
<head>
	<?php
	require "db.php";
	?>
	<meta charset="UTF-8">
	  <script src="jquery-3.2.1.min.js"></script>
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<title>Реєстарція</title>
	
<script>

  function Redestr(){
  	var login = document.getElementById("login").value;
  	var password = document.getElementById("password").value;
  	 var password1 = document.getElementById("password1").value;
    $.ajax({
    url:"rr.php", 
    type: "POST", 
    data: {action:'reg',login : login , password: password , password1: password1 }, 
    success:function(data) {
    	if(data =='<div style = "color:green;">Реєстрацію успішно завершено!</div> <hr>'){
           $('#regestr').html(data); //зробити перехід на головну
           window.location = 'http://localhost/Diplom/mycabinet.php';}
           $('#regestr').html(data);
    },
      error: function(html){
           $('#regestr').html(data);   }
          }); 


};
</script>
</head>
<body>

<div id="regestr"></div>
<form id = "fbgh" method="POST" >
	<p>
	<p><strong>Введіть логін</strong>:</p>
	<input type="text" name="login" id = "login" value="<?php echo @$data['login'];?>">
    </p>
    <p>
	<p><strong>Введіть пароль</strong>:</p>
	<input type="password" name="password" id = "password"  value="<?php echo @$data['password'];?>">
    </p>
    <p><strong>Введіть пароль ще раз</strong>:</p>
	<input type="password" name="password1" id = "password1" value="<?php echo @$data['password1'];?>">
    </p>
<!--<p><input type="submit" name="nazvanie_knopki" value="Зареєстуватися" /></p>-->
</form>
<button type="button" onclick="Redestr()" >Click Me</button>
</body>
</html>


