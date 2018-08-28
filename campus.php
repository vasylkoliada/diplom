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
$(document).ready(main);

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
         <form > 
      <h4><strong>Гуртожиток</strong>:</h4>
      <select name="dormi" id = "cam" style="width: auto; display:inline-block;"  value="<?php echo $data['dormi'];?>">
      <option value="0">Вибрати:</option>
      <option value="1"> 1 </option>
      <option value="2"> 2 </option>
      <option value="3"> 3 </option>
      <option value="4"> 4 </option>
      <option value="5"> 5 </option>
      <option value="6"> 6 </option>
      <option value="7"> 7 </option>
      <option value="8"> 8 </option>
      </select>

         <h4><strong>Поверх</strong>:</h4>
      <select name="dormi" id = "flor" style="width: auto; display:inline-block;"  value="<?php echo $data['dormi'];?>">
      <option value="0">Вибрати:</option>
      <option value="1"> 1 </option>
      <option value="2"> 2 </option>
      <option value="3"> 3 </option>
      <option value="4"> 4 </option>
      <option value="5"> 5 </option>
      </select>
      <style>
        .cell{
          
            text-align: center;
          width: 40px !important;
          height: 40px;
            border: 1px solid  black; /* Параметры границы */

            padding: 10px; /* Поля вокруг текста */
        }
        .cell:hover{
          background: red;
        }
      </style>
    </form>
    <div id="ass"></div>
      <h4><strong>Виберіть кімнату</strong>:</h4>
    <div id = "dd"style="margin:70px; padding: 40px; border: 1px solid  black; opacity: 0; ">
       <div style="display: flex; flex-wrap: wrap;">
             <div style="display: flex; flex-direction: column; margin-left: 20px; ">
              <div  class="cell" id="nav" value = "0" name ="1" >К</div>
               <div  class="cell"  id="nav"value = "1" >1</div>
               <div class="cell"  id="nav" value = "2">2</div>
               <div   class="cell"  id="nav" value = "3">3</div>
               <div  class="cell"  id="nav" value = "4">4</div>
               <div  class="cell"  id="nav" value = "5">5</div>
                <div  class="cell"  id="nav" value = "6">6</div>
               </div>
              <div style="display: flex; flex-direction: column; margin-left: 20px;   ">
              <div class="cell" value = "0">Т</div>
               <div class="cell" value = "0">Д</div>
               <div class="cell" value = "7">7</div>
               <div class="cell" value = "8">8</div>
              <div class="cell" value = "9">9</div>
               <div class="cell" value = "10">10</div>
               </div>
            <div style="display: flex; flex-direction: row;  margin-left: 20px; margin-top: 260px;">
               <div class="cell" value = "49">49</div>
               <div class="cell" value = "48">48</div>
               <div class="cell"  value = "47">47</div>
               <div class="cell"  value = "46">46</div>
               <div class="cell"  value = "45">45</div>
               <div class="cell"  value = "44">44</div>
               <div class="cell"  value = "43">43</div>
               <div class="cell"  value = "42">42</div>
               <div class="cell"  value = "41">41</div>
               <div class="cell"  value = "40">40</div>
               <div class="cell"  value = "39">39</div>
               <div class="cell"  value = "38">38</div>
               <div class="cell"  value = "37">37</div>
               <div class="cell"  value = "36">36</div>
           
            </div>
      <div style="display: flex; flex-direction: column; margin-left: 20px;   ">
              <div class="cell" >Т</div>
               <div class="cell">Д</div>
               <div class="cell" value = "33">33</div>
               <div class="cell" value = "34">34</div>
              <div class="cell" value = "35">35</div>
               <div class="cell" value = "36">36</div>
               </div>
           <div style="display: flex; ">
             <div style="display: flex; flex-direction: column;margin-left: 20px; ">
              <div class="cell">К</div>
               <div class="cell" value = "32">32</div>
               <div class="cell" value = "31">31</div>
               <div class="cell" value = "30">30</div>
               <div class="cell" value = "29">29</div>
               <div class="cell" value = "28">28</div>
                <div class="cell" value = "27">27</div>
               </div>
            </div>
      <div style="display: flex;  flex-direction: row; margin-left: 20px; 
      margin-top: 20px;">
               <div class="cell" value = "7">7</div>
               <div class="cell" value = "8">8</div>
               <div class="cell" value = "9">9</div>
               <div class="cell" value = "10">10</div>
               <div class="cell" value = "11">11</div>
               <div class="cell" value = "12">12</div>
               <div class="cell" value = "13">13</div>
               <div class="cell" value = "14">14</div>
               <div class="cell" value = "15">15</div>
               <div class="cell" value = "16">16</div>
               <div class="cell" value = "17">17</div>
               <div class="cell" value = "18">18</div>
               <div class="cell" value = "19">19</div>
               <div class="cell" value = "20">20</div>
               <div class="cell" value = "21">21</div>
               <div class="cell" value = "22">22</div>
                <div class="cell"value = "23">23</div>
                <div class="cell" value = "24">24</div>
               <div class="cell" value = "25">25</div>
                <div class="cell" value = "26">26</div>
            </div>
           <script>
            $(function () {
  $("#cam").change(function() {
    var val = $(this).val();
    if(val === "5") {
        $("#dd").css("opacity",1);
       
    } else{
       $("#dd").css("opacity",0);
    }
    
  });
});
        $('.cell').click(function(){
        var r = $(this).attr("value");
        var cam = document.getElementById("cam").value;
        var flor = document.getElementById("flor").value;
    $.ajax({
    url:"cabinets.php", 
    type: "POST", 
    data: {action:'rom',r:r, cam:cam,flor:flor }, 
    success:function(data) {
     if(data==4){alert("Зайнято!")} else  {$('#ass').html(data); 
 document.location.href = "http://localhost/Diplom/mycabinet.php";  }
    },
    error: function(html){
      $('#ass').html(data);   
    }
    });
    });
</script>

 </div>
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