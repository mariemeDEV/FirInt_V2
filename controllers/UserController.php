<?php
require_once '../mapping/UserDao.php';
$dao = new UserDao();
/*Connect a user */
	if(isset($_POST['username']) && isset($_POST['password'])){
		$user = $dao->connectUser();
		$noData = false;
		if($user==[]){
			print_r($noData);
		}else{
			print_r(json_encode($dao->connectUser()));
		}
	}else if(isset($_POST['addUser'])){
		print_r(json_encode($dao->insertUser()));
	}
/*Connect a user*/










   

