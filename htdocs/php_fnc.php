<?php

	
	$color1 = '#B8CB95';
	$color2 = '#FFFFD9';
	$color3 = '#7AA5B3';
	$color4 = '#FEADAC';

	if(!isset($_COOKIE['color_1'])){
		$_COOKIE['color_1'] = $color1;
	}
	if(!isset($_COOKIE['color_2'])){
		$_COOKIE['color_2'] = $color2;
	}
	if(!isset($_COOKIE['color_3'])){
		$_COOKIE['color_3'] = $color3;
	}
	if(!isset($_COOKIE['color_4'])){
		$_COOKIE['color_4'] = $color4;
	}

if(isset($_FILES["file"])){
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    setcookie("upload".$_POST['boxNbr'],$_FILES["file"]["name"]);
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
}
?>