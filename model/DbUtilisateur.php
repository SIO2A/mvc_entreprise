<?php
include 'connectPdo.php';

class DbUtilisateur{
	
    public static function getUser($login,$password)
	{
		$sql = "select login,password from utilisateur WHERE login='$login' AND password='$password' ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}

	public static function addUser($login,$password)
	{
		$sql = "INSERT INTO utilisateur (id, login, password) VALUES (NULL, '$login', '$password');";
		connectPdo::getObjPdo()->exec($sql);	
	}
}

?>