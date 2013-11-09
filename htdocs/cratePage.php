<?php
if(!isset($_COOKIE['color_1'])){
	$_COOKIE['color_1'] = $color1;	
}
if(!isset($_COOKIE['color_2'])){
	$_COOKIE['color_1'] = $color2;
}
if(!isset($_COOKIE['color_3'])){
	$_COOKIE['color_1'] = $color3;
}
if(!isset($_COOKIE['color_4'])){
	$_COOKIE['color_1'] = $color4;
}


if($_COOKIE['layout'] == 'layout_1'){
	$file = file_get_contents("tempEqSizeBox.html");
} else if($_COOKIE['layout'] == 'layout_3'){
	$file = file_get_contents("tempVertSizeBox.html");
} else{
	$file = file_get_contents("tempHorzSizeBox.html");
}
$file = str_replace("%%name%%",$_COOKIE["name"],$file);
$file = str_replace("%%text1%%",$_COOKIE["text1"],$file);
$file = str_replace("%%text2%%",$_COOKIE["text2"],$file);
$file = str_replace("%%text3%%",$_COOKIE["text3"],$file);
$file = str_replace("%%text4%%",$_COOKIE["text4"],$file);
$file = str_replace("%%color1%%",$_COOKIE['color_1'],$file);
$file = str_replace("%%color2%%",$_COOKIE['color_2'],$file);
$file = str_replace("%%color3%%",$_COOKIE['color_3'],$file);
$file = str_replace("%%color4%%",$_COOKIE['color_4'],$file);
$length = 5;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$filename = $randomString.".html";
if (false) {
	file_put_contents($filename,$file);
	header("Location: /$filename");
	exit;
}
echo $file;

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
		</script>
	</head>
	<body>


	</body>
</html>



