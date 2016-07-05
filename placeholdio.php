<?php
/**
 * @package placeholdio
 * Placeholder Generator with custom text
 * @author Abdul Awal Uzzal (abdulawal.com)
 * @version 1.0
 */
$image_width 	= $_REQUEST['w'];
$image_height 	= $_REQUEST['h'];
$img_string 	= $_REQUEST['str'];
$im 			= imagecreate($image_width, $image_height);
$black 			= imagecolorallocate($im, 0, 0, 0);
$font  			= 5;
$str_width 		= imagefontwidth($font) * strlen($img_string);
$str_height 	= imagefontheight($font);
$textcolor 		= imagecolorallocate($im, 0, 0, 0);

// Make the image background transparent
imagecolortransparent($im, $black);

// Write the string at center
imagestring($im, $font, ($image_width/2)-($str_width/2), ($image_height/2)-($str_height/2), $img_string, $textcolor);

// Output the image
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
?>
