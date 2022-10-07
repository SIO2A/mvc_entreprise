<div class ="col-12">
  <table class="table p-0">
			   <thead class="thead-dark p-0">
				  <tr>
					 <th>ID</th>
					 <th>Nom</th>
                     <th>Prenom</th>
                     <th>Date naissance</th>
                     <th>Date arrivée</th>
					 <th>Action</th>
			   </thead>
		    <tbody>		   	 
				<?php
				foreach($listeEmployes as $ligne){
					 echo "<tr>
							 <td>".$ligne['id']."</td>
							 <td>".$ligne['nom']."</td>
                             <td>".$ligne['prenom']."</td>
                             <td>".$ligne['date_naissance']."</td>
                             <td>".$ligne['date_arrivee']."</td>
							 <td>
								<a href=index.php?ctl=employes&action=supprimer&id=".$ligne['id']."><img src='./vue/images/remove.png' height=10 width=10'></a>						 
							 </td> 
						   </tr>";		
				}
				?>
		    </tbody>
  </table>   
        		  
</div>