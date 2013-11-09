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
		<script type="text/javascript">

			function setColor1(){
				return '#B8CB95';
			}

			function setColor2(){
				return '#FFFFD9';
			}

			function setColor3(){
				return '#7AA5B3';
			}

			function setColor4(){
				return '#FEADAC';
			}

			function changeColor(){
				document.getElementById('box_mini_id_1').style.borderColor="white";
				document.getElementById('box_mini_id_2').style.borderColor="white";
				document.getElementById('box_mini_id_3').style.borderColor="white";
			}

			function changeColorOnBox(arg1, arg2, arg3){
				document.getElementById(arg2).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(1)).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(2)).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(3)).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(4)).style.backgroundColor=arg1;
			
			}


			function changeColor1(){
				changeColor();
				document.getElementById('box_mini_id_1').style.borderColor="#541116";
			}
			function changeColor2(){
				changeColor();
				document.getElementById('box_mini_id_2').style.borderColor="#541116";
			}
			function changeColor3(){
				changeColor();
				document.getElementById('box_mini_id_3').style.borderColor="#541116";
			}
		</script>
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

		
					<div id="box_mini_id_1" class="box_mini" onClick="changeColor1();">
						<div id="color_11" class="square" style="background-color:<?php echo $color1; ?>"></div>
						<div id="color_21" class="square" style="background-color:<?php echo $color2; ?>"></div>
						<div id="color_31" class="square" style="background-color:<?php echo $color3; ?>"></div>
						<div id="color_41" class="square" style="background-color:<?php echo $color4; ?>"></div>
					</div>
				
				
				
					<div id="box_mini_id_2" onClick="changeColor2();" class="box_mini">
						<div id="color_12" class="rectangle_horizontal" style="background-color:<?php echo $color1; ?>"></div>
						<div id="color_22" class="rectangle_horizontal" style="background-color:<?php echo $color2; ?>">
							<div id="color_32" class="rectangle_horizontal_inner" style="background-color:<?php echo $color3; ?>"></div>						
						</div>
						<div id="color_42" class="rectangle_horizontal" style="background-color:<?php echo $color4; ?>"></div>
					</div>
				
					<div id="box_mini_id_3" onClick="changeColor3();" class="box_mini">
						<div id="color_13" class="rectangle_vertical" style="background-color:<?php echo $color1; ?>" ></div>
						<div id="color_23" class="rectangle_vertical" style="background-color:<?php echo $color2; ?>">
							<div id="color_33" class="rectangle_vertical_inner" style="background-color:<?php echo $color3; ?>"></div>						
						</div>
						<div id="color_43" class="rectangle_vertical" style="background-color:<?php echo $color4; ?>"></div>
					</div>
				

			</div>
			
			<h1 style="margin-top: 0px; margin-bottom:50px;">Step 2: <font color="#808080">Fill your boxes!</font></h1>

			<div id="form_box">
				

					<form name="input" action="cratePage.php" method="post">
						<div class="form_div" style= "background-color:#541116; color:white;">
						<p>Please, enter your full name:</p>
						<input type="text" name="name">
					</div>
					
					<div id="color_1" class="form_div" style= "background-color:<?php echo $color1; ?>">
						
						<textarea rows="4" cols="50" name="text1">
						</textarea>
						<p></p>

						</select>
						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_1'');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_1');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_1');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_1');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>
					</div>
				
					<div id="color_2" class="form_div" style= "background-color:<?php echo $color2; ?>">
						
						<textarea rows="4" cols="50" name="text2">
						</textarea>
						<p></p>


						</select>
						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>	
					</div>

					<div id="color_3" class="form_div" style= "background-color:<?php echo $color3; ?>">
						
						<textarea rows="4" cols="50" name="text3">
						</textarea>
						<p></p>

						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>
					</div>
	
					<div id="color_4" class="form_div" style= "background-color:<?php echo $color4; ?>">
						
						<textarea rows="4" cols="50" name="text4">
						</textarea>
						<p></p>

						<p></p>

						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>	
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