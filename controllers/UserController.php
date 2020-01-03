<?php
require_once '../mapping/UserDao.php';
require_once '../entities/Utilisateur.php';

$dao = new UserDao();
$usersData = $dao->getUsers();
require_once('../users.php');
/*Connect a user */
	if(isset($_POST['username']) && isset($_POST['password'])){
		$user = $dao->connectUser($_POST['username'],$_POST['password']);
		$noData = false;
		if($user==[]){
			print_r($noData);
		}else{
			print_r(json_encode($dao->connectUser($_POST['username'],$_POST['password'])));
		}
	//Insertion d'un utilisateur
	}else if(isset($_POST['addUser'])){
		$userRole;
		$optionUser=$_POST['optionCompte'];
		switch($optionUser){
			case 'adminOpt':
				$userRole=1;
			break;
			case 'intermediaireOpt':
				$userRole=2;
			break;
			case 'controlleurOpt':
				$userRole=3;
			break;
		}
		$utilisateur = new Utilisateur(NULL,$_POST['matricule'],$_POST['prenom'],$_POST['nom'],$_POST['adresse'],$_POST['telephone'],$userRole,$_POST['login'],$_POST['password']);
		$dao->insertUser($utilisateur);
		print_r("Insertion effectuée avec succés.");
	}
/*Connect a user*/










   

