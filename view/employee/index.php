	<?php
		$employeeList = getAllEmployees();
	?>
	<h1>Overzicht van personen</h1>
	<ul>
	<?php
		foreach($employeeList as $employee)
		{
			?>
			<li>
			<span><?php echo $employee['name']?> is <?php echo $employee['age']?> jaar oud.</span>
			<a href="<?=URL?>employee/edit/<?php echo $employee['id'];?>">Wijzigen</a> <a href="<?=URL?>employee/delete/<?php echo $employee['id'];?>">Verwijderen</a>
			</li>
			<?php
		}
		?>
	</ul>