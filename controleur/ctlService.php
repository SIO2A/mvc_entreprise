<?php
include './model/Db_service.php';

$action =$_GET['action'];

// switch = if (une condition)
switch($action){
//------------------------------------------------------------------------------------ Afficher la Liste Des Services--------------------------------------------------------
				case 'lister'://"case" : Permet de créer une fonction
				 //appel à la base de donnée le modele
				 $listeService = Db_service::getListeService();
	
				 //appel à la vue
				 include 'vue/vueService/listeService.php';
	
				 // "break" : Permet d'éviter que sa s'affiche deux fois
				 break;
	
//------------------------------------------------------------------------------------ Supprimer Des Données ---------------------------------------------------------------
				
				//supprimer une donnée de la base 
				case 'supprimer':
				Db_service::supprimerService($_GET['id']);
				$listeService = Db_service::getListeService();

				//appel à la vue
				include 'vue/vueService/listeService.php';
				break;

//------------------------------------------------------------------------------------- Ajouter Des données ------------------------------------------------------------------

				case 'validAjout':
					if(isset($_POST['nom']) && !empty($_POST['nom']))
    				{
        				$nom = $_POST['nom'];
        				$sql = "INSERT INTO service (id, nom) VALUES (NULL, '$nom')";
						Db_service::ajouterService($nom);
    				}
					
					include "vue/vueService/formAjouterService.php";
				break;

				case 'formAjout':
					include "vue/vueService/formAjouterService.php";
				break;

// ------------------------------------------------------------------------------------ Modifier Les Données -----------------------------------------------------------------
	
				case 'formEdit':
					$id = $_GET['id'];
					$unService = Db_service::getService($id);

					//appel à la vue du formulaire de modification
					include 'vue/vueService/formEditService.php';
				break;

				case 'validEdit':
					$id = $_POST['id'];
					$nom = $_POST['nom'];
					Db_service::modifierService($id, $nom);

					//Appel à la vue de listage service
					$listeService = Db_service::getListeService();
					include 'vue/vueService/listeService.php';
				break;

	}

?>