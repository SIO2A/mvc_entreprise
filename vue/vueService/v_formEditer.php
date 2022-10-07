<div class ="row">

<div class="container-fluid mt-3">
	<div class="d-flex justify-content-center p-1 mb-2">   
		<form action="index.php?ctl=service&action=validEdit" method="POST">
			<div class="form-group">
			  <label for="nomService">Service à modifier : </label><br>
			  ID :<input type="text" name = "num" class="form-control" readonly value=<?php echo $unService['id']; ?>>
			  Nom :<input type="text" name = "nom" class="form-control" value=<?php echo $unService['nom']; ?>>   
			  <button type="submit" class="btn btn-primary">Modifier</button>
			</div>
		</form>
		
	 </div>
</div>


</div>