<?php
include './model/DbUtilisateur.php';

$action =$_GET['action'];

switch($action){
		
			case 'formConnect':
			 //appel à la base de donnée le modele
			 
			 //appel à la vue
			 include 'vue/vueUtilisateur/v_formulaire.php';
			 
			 break;		
             
             case 'validConnect':
             //appel à la base de donnée le modele
             if(isset($_POST['login'])&& isset($_POST['password']))
             {
                $login = $_POST['login'];
                $password = $_POST['password'];
                
                $user = DbUtilisateur::getUser($login,$password);
                
                if(is_array($user))
                {
                    $_SESSION['login']=$login;
                    header('Location: index.php');
                }
                else
                {
                    $message="Login ou mot de passe incorrect";
                    include "vue/vueUtilisateur/v_formulaire.php";
                }
            }
			 //appel à la vue
			 
			 break;		

             case 'deconnect':
                //appel à la base de donnée le modele
                session_unset();
                //unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
                //appel à la vue
                
                break;		

            case 'validSignUp':
                $login = $_POST['login'];
                $password = $_POST['password'];
                DbUtilisateur::addUser($login,$password);

                echo "Le compte a bien été créé, vous pouvez vous connecter";

                //appel a la vue
                
                break;
		}

?>