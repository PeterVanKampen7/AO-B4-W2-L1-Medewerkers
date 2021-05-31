<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="store">
	<div class="form-group col-sm-8">
		<label for="name">Naam:</label>
		<input type="text" class="form-control" name="name">
	</div>
	<div class="form-group col-sm-8">
		<label for="age">Age:</label>
		<select class="form-control" name="age">
			<?php
			for($i = 1; $i < 100; $i++){
				echo "<option>".$i."</option>";
			}?>
		</select>
	</div>
	<br>
	<button class="btn btn-primary ml-3" type="submit">Submit Employee</button>
</form>