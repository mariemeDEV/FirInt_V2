<?php
//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../entities/Utilisateur.php';


class UserDao{
  
private static $connector;

public function connectUser(){
   try {
        $login=$_POST['username'];
        $password = $_POST['password'];
        self::$connector= ConnexionDB::getInstance();
        $connectRequest = "SELECT * FROM utilisateur WHERE login='$login' AND password='$password' LIMIT 1";
        $prepared=self::$connector->prepare($connectRequest);
        $prepared->execute();
        $data = $prepared->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

 
}