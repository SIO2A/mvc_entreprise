<?php
include './model/DbEmploye.php';

$action =$_GET['action'];

switch($action){
		
			case 'lister':
			 //appel à la base de donnée le modele
			 $listeEmploye = DbEmploye::getListeEmploye();
			 
			 //appel à la vue
			 include 'vue/vueEmploye/v_listeEmploye.php';
			 
			 break;
				
		}

?>