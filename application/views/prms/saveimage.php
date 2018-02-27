<?php
 
//set random name for the image, used time() for uniqueness
//C:\xampp\htdocs\MCMS\Uploads\captured_photo
$filename =  strtotime("now").'.jpg';
$filepath = './././Uploads/captured_photo/';
 
move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
 
echo $filepath.$filename;
?>