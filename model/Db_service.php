<?php
include 'connectPdo.php';
class Db_service{
	
	public static function getListeService()
	{
		$sql = "select * from service ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

	public static function supprimerService($id)
    {
        $sql = "DELETE FROM service WHERE id = $id";
        connectPdo::getObjPdo()->exec($sql);
    }

	public static function ajouterService($nom)
	{
		$sql = "INSERT INTO service (id, nom) VALUES (0, '$nom')";
        connectPdo::getObjPdo()->exec($sql);
    }

	public static function getService($id)
	{
		$sql = "select * from service where id = $id";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}	

	public static function modifierService($id, $nom)
	{
		$sql = "update service set nom = '$nom' where service.id = $id";
		connectPdo::getObjPdo()->exec($sql);	
	}	
}

?>