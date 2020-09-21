<?php 
error_reporting(E_ALL); ini_set("display_errors",1);
function resize_image($image,$newwidth,$uploadPath){

	$filename = stripslashes($image);
	$pathInfo = pathinfo($image); 
	$extension  = strtolower($pathInfo['extension']);

	$size=filesize($image);


	if($extension=="jpg" || $extension=="jpeg" )
	{
		$src = imagecreatefromjpeg($image);
	}
	else if($extension=="png")
	{
		$src = imagecreatefrompng($image);
	}
	else 
	{
		$src = imagecreatefromgif($image);
	}

	list($width,$height)=getimagesize($image);

	$newheight=($height/$width)*$newwidth;
	$tmp=imagecreatetruecolor($newwidth,$newheight);


	imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight, 
		$width,$height);

	$new_file_path = $uploadPath."/".$image;

	//imagejpeg($tmp,$new_file_path,100); // for great quality  
	imagejpeg($tmp,$new_file_path,80);  // for above normal quality 
	//imagejpeg($tmp,$new_file_path,50);    // for below normal quality 
	//imagejpeg($tmp,$new_file_path,30);    // for above low quality 
	//imagejpeg($tmp,$new_file_path,10);    // for low quality 

	imagedestroy($src);
	imagedestroy($tmp);
	

}

	// usage like this  - 
	 resize_image('5.png',800,"small");

?>