<?php
unset($_COOKIE['user_id']);
unset($_COOKIE['login']);
setcookie('user_id', '', time()-3600 );
setcookie('login', '', time()-3600 );
 header("location: /Praktuka/Register.php");
?>