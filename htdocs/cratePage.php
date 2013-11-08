<?php
echo "hej";
$file = file_get_contents("tempEqSizeBox.html");
$file = str_replace("%%name%%",$_POST["name"],$file);
$file = str_replace("%%text1%%",$_POST["text1"],$file);
$file = str_replace("%%text2%%",$_POST["text2"],$file);
$file = str_replace("%%text3%%",$_POST["text3"],$file);
$file = str_replace("%%text4%%",$_POST["text4"],$file);
$file = str_replace("%%color1%%",$_POST["color1"],$file);
$file = str_replace("%%color2%%",$_POST["color2"],$file);
$file = str_replace("%%color3%%",$_POST["color3"],$file);
$file = str_replace("%%color4%%",$_POST["color4"],$file);
$length = 5;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$filename = $randomString.".html";
file_put_contents($filename,$file);