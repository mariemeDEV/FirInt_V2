<?php
require_once '../mapping/UserDao.php';
/*Differentes actions intermédiaires*/
if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'pageConnect':
            require_once('../view/connexion.php');
        break;
    }
}

/*Differentes actions admin*/
	if(isset($_GET['action'])){
        $resource = '../view/admin/';
		switch($_GET['action']){
            case 'dashboard' :
                require_once($resource.'admin_index.php');
            break;
            case 'productions':
                require_once($resource.'bureaux.php');
            break;
            case 'bureaux':
                require_once($resource.'bureaux.php');
            break;
            case 'commandes':
                require_once($resource.'bureaux.php');
            break;
            case 'dotations':
                require_once($resource.'bureaux.php');
            break;
			case 'listeUsers':
				$dao = new UserDao();
				$usersData = json_encode($dao->getUsers());
				require_once($resource.'users.php');
            break;
            default:
                require_once($resource.'pages_404.php');
            break;
		}
	}