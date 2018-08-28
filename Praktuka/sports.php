<?php
 //строковые данные должны быть в кодировке UTF-8
$filename = 'test.html';
$data = $_POST[data];
file_put_contents ($filename, $data);



?>