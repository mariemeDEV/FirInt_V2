<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=v2', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        echo("Connexion établie avec succés<br>");
    }catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
?>