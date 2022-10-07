<?php

session_start();

include 'vue/entete.php';

include 'vue/menu.php';	

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
		
			case 'employes':
			 include 'controleur/ctlEmployes.php';
			 break;
			 
		}
	
}
include 'vue/pied.php';

?> 