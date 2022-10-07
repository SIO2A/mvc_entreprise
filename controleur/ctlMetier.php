<?php
include './model/DbMetier.php';

$action =$_GET['action'];

switch($action){
		
			case 'lister':
			 //appel à la base de donnée le modele
			 $listeMetier = DbMetier::getListeMetier();
			 
			 //appel à la vue
			 include 'vue/vueMetier/v_listeMetier.php';
			 
			 break;
				
		}

?>