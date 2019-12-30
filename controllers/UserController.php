<?php
require_once '../mapping/UserDao.php';

	$dao = new UserDao();
	$user = $dao->connectUser();
	$noData = false;
	if($user==[]){
		print_r($noData);
	}else{
		print_r(json_encode($dao->connectUser()));
	}








   

