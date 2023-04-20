<?php 

	//echo "image"; 
	$file = "test.jpeg";
	list($width,$height)=getimagesize($file);
	$percent = 0.5;
	$newwidth = $width * $percent;
	$newheight = $height * $percent;
	$thumb = imagecreatetruecolor($newwidth,$newheight);
	$source = imagecreatefromjpeg($file);
	//
	imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, 		$newheight, $width, $height);
	$file_name = time().'.jpeg';
	imagejpeg($thumb,$file_name);
	
?>
