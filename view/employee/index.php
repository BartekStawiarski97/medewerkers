	<?php
		// maak een overzicht lijst van ALLE personen
	
	?>
	<h1>Overzicht van personen</h1>
	<ul>
		<?php foreach ($employees as $employee) { ?>   
		<li>
			<span><?php echo $employee["name"] ?></span>
		    <span><?php echo $employee["age"] ?></span>
		</li>

			<?php
			
			?>
			<a href="<?php echo URL ?>employee/edit/<?php echo $employee["id"] ?>">Wijzigen</a> 
			<a href="<?php echo URL ?>employee/destroy/<?php echo $employee["id"] ?>">Verwijderen</a>
		<?php } ?>
	</ul>