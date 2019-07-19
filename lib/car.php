<?php 
	
	set_include_path(get_include_path());
	spl_autoload_extensions('.php');
	spl_autoload_register();

	class Car{
		use CanMove;
	}

?>