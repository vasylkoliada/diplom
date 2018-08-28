
<?php
	function get_options(){
	global $db;
     
     $us = isset($_POST['us']) ? $_POST['us'] : '';

	$query = "SELECT * FROM cont WHERE id = '$us' " ;
	$res = mysqli_query($db, $query);

	$options = array();

	while($row = mysqli_fetch_assoc($res)){

	$options[$row['id']] = $row;
	}

	return $options;

}

function update_option(){


	global $db;
	$class = mysqli_real_escape_string($db, $_POST['new_val']);
	$id = (int)$_POST['id'];
	$query ="UPDATE cont SET class ='$class' WHERE id = $id";
	$res = mysqli_query($db, $query);
	if(mysqli_affected_rows($db))  return true;
	else return false;
}


if(!isset($_COOKIE['user_id'])){

   if(isset($_POST['submit'])){

    $user_login =mysqli_real_escape_string($db, trim($_POST['login']));
     $user_password =mysqli_real_escape_string($db, trim($_POST['password']));

     if(!empty($user_login) && !empty($user_password) ){
  
      $query = "SELECT `user_id`, `login` FROM users WHERE login = '$user_login' AND password ='$user_password' ";
      $data = mysqli_query($db, $query);

      if(mysqli_num_rows($data)==1){

          $row =mysqli_fetch_assoc($data);
           setcookie('user_id', $row['user_id'], time() + (60*60*24*7));
           setcookie('login', $row['login'], time() + (60*60*24*7) );
          // $home_url = 'http://' . $_SERVER['HTTP_HOST'];
           header("location: /Praktuka/Register.php");

      }
      else{
        echo "НЕправильо введені дані...";

     
      }
     }
     else {
        echo "Дані введені невірно...";
     }
   }

}



?>