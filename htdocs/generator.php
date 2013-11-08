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
			<h1 style="margin-top: 30px; margin-bottom:50px">Step 1: <font color="#808080">Choose a layout!</font></h1>
			<div id="container_box_mini">

				<a href='#'>
					<div class="box_mini">
						<div class="square"></div>
						<div class="square" style="background-color:red"></div>
						<div class="square" style="background-color:blue"></div>
						<div class="square" style="background-color:yellow"></div>
					</div>
				</a>
				
				<a href='#'>
					<div class="box_mini">
						<div class="rectangle_horizontal" style="background-color:red"></div>
						<div class="rectangle_horizontal" style="background-color:blue">
							<div class="rectangle_horizontal_inner" style="background-color:yellow"></div>						
						</div>
						<div class="rectangle_horizontal" style="background-color:green"></div>
					</div>
				</a>
				<a href='#'>
					<div class="box_mini">
						<div class="rectangle_vertical" style="background-color:red"></div>
						<div class="rectangle_vertical" style="background-color:blue">
							<div class="rectangle_vertical_inner" style="background-color:purple"></div>						
						</div>
						<div class="rectangle_vertical" style="background-color:green"></div>
					</div>
				</a>

			</div>
			
			<h1 style="margin-top: 0px; margin-bottom:50px;">Step 2: <font color="#808080">Fill your boxes!</font></h1>

			<div id="form_box">
				

					<form name="input" action="cratePage.php" method="post">
				<div class="form_div" style= "background-color:blue;">
					<p>Skriv Namn:</p>
					<input type="text" name="name">
				</div>
				<div class="form_div" style= "background-color:green;">
						<p>Skriv text:</p>
						<textarea rows="4" cols="50" name="text1">
						</textarea>
					</div>
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
		</div>
		

		

<!--
Arbetslivserfarenhet
Egenskaper
Utbildning
Top5-"VALFRITT"  <<Programmeringsspråk
-->



		



	</body>
</html>