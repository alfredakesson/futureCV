<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<?php require 'dataFunc.php'; ?>
	<body>
		<div id="top_border">
			<ul>
   				<li><a href='generator.php'>Generate CV</a></li>
   				<li><a href='index.php'>Preview CV</a></li>
			</ul>
		</div>


		<div id="content">
		<h1>Choose a layout!</h1>

		<div class="container_box"><h2><?php echo getUserByID($_GET["ID"]); ?></h2>
			
			<div id="community_container">
				

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
		



<!--
Arbetslivserfarenhet
Egenskaper
Utbildning
Top5-"VALFRITT"  <<Programmeringsspråk
-->

		</div>
		<form name="input" action="cratePage.php" method="post">

					<p>Skriv Namn:</p>
					<input type="text" name="name">

					<p>Skriv text:</p>
					<textarea rows="4" cols="50" name="text1">
					</textarea>
					<p>Välj bakgrundsfärg:</p>
					<select name="color1">
  					<option>Azure</option>
  					<option>Coral</option>
  					<option>Cyan</option>
  					<option>Gold</option>
  					<option>Green</option>
  					<option>Indigo</option>
					</select>

					<p>Skriv text:</p>
					<textarea rows="4" cols="50" name="text2">
					</textarea>
					<p>Välj bakgrundsfärg:</p>
					<select name="color2">
  					<option>Azure</option>
  					<option>Coral</option>
  					<option>Cyan</option>
  					<option>Gold</option>
  					<option>Green</option>
  					<option>Indigo</option>
					</select>

					<p>Skriv text:</p>
					<textarea rows="4" cols="50" name="text3">
					</textarea>
					<p>Välj bakgrundsfärg:</p>
					<select name="color3">
  					<option>Azure</option>
  					<option>Coral</option>
  					<option>Cyan</option>
  					<option>Gold</option>
  					<option>Green</option>
  					<option>Indigo</option>
					</select>

					<p>Skriv text:</p>
					<textarea rows="4" cols="50" name="text4">
					</textarea>
					<p>Välj bakgrundsfärg:</p>
					<select name="color4">
  					<option>Azure</option>
  					<option>Coral</option>
  					<option>Cyan</option>
  					<option>Gold</option>
  					<option>Green</option>
  					<option>Indigo</option>
					</select>

					<input type="submit" value="Skicka">
			</form>
</div>

		



	</body>
</html>