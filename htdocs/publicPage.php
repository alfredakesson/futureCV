<?php
	require 'php_fnc.php';
	
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
	$file = file_get_contents("tempEqSizeBoxP.html");
} else if($_COOKIE['layout'] == 'layout_3'){
	$file = file_get_contents("tempVertSizeBoxP.html");
} else{
	$file = file_get_contents("tempHorzSizeBoxP.html");
}
$file = str_replace("%%name%%",$_COOKIE["name"],$file);
if (isset($_COOKIE["text1"])) {
	$file = str_replace("%%text1%%",$_COOKIE["text1"],$file);
}else{
	$file = str_replace("%%text1%%","",$file);
}
if (isset($_COOKIE["text2"])) {
	$file = str_replace("%%text2%%",$_COOKIE["text2"],$file);
}else{
	$file = str_replace("%%text2%%","",$file);
}
if (isset($_COOKIE["text3"])) {
	$file = str_replace("%%text3%%",$_COOKIE["text3"],$file);
}else{
	$file = str_replace("%%text3%%","",$file);
}
if (isset($_COOKIE["text4"])) {
	$file = str_replace("%%text4%%",$_COOKIE["text4"],$file);
}else{
	$file = str_replace("%%text4%%","",$file);
}
$file = str_replace("%%color1%%",$_COOKIE['color_1'],$file);
$file = str_replace("%%color2%%",$_COOKIE['color_2'],$file);
$file = str_replace("%%color3%%",$_COOKIE['color_3'],$file);
$file = str_replace("%%color4%%",$_COOKIE['color_4'],$file);
$length = 5;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$filename = "/d/".$randomString.".html";
file_put_contents($filename,$file);
header("Location: /$filename");
exit;

?>
