<?php

/**
 * PHP GD
 * create a simple captcha image with GD library
 * 
 */

//setting the image header in order to proper display the image
header("Content-Type: image/png");

//try to create an image
$image = @imagecreate(200, 100) or die("Cannot Initialize new GD image stream");

//set the background color of the image
$bg_color = imagecolorallocate($image, 255, 255, 255);

//set the color for the text
$text_color = imagecolorallocate($image, 0, 0, 0);

//random number
$chars = "	0123456789";
$text = substr(str_shuffle($chars), 0, 5);

//add the string to the image
$font_size = 30;
$angle = rand(1, 10);
$xpos = rand(10, 50);
$ypos = rand(50, 70); 

imagettftext($image, $font_size, $angle, $xpos, $ypos, $text_color, 'XENOWORT.TTF', $text);

//outputs the image as png
imagepng($image);

//frees any memory associated with the image 
imagedestroy($image);
?>
