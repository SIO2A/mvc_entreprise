<?php
include 'connectPdo.php';

class Db_employes{
	
	public static function getListeEmployes()
	{
		$sql = "select * from employe";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

    public static function supprimerEmployes($id)
    {
        $sql = "delete from employe where id = $id";
        connectPdo::getObjPdo()->exec($sql);
    }

	public static function ajouterEmployes()
	{
		$sql = "INSERT INTO `employe`(`id`, `nom`, `prenom`, `date_naissance`, `date_arrivee`) VALUES (['id'])";
		connectPdo::getObjPdo()->exec($sql);
	}
	
}

?>