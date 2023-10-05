<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

header("Content-Type: image/png");
$im = @imagecreate(280, 100) or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im,0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 110);
imagestring($im, 1, 10, 50, "A Simple Text String:converted using GD library.", $text_color);

if (imagepng($im)) {
    imagedestroy($im);
} else {
    die("Image creation failed");
}
?>