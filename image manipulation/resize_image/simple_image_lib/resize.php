<?php 
$image = '1920X1080p.jpg';
 include('imageclass.php'); 
$image_obj = new SimpleImage();
print_r($image);
$image_obj->load($image);
$image_obj->resizeToWidth(400); 
$image_obj->save('resized/'.$image);

?>