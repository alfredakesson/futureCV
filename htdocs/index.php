<?php	
	session_start();
	
	if (!isset($_SESSION[’ServGen’])) {
		session_destroy();
		session_start();
	}
	session_regenerate_id();
	$_SESSION[’ServGen’] = TRUE;
	require 'php_fnc.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="top_border">
			<ul>
   				<li><a href='generator.php'>Generate CV</a></li>
   				<li><a href='index.php'>Preview CV</a></li>
			</ul>
		</div>
		

		<div id="content">
			<div class="container_box"><h2>Jens Gustafsson</h2>
				<div id="community_container">
				<!--<div class="small_square">
					<p>F</p>
				</div>-->

				<div class="small_square_img">
					<img src="facebook.png" width="25px">
				</div>				
				<div class="small_square_img">
					<img src="email.png" width="25px">
				</div>	

				<div class="small_square_img">
					<img src="linkedin.png" width="25px">
				</div>	

			</div>
		</div>


<!--
Arbetslivserfarenhet
Egenskaper
Utbildning
Top5-"VALFRITT"  <<Programmeringsspråk
-->

		</div>


		



	</body>
</html>