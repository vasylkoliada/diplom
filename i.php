<?php
require "db.php"; 
?>
<?php if(isset($_SESSION['logged_user'])) :?>
 Ви авторизовані! <br>
 Привіт , <?php echo $_SESSION['logged_user']->login; ?>
 <hr>
<a href="logout.php">Вийти </a>
<?php else : ?>
	<a href="reged.php">Зареєстурватися</a><br>
	<a href="login.php">Увійти</a>
<?php endif;?>