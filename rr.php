<?php
require "db.php";
$data = $_POST;

$errors = array();
  if($_POST['action']=='ff'){
                 $a =  R::getCol( 'SELECT login FROM cabinets' );
                       $_SESSION['logged_user']->login=$a[$_POST['iid']];
                    }
if($_POST['action']=='log'){
     $user =R::findOne('users' , 'login = ?' , array($data['login']));
	 if($user){
        if(password_verify($data['password'], $user->password))
        {
        	 $_SESSION['logged_user'] = $user;
        	 print '<div style = "color:green;">Ви авторизовані!</div> <hr>';	 
        }else{
		        $errors[] ="Пароль введено не правильно!";
		     }
	    }else{
	 			$errors[] ="Користувач з таким логіном не знайдений";
	         }
		if(!empty($errors)){
      
           print '<div style = "color:red;">'.array_shift($errors).'</div> <hr>';
       }

	 } else if ($_POST['action']=='adm'){

     $user =R::findOne('admins' , 'login = ?' , array($data['login']));
	 if($user){
        if(password_verify($data['password'], $user->password))
        {
        	 $_SESSION['logged'] = $user;
        	
        	 print '<div style = "color:green;">Ви авторизовані!</div> <hr>';	 
        }else{
		        $errors[] ="Пароль введено не правильно!";
		     }
	    }else{
	 	
	 			$errors[] ="Користувач з таким логіном не знайдений";
	         }
		if(!empty($errors)){
      
           print '<div style = "color:red;">'.array_shift($errors).'</div> <hr>';
       }
	 } 

	 else if($_POST['action']=='reg') {
	if(trim($data['login']) == ''){
	  $errors[] = 'Введіть логін!';
	}

	if($data['password'] == ''){
	  $errors[] = 'Введіть пароль!';
	}
    
	if($data['password1']!=$data['password']){
	  $errors[] = 'Повторний пароль введений не правильно';
	}
    if(R::count('users', "login = ?", array($data['login']))>0){
	  $errors[] = 'Користувач з таким логіном вже існує';
	}
	
	 if(empty($errors)){
          $users = R::dispense('users');
          $users->login = $data['login'];
          $users->password = password_hash($data['password'], PASSWORD_DEFAULT);
          R::store($users);
          $_SESSION['logged_user'] = $users;
          print '<div style = "color:green;">Реєстрацію успішно завершено!</div> <hr>';
	 } 
	 else
	 {    // echo "lf";
	      print '<div style = "color:red;">'.array_shift($errors).'</div> <hr>';
	 }
} 
?>
