<h1>Persoon wijzigen</h1>
	<form name="update" method="POST" action="<?php echo URL ?>employee/update/<?php echo $employee["id"] ?>">
	    <input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
	    
	    <input type="text" name="name" placeholder="name" value="<?php  echo $employee["name"] ?>">
	    <input type="number" name="age" placeholder="age(numbers)"value="<?php  echo $employee["age"] ?>">	
	    <input type="submit" value="UPDATE">
	</form>