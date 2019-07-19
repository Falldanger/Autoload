<?php
	echo '<b>Autoload:</b>'.'</br>';

	set_include_path(get_include_path().PATH_SEPARATOR.'lib');
	spl_autoload_extensions('.php');
	spl_autoload_register();

	$car = new Car();
	$car->move();

	$plane = new Aircraft();
	$plane->fly();

?>