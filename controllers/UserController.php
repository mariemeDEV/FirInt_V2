<?php
require_once('ConnexionDB.php');
/*try{
    $connector = ConnexionDB::getConnexion();
    $getUser = 'select * from utilisateur';
    $administrateur = $connector->query($getUser);
    $tab = array();
    while($rows = $administrateur->fetch()){
        $tab[] = $rows;
    }
    echo(json_encode($tab));
}catch(Exception $excp){
    echo(json_encode($excp));
}*/
try {
	$db = DB::getInstance();
	DB::setCharsetEncoding();
	$sqlExample = 'select * from utilisateur';
	$stm = $db->prepare($sqlExample);
	$stm->execute();
	return $stm->fetchAll(PDO::FETCH_ASSOC);
  
} catch (Exception $e) {
	print $e->getMessage();
  
}

   

