<?php
//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../entities/Utilisateur.php';


class UserDao{
private static $connector;

public function getConnector(){
    self::$connector= ConnexionDB::getInstance();
    return  self::$connector;
}
//Connection
public function connectUser(){
   try {
        $login=$_POST['username'];
        $password = $_POST['password'];
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
public function insertUser(){
    $connector = $this->getConnector();
    $utilisateur = new Utilisateur(NULL,$_POST['matricule'],$_POST['prenom'],$_POST['nom'],$_POST['adresse'],$_POST['telephone'],2,$_POST['login'],$_POST['password']);
    $insertUserRequest = "INSERT INTO utilisateur values(
            $utilisateur->getMatricule(),
            $utilisateur->getPrenom(),
            $utilisateur->getNom(),
            $utilisateur->getAdresse(),
            $utilisateur->getTelephone(),
            $utilisateur->getRole(),
            $utilisateur->getLogin(),
            $utilisateur->getPassword()
        )";
        $preparedInsert = $connector->prepare($insertUserRequest);
        $preparedInsert->execute();
    return $utilisateur;
   
}

 
}