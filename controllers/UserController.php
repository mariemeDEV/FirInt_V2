<?php
require_once '../mapping/UserDao.php';
require_once '../entities/Utilisateur.php';

/*Connect a user */
	if(isset($_POST['username']) && isset($_POST['password'])){
		$dao = new UserDao();
		$user   = $dao->connectUser();
		$noData = false;
		if($user==[]){
			echo($noData);
		}else{
			echo(json_encode($user));
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
		$dao = new UserDao();
		$utilisateur = new Utilisateur(NULL,$_POST['matricule'],$_POST['prenom'],$_POST['nom'],$_POST['adresse'],$_POST['telephone'],$userRole,$_POST['login'],$_POST['password'],0);
		$dao->insertUser($utilisateur);
		echo("Insertion effectuée avec succés.");
	}
/*Connect a user*/













   

