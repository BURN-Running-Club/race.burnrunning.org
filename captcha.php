<?php
session_start();

$ranStr = md5(microtime());
$ranStr = substr($ranStr, 0, 6);
$_SESSION['cap_code'] = $ranStr;
$ranAng = rand(0, 15);
$newImage = imagecreatefromjpeg("images/captcha_bg.jpg");
$txtColor = imagecolorallocate($newImage, 0, 0, 0);
putenv('GDFONTPATH=' . realpath('.') . '/fonts');
$font = 'Handwriting-Dakota.ttf';
$size = 5;
$x = 5;
$y = 5;

imagestring($newImage, $size, $x, $y, $ranStr, $txtColor);

header("Content-type: image/jpeg");
imagejpeg($newImage);

?>


