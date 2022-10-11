<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Gestion d'entreprise</title>
      <link href="vue/css/styles.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>
  <body>
   <div class= "container-fluid m-0">		
         <div class="row">
         <div class ="col-3 bg-dark text-white">
               <?php
                  if(isset($_SESSION['login'])){
                     echo 'Bonjour, ',$_SESSION['login'];
                  }
               ?>
			   </div>
            <div class ="col-6 bg-dark">
               <p class= "text-center text-white">Gestion entreprise</p>					   
			   </div>
            <div class="col-3 bg-dark">
               <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                  <img src="vue/images/profil.png">
                     <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                     <li role="presentation"><a class= "nav-link" href='index.php?ctl=utilisateur&action=formConnect'>Se connecter</a></li>
                     <li role="presentation"><a class= "nav-link" href='index.php?ctl=utilisateur&action=deconnect'>Se déconnecter</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>        
   </div>


		