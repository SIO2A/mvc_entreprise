<?php
include 'connectPdo.php';

class DbEmploye{
	
	public static function getListeEmploye()
	{
		$sql = "select * from employe ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	
}

?>