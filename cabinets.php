<?php
require "db.php";
$data = $_POST;
$errors = array();
if($_POST['action']=='zaz'){
	if(trim($data['nam']) == ''){
	  $errors[] = "Введіть  ім'я!";
	}
	if($data['surname'] == ''){
	  $errors[] = 'Введіть прізвище!'; 
	}
	if($data['email'] == ''){
	  $errors[] = 'email';
	}
	if($data['tel'] == ''){
	  $errors[] = 'tel';
	}
	 if(empty($errors)){
          $cabinets = R::dispense('cabinets');
          $cabinets->nam = $data['nam'];
          $cabinets->surname = $data['surname'];
          $cabinets->email = $data['email'];
          $cabinets->tel = $data['tel'];
          $cabinets->us = $data['us'];
          $cabinets->caf = $data['caf'];   
          $cabinets->st = $data['st']; 
          $cabinets->lpase= $data['lpase']; 
          $cabinets->mk= $data['mk'];
          $cabinets->login = $_SESSION['logged_user']->login; 
          R::store($cabinets);
          print '<div style = "color:green;">Відправлено!</div> <hr>';
	 } 
	 else
	 {    // echo "lf";
	      print '<div style = "color:red;">'.array_shift($errors).'</div> <hr>';
	 }
	} 
	
	 if($_POST['action']=='but'){

	 	    R::exec( "UPDATE ankets SET checked ='".$data['ch']."'  WHERE login ='".$_SESSION['logged_user']->login."'");
         print '<div style = "color:green;">Відправлено!</div> <hr>';

	 }
	  else if($_POST['action']=='rom'){
	  	     if($data['cam'] == ''){
	           $errors[] = 'виберіть кімнату';
	                }
	  		if($data['flor'] == ''){
	         $errors[] = 'Виберіть поверх!'; 
	         }
	          
              $tot =  R::getCell("SELECT coutnnam FROM dormitory where
               room ='".$data['r']."' 
    		AND floor ='".$data['flor']."' 
    		AND dormnum ='".$data['cam']."'");
                  if($tot >= 4){
                     print($tot) ;
                  } else {
                  	R::exec( "UPDATE dormitory SET coutnnam=IF(coutnnam < 4, coutnnam + 1, coutnnam) , login ='". $_SESSION['logged_user']->login."'  WHERE room ='".$data['r']."' 
    	         	AND floor ='".$data['flor']."' 
    	        	AND dormnum ='".$data['cam']."'");

                  	print '<div style = "color:green;">'.$data["r"].''.$data["cam"].''.$data["flor"].'</div> <hr>';
                  
                  if(empty($errors)){
          $ankets = R::dispense('ankets');
          $ankets->room = $data['r'];
          $ankets->dormi = $data['cam'];
       

          $ankets->login = $_SESSION['logged_user']->login; 
          $ankets->checked = NULL;


          R::store($ankets);
          print '<div style = "color:green;">Відправлено!</div> <hr>';
	 } }

	
	 
      //   print '<div style = "color:green;">Відправлено!</div> <hr>';

       /*  print '<div style = "color:green;">'.$data["r"].''.$data["cam"].''.$data["flor"].'</div> <hr>';*/

	 }

?>