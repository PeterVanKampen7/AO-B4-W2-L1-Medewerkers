<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?=URL?>employee/update">
	<input type="hidden" name="id" value="<?=$id ?>"/>
	<!--  Bouw hier de rest van je formulier   -->
	<div class="form-group col-sm-8">
		<label for="name">Naam:</label>
		<input type="text" class="form-control" name="name" value="<?=$name ?>">
	</div>
	<div class="form-group col-sm-8">
		<label for="age">Age:</label>
		<select class="form-control" name="age">
			<?php
			for($i = 1; $i < 100; $i++){
				if($i == $age){
					echo "<option selected>".$i."</option>";
				} else {
					echo "<option>".$i."</option>";
				}		
			}?>
		</select>
	</div>
	<br>
	<button class="btn btn-primary ml-3" type="submit">Submit Employee</button>
</form>