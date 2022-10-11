<div class= "row bg-info">
<?php
	if(isset($_SESSION['login']))
	{
?>

               	<div class ="col">
				  <nav class="navbar navbar-expand-sm  justify-content-center p-0">
					<!-- Links -->
					<ul class="navbar-nav">
				
					   <li class="nav-item">
						  <a class="nav-link text-white" href='index.php?ctl=employe&action=lister'>Employes</a>
					   </li>

					   <li class="nav-item">
						  <a class="nav-link text-white" href="index.php?ctl=metier&action=lister">Metiers</a>
					   </li>

					   <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
						Services
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="index.php?ctl=service&action=lister">Lister</a>
							<a class="dropdown-item" href="index.php?ctl=service&action=formajouter">Ajouter</a>
						</div>
						</li>		   
					</ul>
				</nav>				
			</div>		
		<?php
		}
		?>		
			
		</div>