<?php
	session_start();
	
	if (!isset($_SESSION[’ServGen’])) {
		session_destroy();
		session_start();
	}
	session_regenerate_id();
	$_SESSION[’ServGen’] = TRUE;
	
	$color1 = '#B8CB95';
	$color2 = '#FFFFD9';
	$color3 = '#7AA5B3';
	$color4 = '#FEADAC';

	 function FunctionName()
	{
	}
?>