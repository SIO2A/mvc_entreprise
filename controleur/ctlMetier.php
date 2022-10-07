<?php
include './model/Db_metier.php';

$action =$_GET['action'];

switch($action){
		
			case 'lister':
			 //appel à la base de donnée le modele
			 $listeMetier = Db_metier::getListeMetier();
			 
			 //appel à la vue
			 include 'vue/vueMetier/listeMetier.php';
			 
			 break;

			 //supprimer une donnée de la base 
			case 'supprimer':
				Db_metier::supprimerMetier($_GET['id']);
				$listeMetier = Db_metier::getListeMetier();
				 
				 //appel à la vue
				 include 'vue/vueMetier/listeMetier.php';
				 
				 break;
				
		}

?>