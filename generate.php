<?php
// start session
session_start();
// specify output to image/jpeg
header("Content-type: image/jpeg");

// get text from session to print on captcha image
$text = $_SESSION['secure'];

// set font size
$font_size = 30;

// image height and width
$image_height = 40;
$image_width = 150;

// create blank image with specific height and width
$image = imagecreate($image_width, $image_height);
// set image background color to white
imagecolorallocate($image, 255, 255, 255);
// set text color to black
$text_color = imagecolorallocate($image, 0, 0, 0);

// generate random lines on captcha image
for($x = 1 ;$x <= 30 ;$x++)
{
    $x1 = rand(1,100);
    $y1 = rand(1, 100);
    $x2 = rand(1,100);
    $y2 = rand(1, 100);
    imageline($image, $x1, $y1, $x2, $y2, $text_color);
}

// set font style, font text color, font size and captcha text on image
imagettftext($image, $font_size, 0, 15, 30, $text_color, 'myfont.ttf', $text);

// generate captcha jpeg image
imagejpeg($image);
?>

