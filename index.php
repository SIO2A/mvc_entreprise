<?php

session_start();

include 'vue/entete.php';

include 'vue/menu.php';	

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
		
			case 'service':
			 include 'controleur/ctlService.php';
			 break;

			case 'employe' :
			 include 'controleur/ctlEmploye.php';
			 break;

			 case 'metier' :
			  include 'controleur/ctlMetier.php';
			  break;		 
		}
	
}
include 'vue/pied.php';

?>        				 
         
