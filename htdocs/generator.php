<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
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

				<a href=#form_box>
					<div class="box_mini">
						<div class="square"></div>
						<div class="square" style="background-color:red"></div>
						<div class="square" style="background-color:blue"></div>
						<div class="square" style="background-color:yellow"></div>
					</div>
				</a>
				
				<a href=#form_box>
					<div class="box_mini">
						<div class="rectangle_horizontal" style="background-color:red"></div>
						<div class="rectangle_horizontal" style="background-color:blue">
							<div class="rectangle_horizontal_inner" style="background-color:yellow"></div>						
						</div>
						<div class="rectangle_horizontal" style="background-color:green"></div>
					</div>
				</a>
				<a href=#form_box>
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
						<div class="form_div" style= "background-color:#541116; color:white;">
						<p>Please, enter your full name:</p>
						<input type="text" name="name">
					</div>
					
					<div class="form_div" style= "background-color:green;">
<<<<<<< HEAD
						<p>Skriv text:</p>
						<textarea rows="4" cols="50" name="text1"></textarea>
=======
						
						<textarea rows="4" cols="50" name="text1">
						</textarea>
						<p></p>
>>>>>>> df9703a56514b2da4adecce829de6256b8abd35a

						</select>
						<div class="color_box" style="background-color:green"></div>
						<div class="color_box" style="background-color:yellow;"></div>
						<div class="color_box" style="background-color:red;"></div>
						<div class="color_box" style="background-color:blue;"></div>
					</div>
				
					<div class="form_div" style= "background-color:yellow;">
<<<<<<< HEAD
						<p>Skriv text:</p>
						<textarea rows="4" cols="50" name="text2"></textarea>
						<p>Välj bakgrundsfärg:</p>
						<select name="color2">
  							<option>Azure</option>
  							<option>Coral</option>
  							<option>Cyan</option>
  							<option>Gold</option>
  							<option>Green</option>
  							<option>Indigo</option>
=======
						
						<textarea rows="4" cols="50" name="text2">
						</textarea>
						<p></p>


>>>>>>> df9703a56514b2da4adecce829de6256b8abd35a
						</select>
						<div class="color_box" style="background-color:green"></div>
						<div class="color_box" style="background-color:yellow;"></div>
						<div class="color_box" style="background-color:red;"></div>
						<div class="color_box" style="background-color:blue;"></div>
					</div>

					<div class="form_div" style= "background-color:red;">
<<<<<<< HEAD
						<p>Skriv text:</p>
						<textarea rows="4" cols="50" name="text3"></textarea>
						<p>Välj bakgrundsfärg:</p>
						<select name="color3">
  							<option>Azure</option>
  							<option>Coral</option>
  							<option>Cyan</option>
  							<option>Gold</option>
  							<option>Green</option>
  							<option>Indigo</option>
						</select>
					</div>
	
					<div class="form_div" style= "background-color:blue;">
						<p>Skriv text:</p>
						<textarea rows="4" cols="50" name="text4"></textarea>
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
=======
						
						<textarea rows="4" cols="50" name="text3">
						</textarea>
						<p></p>

						<div class="color_box" style="background-color:green"></div>
						<div class="color_box" style="background-color:yellow;"></div>
						<div class="color_box" style="background-color:red;"></div>
						<div class="color_box" style="background-color:blue;"></div>
					</div>
	
					<div class="form_div" style= "background-color:blue;">
						
						<textarea rows="4" cols="50" name="text4">
						</textarea>
						<p></p>

						<p></p>
						<div class="color_box" style="background-color:green"></div>
						<div class="color_box" style="background-color:yellow;"></div>
						<div class="color_box" style="background-color:red;"></div>
						<div class="color_box" style="background-color:blue;"></div>	
>>>>>>> df9703a56514b2da4adecce829de6256b8abd35a
					</div>
				</form>
				<div style="text-align:center; margin-top:15px"><input type="submit" value="Generate CV"></div>
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