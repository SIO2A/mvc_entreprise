<?php
include './model/DbService.php';

$action =$_GET['action'];

switch($action){
		
			case 'lister':
			 //appel à la base de donnée le modele
			 $listeService = DbService::getListeService();
			 
			 //appel à la vue
			 include 'vue/vueService/v_listeServices.php';
			 
			 break;

			 case 'supprimer' :
			  $id=$_GET['id'];
			  DbService::supprimerService($id);
			  $listeService = DbService::getListeService();
			  include 'vue/vueService/v_listeServices.php'; 
			 break;


			 case 'formajouter' :
				include 'vue/vueService/v_ajouterServices.php'; 
			   break;

			 case 'ajouter' :
			  $nom=$_POST['nom'];
			  DbService::ajouterService($nom);
			  $listeService = DbService::getListeService();
			  include 'vue/vueService/v_listeServices.php'; 
			 break;

			 case 'ajouterservice' :
				include 'controleur/ctlService.php';
				break;

			case 'editer' :
				$id=$_GET['id'];
				$unService = DbService::getService($id);
				include 'vue/vueService/v_formEditer.php'; 
			break;
			
			case 'validEdit' :
				$nom = $_POST['nom'];
				$id= $_POST['num'];
				DbService::modifService($id,$nom);
				$listeService = DbService::getListeService();
				include 'vue/vueService/v_listeServices.php'; 
			break;

			case 'test' :
				break;

				
		}

?>