<?php
//namespace mapping;
require_once '../controllers/ConnexionDB.php';

class UserDao{
private static $connector;

public function getConnector(){
    self::$connector= ConnexionDB::getInstance();
    return  self::$connector;
}
//Connection
public function connectUser($login,$password){
   try {
        $connector = $this->getConnector();
        $connectRequest = "SELECT * FROM utilisateur WHERE login='$login' AND password='$password' LIMIT 1";
        $prepared=$connector->prepare($connectRequest);
        $prepared->execute();
        $data = $prepared->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
//Insertion d'un nouvel uitilisateur
public function insertUser(Utilisateur $user){
    $connector = $this->getConnector();
    $insertUserRequest = $connector->prepare(
        "insert into utilisateur values(
        '".$user->getId()."',
        '".$user->getMatricule()."',
        '".$user->getPrenom()."',
        '".$user->getNom()."',
        '".$user->getAdresse()."',
        '".$user->getTelephone()."',
        '".$user->getRole()."',
        '".$user->getLogin()."',
        '".$user->getPassword()."'
        )"
    );
    try{
   $insertUserRequest->execute(); 
//Action à effectuer s'il s'agit d'un intermédiaire
        if(isset($_POST['optionCompte']) && $_POST['optionCompte']=='intermediaireOpt') {
            $idUser= $connector->prepare("SELECT MAX(id_user) FROM `utilisateur`");
            $idUser->execute();
            $data =$idUser->fetchAll(PDO::FETCH_ASSOC);
            $lastId=$data[0]['MAX(id_user)'];
            $insertIntRequest= $connector->prepare(
                "insert into intermediaire values(
                    '".NULL."',
                    '".$lastId."'
                )"
                );
                $insertIntRequest->execute();
        } 
    }catch(Exception $e){
        $e->getMessage();
    }
    }
//Requete pour obtenir l'ensemble des utilisateurs
function getUsers(){
    try {
        $connector = $this->getConnector();
        $usersRequest = "SELECT * FROM utilisateur";
        $prepared=$connector->prepare($usersRequest );
        $prepared->execute();
        $users = $prepared->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
}


