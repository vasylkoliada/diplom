
<?php

$ty= (isset($_POST['x']) ? $_POST['x'] : null);
echo $ty;

if($ty==1){
$myFile = fopen("1.txt", "w");

$text = (isset($_POST['newText']) ? $_POST['newText'] : null);

fwrite($myFile, $text);

fclose($myFile);
}


?>
 
