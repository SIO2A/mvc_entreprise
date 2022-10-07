<?php
include 'connectPdo.php';
class Db_metier{
	
	public static function getListeMetier()
	{
		$sql = "select * from metier ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	
	public static function supprimerMetier($id)
    {
        $sql = "delete from metier where id = $id";
        connectPdo::getObjPdo()->exec($sql);
    }
}

?>