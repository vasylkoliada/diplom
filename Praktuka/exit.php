<?php
unset($_COOKIE['user_id']);
unset($_COOKIE['login']);
setcookie('user_id','',-1 , '/');
setcookie('login','',-1 , '/');
   $home_url = 'http://' . $_SERVER['HTTP_HOST'];
           header('location: '. $home_url);
?>