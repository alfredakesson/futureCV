<?php
	require 'php_fnc.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			function createCookie(name,value,days) {
				if (days) {
					var date = new Date();
					date.setTime(date.getTime()+(days*24*60*60*1000));
					var expires = "; expires="+date.toGMTString();
				}
				else var expires = "";
				document.cookie = name+"="+value+expires+"; path=/";
			}			

			function readCookie(name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(';');
				for(var i=0;i < ca.length;i++) {
					var c = ca[i];
					while (c.charAt(0)==' ') c = c.substring(1,c.length);
					if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
				}
				return null;
			}

			function eraseCookie(name) {
				createCookie(name,"",-1);
			}

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
				createCookie(arg2, arg1, 1);
				document.getElementById(arg2).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(1)).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(2)).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(3)).style.backgroundColor=arg1;
				document.getElementById(arg2.concat(4)).style.backgroundColor=arg1;	
				
			}

			/* CHANGE LAYOUT!!*/
			function changeColor1(){
				changeColor();
				document.getElementById('box_mini_id_1').style.borderColor="#541116";
				createCookie('layout','layout_1',1);

			}

			function changeColor2(){
				changeColor();
				document.getElementById('box_mini_id_2').style.borderColor="#541116";
				createCookie('layout','layout_2',1);
			}
			function changeColor3(){
				changeColor();
				document.getElementById('box_mini_id_3').style.borderColor="#541116";
				createCookie('layout','layout_3',1);
			}
			function changeText (arg) {
				var text = document.getElementById('text'.concat(arg)).value;
				text = text.replace(/(\r\n|\n|\r)/gm,"<br>");
				createCookie('text'.concat(arg),text,1);
			}
			function changeName () {
				var text = document.getElementById('name').value;
				text = text.replace(/(\r\n|\n|\r)/gm,"<br>");
				createCookie('name',text,1);
			}
			function showUpload (arg){
				if(document.getElementById('useBG'.concat(arg)).checked){
					document.getElementById('upload'.concat(arg)).style.display="block";
				}else{
					document.getElementById('upload'.concat(arg)).style.display="none";
					createCookie('upload'.concat(arg),'none',1);
				}
			}
		</script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
	</head>
	<body>
		<div id="top_border">
			<ul>
   				<li><a href='generator.php'>Generate CV</a></li>
   				<li><a href='cratePage.php'>Preview CV</a></li>
			</ul>
		</div>
		
		<div id="content">
			<h1 style="margin-top: 30px; margin-bottom:50px">Step 1: <font color="#808080">Choose a layout!</font></h1>
			<div id="container_box_mini">

		
					<div id="box_mini_id_1" class="box_mini" onClick="changeColor1();" style="<?php if(strcmp($_COOKIE['layout'], 'layout_1') == 0){ echo 'border-color: #541116;';} else { echo 'border-color: white;';}?>">
						<div id="color_11" class="square" style="background-color:<?php echo $_COOKIE['color_1']; ?>"></div>
						<div id="color_21" class="square" style="background-color:<?php echo $_COOKIE['color_2']; ?>"></div>
						<div id="color_31" class="square" style="background-color:<?php echo $_COOKIE['color_3']; ?>"></div>
						<div id="color_41" class="square" style="background-color:<?php echo $_COOKIE['color_4'] ?>"></div>
					</div>
				
				
				
					<div id="box_mini_id_2" onClick="changeColor2();" class="box_mini" style="<?php if(strcmp($_COOKIE['layout'], 'layout_2') == 0){ echo 'border-color: #541116;';} else { echo 'border-color: white;';}?>">
						<div id="color_12" class="rectangle_horizontal" style="background-color:<?php echo $_COOKIE['color_1']; ?>"></div>
						<div id="color_22" class="rectangle_horizontal" style="background-color:<?php echo $_COOKIE['color_2']; ?>">
							<div id="color_32" class="rectangle_horizontal_inner" style="background-color:<?php echo $_COOKIE['color_3']; ?>"></div>						
						</div>
						<div id="color_42" class="rectangle_horizontal" style="background-color:<?php echo $_COOKIE['color_4']; ?>"></div>
					</div>
				
					<div id="box_mini_id_3" onClick="changeColor3();" class="box_mini" style="<?php if(strcmp($_COOKIE['layout'], 'layout_3') == 0){ echo 'border-color: #541116;';} else { echo 'border-color: white;';}?>">
						<div id="color_13" class="rectangle_vertical" style="background-color:<?php echo $_COOKIE['color_1']; ?>" ></div>
						<div id="color_23" class="rectangle_vertical" style="background-color:<?php echo $_COOKIE['color_2']; ?>">
							<div id="color_33" class="rectangle_vertical_inner" style="background-color:<?php echo $_COOKIE['color_3']; ?>"></div>						
						</div>
						<div id="color_43" class="rectangle_vertical" style="background-color:<?php echo $_COOKIE['color_4']; ?>"></div>
					</div>
				

			</div>
			
			<h1 style="margin-top: 0px; margin-bottom:50px;">Step 2: <font color="#808080">Fill your boxes!</font></h1>

			<div id="form_box">
				

						<div class="form_div" style= "background-color:#541116; color:white;">
						<p>Please, enter your full name:</p>
						<input id="name" type="text" name="name" onchange="changeName();" value="<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];}else{echo "Name";} ?>">
					</div>
					
					<div id="color_1" class="form_div" style= "background-color:<?php echo $_COOKIE['color_1']; ?>">
						
						<textarea id="text1" rows="4" cols="50" name="text1" onchange="changeText(1);"><?php if(isset($_COOKIE["text1"])){echo $_COOKIE["text1"];} ?></textarea>
						<p></p>
						<form id="upload1" action="generator.php" method="post"
						enctype="multipart/form-data" style = "display:none;">
						<input type="hidden" name="boxNbr" value="1"/>
						<label for="file">Choose background-image if you want: </label>
						<input type="file" name="file" id="file"><br>
						<input type="submit" name="submit" value="Upload">
						</form>

						
						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_1'');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_1');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_1');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_1');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>
						<input id="useBG1" type="checkbox" name="useBG1" value="useBG1" class="color_box" onClick="showUpload(1);">

					</div>
				
					<div id="color_2" class="form_div" style= "background-color:<?php echo $_COOKIE['color_2']; ?>">
						
						<textarea id="text2" rows="4" cols="50" name="text2" onchange="changeText(2);"><?php if(isset($_COOKIE["text2"])){echo $_COOKIE["text2"];} ?></textarea>
						<p></p>
						<form id="upload2" action="generator.php" method="post"
						enctype="multipart/form-data" style = "display:none;">
						<input type="hidden" name="boxNbr" value="2"/>
						<label for="file">Choose background-image if you want: </label>
						<input type="file" name="file" id="file"><br>
						<input type="submit" name="submit" value="Upload">
						</form>

						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_2');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>
						<input id="useBG2" type="checkbox" name="useBG2" value="useBG2" class="color_box" onClick="showUpload(2);">
					</div>

					<div id="color_3" class="form_div" style= "background-color:<?php echo $_COOKIE['color_3']; ?>">
						
						<textarea id="text3" rows="4" cols="50" name="text3" onchange="changeText(3);"><?php if(isset($_COOKIE["text3"])){echo $_COOKIE["text3"];} ?></textarea>
						<p></p>

						<form id="upload3" action="generator.php" method="post"
						enctype="multipart/form-data" style = "display:none;">
						<input type="hidden" name="boxNbr" value="3"/>
						<label for="file">Choose background-image if you want: </label>
						<input type="file" name="file" id="file"><br>
						<input type="submit" name="submit" value="Upload">
						</form>

						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_3');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>
						<input id="useBG3" type="checkbox" name="useBG3" value="useBG3" class="color_box" onClick="showUpload(3);">

					</div>
	
					<div id="color_4" class="form_div" style= "background-color:<?php echo $_COOKIE['color_4']; ?>">
						
						<textarea id="text4"rows="4" cols="50" name="text4" onchange="changeText(4);"><?php if(isset($_COOKIE["text4"])){echo $_COOKIE["text4"];} ?></textarea>
						<p></p>

						<p></p>

						<form id="upload4" action="generator.php" method="post"
						enctype="multipart/form-data" style = "display:none;">
						<input type="hidden" name="boxNbr" value="4"/>
						<label for="file">Choose background-image if you want: </label>
						<input type="file" name="file" id="file"><br>
						<input type="submit" name="submit" value="Upload">
						</form>

						<div onClick="changeColorOnBox('<?php echo $color1;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color1; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color2;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color2; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color3;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color3; ?>"></div>
						<div onClick="changeColorOnBox('<?php echo $color4;?>', 'color_4');" class="color_box" style="background-color:<?php echo $color4; ?>"></div>
						<input id="useBG4" type="checkbox" name="useBG4" value="useBG4" class="color_box" onClick="showUpload(4);">
	
					</div>
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