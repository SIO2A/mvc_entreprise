<div class ="col-12">
  <table class="table p-0">
			   <thead class="thead-dark p-0">
				  <tr>
					 <th>ID</th>
					 <th>Nom</th>
					 <th>Action</th>
				  </tr>
			   </thead>
		    <tbody>		   	 
				<?php
				foreach($listeMetier as $ligne){
					 echo "<tr>
							 <td>".$ligne['id']."</td>
							 <td>".$ligne['nom']."</td>
							 <td>
								<a href=index.php?ctl=metier&action=supprimer&id=".$ligne['id']."><img src='./vue/images/remove.png' height=10 width=10'></a>						 
							 </td> 
						   </tr>";		
				}
				?>
		    </tbody>
  </table>   
        		  
</div>