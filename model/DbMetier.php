<?php
include 'connectPdo.php';

class DbMetier{
	
	public static function getListeMetier()
	{
		$sql = "select * from metier ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	
}

?>